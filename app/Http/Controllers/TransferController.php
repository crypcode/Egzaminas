<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Transfer;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Gate;


class TransferController extends Controller
{
    public function __construct(){
        $this->middleware('auth',[]);
    }
	
	public function makeTransfer()
    {
		$users = User::all();
        $transfers = Transfer::all();
		$accounts = Account::all();
        return view ('admin.pages.maketransfer', compact('transfers', 'accounts','users'));
    }
	
	public function store_transfer(Request $request)
    {
        $validateData = $request->validate([
            'accnumber' => 'required',
            'description' => 'required',
            'sum' => 'required',
            'name' => 'required',
			'userid' => 'required'
        ]);

        $transfer = Transfer::create([
            'accnumber' => request('accnumber'),
            'description' => request('description'),
            'sum' => request('sum'),
            'name' => request('name'),
			'userid' => request('userid')
			
        ]);
		
        return redirect('home');
    }
	
	public function Transfersummary(){
		$transfers = Transfer::all();
		return view ('admin.pages.accountsummary', compact('transfers'));
	}
}
