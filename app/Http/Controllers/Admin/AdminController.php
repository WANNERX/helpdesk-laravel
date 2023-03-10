<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function showUser(){
        $dataUser = User::paginate(1);
        return view('Admin.report', compact('dataUser'));
    }
}
