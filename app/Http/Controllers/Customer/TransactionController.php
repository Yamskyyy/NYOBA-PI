<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Service\UploadFileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function __construct(public UploadFileService $uploadFileService)
    {
    }

    public function index()
    {
        return view('customers.transaction');
    }

    public function datatable(Request $request)
    {
        $data = Transaction::getTransactionByUser()->get();

        return DataTables::of($data)
            ->addColumn('receipt', function ($row) {
                $icon = "";

                if ($row->receipt != null) {
                    $url = Storage::url($row->receipt);

                    $icon = '<a href="' . $url . '" target="_blank">
                    <i data-lucide="file" class="top-icon w-5 h-5 text-gray-500"></i>
                    </a>';
                }

                return '<div class="flex flex-col items-center gap-2">' . $icon . '<button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                class="inline-block focus:outline-none text-slate-500 hover:bg-slate-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-slate-500  text-sm font-medium py-1 px-3 rounded" onclick="openModal(' . $row->id . ')">
                Upload Receipt
            </button>' . '</div>';
            })
            ->rawColumns(['receipt'])
            ->toJson();
    }

    public function uploadReceipt(Request $request)
    {
        $path = $this->uploadFileService->uploadFile($request->file('receipt'));

        $transaction = Transaction::find($request->transaction_id);

        if ($transaction->receipt != null) {
            Storage::delete($transaction->receipt);
        }

        $transaction->update([
            'status' => 'process',
            'receipt' => $path
        ]);

        return redirect()->back();
    }
}
