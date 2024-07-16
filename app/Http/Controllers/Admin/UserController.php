<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '<div class="flex flex-row items-center gap-2">
                        <a href="' . route('admin.users.edit', $row->id) . '">
                            <i data-lucide="pen" class="top-icon w-5 h-5 text-green-500"></i>
                        </a>
                        <button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                            onclick="openModal(' . $row->id . ')">
                            <i data-lucide="trash" class="top-icon w-5 h-5 text-red-500"></i>
                        </button>
                    </div>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('admin.users.index')->with('success', "User Added");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::find($id);

        return view('admin.user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data = User::find($id);

            $password = "";
            if ($request->password != null) {
                $password = Hash::make($request->password);
            } else {
                $password = $data->password;
            }

            $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
            ]);

            return redirect()->route('admin.users.index')->with('success', "User Updated");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            $data = User::find($request->user_id);

            $data->delete();

            return redirect()->back()->with('success', "User deleted");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
