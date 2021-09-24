<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminp()
    {
        return view('admin.profile.profile');
    }
    public function index()
    {
        $user = User::get();
        return response($user, 200);
    }
}
