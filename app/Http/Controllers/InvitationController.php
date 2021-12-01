<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InvitationController extends Controller
{
    public function index(){
        //return view('invitations.index');
        //$user = Auth::user()->id;
        //dd($user->name);
        //dd(User::find($user)->invitation->attending);
        $users = DB::table('users')
            ->leftJoin('invitations', 'users.id', '=', 'invitations.user_id')
            ->get();

        //dd($users);
        return view('invitations.index', ['users' => $users]);
    }
}
