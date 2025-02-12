<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdvisorController extends Controller
{
    public function showOfficer(Request $request)
    {
        $officers = User::where('role', 'admin')->get();

        $yearLevels = User::where('role', 'student')->distinct()->pluck('year_level');
        $query = User::query();

        $query = User::where('role', 'student');
        if ($request->has('rfid') && !empty($request->rfid)) {
            $query->where('rfid', $request->rfid);
        } elseif ($request->has('year_level') && $request->year_level !== 'all') {
            // Filter by year level if selected
            $query->where('year_level', $request->year_level);
        }

        $students = $query->get();

        return view('admin.advisor.officers', compact('officers', 'students', 'yearLevels'));
    }

    // public function reElect($id)
    // {
    //     // $officer = User::findOrFail($id);
    //     // $officer->update(['role' => 'admin']);

    //     return redirect()->route('admin.advisor.officers')->with('success', "{$officer->name} has been promoted.");
    // }

    public function promote(Request $request, $id)
    {
        $request->validate([
            'promotion_level' => 'required|string|in:advisor,president,vice-president,officer,treasurer,secretary',
        ]);

        $officer = User::findOrFail($id);

        $officer->update(['possition' => $request->promotion_level]);

        return redirect()->route('admin.advisor.officers')
            ->with('success', "{$officer->name} has been promoted to " . ucfirst($request->promotion_level) . ".");
    }
    public function evict($id)
    {
        $officer = User::findOrFail($id);
        $officer->update(['role' => 'student']);
        $officer->update(['possition' => NULL]);
        // $officer->update(['role' => NULL]);

        return redirect()->route('admin.advisor.officers')->with('success', "{$officer->name} has been demoted to student.");
    }

    public function addStudentAdmin($id)
    {
        $student = User::findOrFail($id);
        $student->update(['role' => 'admin']);

        return redirect()->route('admin.advisor.officers')->with('success', "{$student->name} has been added as an officer.");
    }

    public function deleteStudent($id)
    {
        $student = User::findOrFail($id);
        $student->update(['role' => 'student']);

        return redirect()->route('admin.advisor.officers')->with('success', "{$student->name} has been removed from the officer list.");
    }

    public function showStudents(Request $request)
    {
        $users = User::all();

        $yearLevels = User::whereNotNull('year_level')->distinct()->pluck('year_level');

        $query = User::query();

        if ($request->filled('rfid')) {
            $query->where('rfid', $request->rfid);
        }

        if ($request->filled('year_level') && $request->year_level !== 'all') {
            $query->where('year_level', $request->year_level);
        }

        $users_query = $query->get();

        return view('admin.advisor.useraccess', compact('users', 'users_query', 'yearLevels'));
    }

    public function updateUserAccess(Request $request, $id)
    {
        $request->validate([
            'access_status' => 'required|string|in:pending,granted,revoked',
        ]);
        $user = User::findOrFail($id);
        $user->update([
            'access_status' => $request->access_status,
        ]);

        return redirect()->route('admin.advisor.useraccess')->with('success', 'Access status updated successfully.');
    }





}
