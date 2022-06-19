<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Subscripcion;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(Request $request)
    {

        Mail::to($request->mail)->send(new Subscripcion());

        // if (Mail::failures()) {
        //     return response()->Fail('Lo siento! Intentalo de nuevo');
        // } else {
        //     return response()->success('Bien! Te has subscrito');
        // }
        return redirect('/');
    }
}
