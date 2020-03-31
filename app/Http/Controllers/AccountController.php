<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transfer;
use App\Account;

class AccountController extends Controller
{
    public function dashboard()
    {
        $accounts = Account::all();

        return view ('admin.pages.dashboard', compact('accounts'));
    }
	
}
