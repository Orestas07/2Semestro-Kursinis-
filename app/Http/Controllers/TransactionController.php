<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Auth;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }

        $transactions = $wallet->transactions()->orderBy('purchase_date', 'desc')->get();

        return view('budget', compact('transactions'));
    }

    public function createForm()
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }

        return view('transactionsCreate');
    }

    public function create(Request $request)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }

        $request->validate([
            'location' => 'string',
            'description' => 'string',
            'purchase_date' => 'date|required',
            'cost' => 'numeric|required'
        ]);

        Transaction::create([
            'location' => request('location'),
            'description' => request('description'),
            'purchase_date' => request('purchase_date'),
            'cost' => request('cost'),
            'wallet_id' => $wallet->id
        ]);

        return redirect('/');
    }

    public function editForm(Transaction $transaction)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }
        if ($transaction->wallet_id != $wallet->id)
        {
            return redirect('/');
        }
        return view('transactionsEdit', compact('transaction'));
    }

    public function edit(Request $request, Transaction $transaction)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }
        if ($transaction->wallet_id != $wallet->id)
        {
            return redirect('/');
        }


        
        $request->validate([
            'location' => 'string',
            'description' => 'string',
            'purchase_date' => 'date|required',
            'cost' => 'numeric|required'
        ]);

        $transaction->location = request('location');
        $transaction->description = request('description');
        $transaction->purchase_date = request('purchase_date');
        $transaction->cost = request('cost');
        $transaction->save();
        
        return redirect('/budget');
    }

    public function removeForm(Transaction $transaction)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }
        if ($transaction->wallet_id != $wallet->id)
        {
            return redirect('/');
        }

        return view('', compact('transaction'));
    }

    public function remove(Request $request, Transaction $transaction)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null)
        {
            return redirect('/');
        }
        if ($transaction->wallet_id != $wallet->id)
        {
            return redirect('/');
        }
        
        $transaction->delete();

        return redirect('/');
    }
}
