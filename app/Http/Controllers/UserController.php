<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function update(Request $request, Vluser $vluser)
    {
        $this->validate($request,[
            //'usercode'=> 'required',
//            'lastname'=> 'required',
//            'email'=> 'required|email|unique:users',
//            'password'=> 'required'
//            //'avatar' => 'nullable|image'
        ]);

        $user = User::find($id);
        $user->edit($request->all());

        //return redirect()->route('cab.members');
    }


    public static function getList()
    {
        return User::all();
    }
}
