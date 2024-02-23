<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MembersController extends Controller
{
    public function index(): View
    {
        $members = Member::all();
        return view('members.index', ["members" => $members]);
    }

    
    public function create(): View
    {
        return view('members.create');
    }


    public function store(Request $request) 
    {
        $inputs = $request->validate([
            'name' => 'required|min:5|max:50|regex:/[a-zA-Z\s]+/',
            'email' => 'required|min:5|max:100',
        ], [
            "name.required" => "A model is required",
            "email.required" => "a brand is required",
        ]);

        try {
            $member = new Member();
            $member->fill($inputs);

            $member->save();

            return redirect()->route('members.index');

        } catch (\Exception $e) {
            report($e);
            return back()->with('error', $e->getMessage());
        }
    }


    public function show(int $id) 
    {
        try {
            $member = Member::find($id);
            return view('show', ['member'=> $member]);
        } catch (\Exception $e) {
            report($e);
            return back()->with('error', $e->getMessage());
        }
    }


    public function delete(int $id) 
    {
        try {
            Member::destroy($id);
        } catch (\Exception $e) {
            report($e);
            return back()->with('error', $e->getMessage());
        }
    }

}