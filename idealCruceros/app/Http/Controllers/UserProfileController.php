<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['profile']]);
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }

    public function profileUser($id)
    {
        $user = User::find($id);
        return view('web.perfilUsuario', compact('user'));
    }

    public function profileTripulante($id)
    {
        $user = User::find($id);
        return view('web.perfilTripulante', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(User::$rulesProfile);


        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->fechaNaci = $request->fechaNaci;
        $user->numTlf = $request->numTlf;

        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        $user->save();

        return view('user.profile', compact('user'));
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {   
        request()->validate(User::$rulesProfile);


        $user = User::find($id);

        $user->name = $request-> name;
        $user->email = $request->email;
        $user->dni = $request-> dni;
        $user->fechaNaci = $request-> fechaNaci;
        $user->numTlf = $request-> numTlf;
       
        if(!empty($request->password)){
            $user->password = $request->password;
        }

        $user->save();

        return view('web.perfilUsuario', compact('user') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function updateTripulante(Request $request, $id)
    {
        request()->validate(User::$rulesProfile);


        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->fechaNaci = $request->fechaNaci;
        $user->numTlf = $request->numTlf;

        if (!empty($request->password)) {
            $user->password = $request->password;
        }

        $user->save();

        return view('web.perfilUsuario', compact('user'));
    }
}
