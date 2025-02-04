<?php

namespace App\Http\Controllers;

use App\Models\Borrowed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BorrowController extends Controller
{
    public function borrowerList()
    {
        $officers = User::where('role', 'admin')->get();

        $borrowedItems = DB::table('borrowed')
        ->join('users as borrowers', 'borrowed.user_id', '=', 'borrowers.id') // Join for user_id
        ->leftJoin('users as rfid_users', 'borrowed.borrower_name', '=', 'rfid_users.name') // Join for borrower_name
        ->select(
            'borrowed.*',
            'borrowers.rfid as user_rfid',  // RFID of user_id
            'rfid_users.rfid as borrower_rfid', // RFID of borrower_name if it exists
            'borrowers.name as user_name'
        )
        ->get();
        return view('admin.officer.borrowersList', compact('borrowedItems', 'officers'));
    }

    public function addBorrow(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required|exists:users,id',
            // 'borrower_name' => 'required|string',
            'borrowed_item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'date_issued' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:date_issued',
        ]);

        $user = User::findOrFail($request->user_id);
        $admin = Auth::user();

        // DB::enableQueryLog();

        Borrowed::create([
            'user_id' => $admin->id,
            'borrower_name' => $request->borrower_name,
            'borrowed_item' => $request->borrowed_item,
            'quantity' => $request->quantity,
            'admin_id' => $admin->id ?? 'System',
            'status' => 'pending', // Default status
            'date_issued' => $request->date_issued,
            'return_date' => $request->return_date,
        ]);

        return redirect()->route('admin.officer.borrowersList')->with('success', 'Borrow record added successfully.');
    }

    public function destroy($id)
    {
        $borrow = Borrowed::findOrFail($id);
        $borrow->delete();

        return redirect()->route('admin.officer.borrowersList')->with('success', 'Borrow record deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            'borrower_name' => 'required|string',
            // 'borrower_rfid' => 'required|string',
            'borrowed_item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'date_issued' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:date_issued',
            'status' => 'required|string|in:pending,approved,returned',
        ]);

        $borrow = Borrowed::findOrFail($id);
        $borrow->update([
            'borrower_name' => $request->borrower_name,
            // 'borrower_rfid' => $request->borrower_rfid,
            'borrowed_item' => $request->borrowed_item,
            'quantity' => $request->quantity,
            'date_issued' => $request->date_issued,
            'return_date' => $request->return_date,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.officer.borrowersList')->with('success', 'Borrow record updated successfully.');
    }

}
