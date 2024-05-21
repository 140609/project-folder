<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Importing the User model if it's used in the controller

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        return view('dashboard', compact('userCount'));
    }
}
?>
