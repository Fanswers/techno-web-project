<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function modify_userAdmin(request $request)
    {
        $id = $request->id;

        $user = User::find($id);
        $user->update([
            'type' => request('type'),
            'secondName' => request('secondName'),
            'firstName' => request('firstName'),
            'email' => request('email'),
            'addresse' => request('addresse'),
            'phone' => request('phone'),
            'solde' => request('solde'),
            'password' => Hash::make(request('password'))
        ]);

        return back();
    }

    public function delete_user(request $request)
    {
        $id = $request->id;

        User::where('id', $id)->delete();

        return back();
    }

    public function user_admin(request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return view('userAdminModify', ['user' => $user]);
    }

    public function modify_user(request $request)
    {
        $id = $request->id;

        $user = User::find($id);
        $user->update([
            'secondName' => request('secondName'),
            'firstName' => request('firstName'),
            'email' => request('email'),
            'addresse' => request('addresse'),
            'phone' => request('phone'),
            'solde' => request('solde'),
            'password' => Hash::make(request('password'))
        ]);

        return back();
    }

    public function user(request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return view('userModify', ['user' => $user]);
    }
}
