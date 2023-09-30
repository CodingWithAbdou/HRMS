<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Admin::create([
        //     'name' => 'admin',
        //     'username' => 'test@admin.com',
        //     'email' => 'admin',
        //     'password' => bcrypt('admin'),
        //     'added_by' => 1,
        //     'updated_by' => 1,
        //     'active' => 1,
        //     'date' => date('d-m-y'),
        //     'com_code' => 1,
        // ]);
        return view('admin.auth.index');
    }

    public function check()
    {
        return back();
    }
}
