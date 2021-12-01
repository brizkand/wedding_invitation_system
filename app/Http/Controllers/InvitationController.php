<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class InvitationController extends Controller
{
    public function index(){
        //return view('invitations.index');
        $user = Auth::user()->id;
        //dd($user->name);
        dd(User::find($user)->invitation->attending);
    }
}
