<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $wallet = Auth::user()->wallet;

        if ($wallet == null) {
            $wallet = Wallet::create([
                'user_id' => Auth::id()
            ]);
        }

        return view('Dashboard1', compact('wallet'));
    }

    public function editForm()
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }
        
        return view('', compact('wallet'));
    }

    public function edit(Request $request)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }

        $request->validate([
            'avg_income' => 'numeric|required',
            'balance' => 'numeric|required',
            'loans' => 'numeric|required'
        ]);

        $wallet->avg_income = request('avg_income');
        $wallet->balance = request('balance');
        $wallet->loans = request('loans');
        $wallet->save();
        
        return redirect()->back();
        
    }
}
