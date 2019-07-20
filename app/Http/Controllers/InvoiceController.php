<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoices.index');
    }

    public function create()
    {
        $plans = Plan::all();
        $users = User::pluck('name', 'id');

        return view('invoices.create', compact('plans', 'users'));
    }
}
