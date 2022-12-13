<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Auth;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::all();

        return view('Goals', compact('goals'));
    }

    public function createForm()
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null || !Auth::user()->admin)
        {
            return redirect('/');
        }

        return view('goalCreate');
    }

    public function create(Request $request)
    {
        
        $wallet = Auth::user()->wallet;
        if ($wallet == null || !Auth::user()->admin)
        {
            return redirect('/');
        }

        $request->validate([
            'description' => 'required|string|max:255'
        ]);

        Goal::create([
            'description' => request('description')
        ]);

        return redirect('/');
    }

    public function editForm(Goal $goal)
    {
        return view('goalEdit', compact('goal'));
    }

    public function edit(Goal $goal, Request $request)
    {
        $wallet = Auth::user()->wallet;
        if ($wallet == null || !Auth::user()->admin)
        {
            return redirect()->route('dashboard');
        }

        $request->validate([
            'description' => 'required|string|max:255'
        ]);

        $goal->description = request('description');
        $goal->save();
        
        return redirect()->route('goals');
    }

    public function deleteForm(Goal $goal)
    {
        return view('goalDelete', compact('goal'));
    }

    public function delete(Goal $goal, Request $request)
    {
        $goal->delete();

        return redirect()->route('goals');
    }
}
