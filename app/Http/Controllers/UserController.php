<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import ang DB facade

class UserController extends Controller
{
    /**
     * Store a newly created user management data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate ang request data
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'roles' => 'required|string|max:255',
            'monitoring' => 'required|string|max:255',
        ]);

        // Mag-insert ng bagong record sa user_management table
        DB::table('user_management')->insert([
            'name' => $request->input('name'),
            'department' => $request->input('department'),
            'roles' => $request->input('roles'),
            'monitoring' => $request->input('monitoring'),
        ]);

        // I-redirect pabalik kasama ang success message
        return redirect()->back()->with('success', 'User management data stored successfully.');
    }
}
