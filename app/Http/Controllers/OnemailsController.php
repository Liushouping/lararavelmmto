<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onemail;
use Alert;
use Illuminate\Support\Facades\Mail;

class OnemailsController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:onemail',
        ],
        [
            'email.required' => '信箱帳號必須填入。',
            'email.unique' => '信箱帳號已經重複填入。',
        ]
         );

        $onemails = Onemail::create([
            'email' => $request->email,
        ]);

        $email = $request->email;

        // Mail::to($email)->send(new Contactsendmail( $name, $body, $email));
        return redirect()->back()->with('success','Thank you for your submission. You will be notified at a later time.');
    }
}
