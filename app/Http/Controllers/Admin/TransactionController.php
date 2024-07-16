<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Transaction::all();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $icon = "";

                    if ($row->receipt != null) {
                        $url = Storage::url($row->receipt);

                        $icon = '<a href="' . $url . '" target="_blank">
                    <i data-lucide="file" class="top-icon w-5 h-5 text-gray-500"></i>
                    </a>';
                    }

                    return '<div class="flex flex-col items-center gap-2">' . $icon . '<button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                        class="inline-block focus:outline-none text-slate-500 hover:bg-slate-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-slate-500  text-sm font-medium py-1 px-3 rounded" onclick="openModal(' . $row->id . ')">
                        Process Transaction
                    </button>' . '</div>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin.transaction.index');
    }


    public function processTransaction(Request $request)
    {
        // Validasi request untuk memastikan transaction_id ada
        $request->validate([
            'transaction_id' => 'required|exists:transactions,id'
        ]);

        // Ambil transaction_id dari request
        $transaction_id = $request->input('transaction_id');

        // Temukan transaksi berdasarkan transaction_id
        $transaction = Transaction::find($transaction_id);

        // Perbarui kolom status menjadi 'shipped'
        if ($transaction) {
            $transaction->status = 'shipped';
            $transaction->save();
        }

        // Kembalikan respon atau redirect sesuai kebutuhan
        return redirect()->back()->with('success', 'Transaction status updated to shipped.');
    }
}
