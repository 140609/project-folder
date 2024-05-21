<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('user_list');
    }

    public function getData()
    {
        $users = User::select(['first_name', 'last_name', 'email']);
        return DataTables::of($users)->make(true);
    }
}

?>