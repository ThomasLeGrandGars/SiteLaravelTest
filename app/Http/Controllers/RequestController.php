<?php

namespace App\Http\Controllers;

use App\Site;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class RequestController extends Controller
{
    //

    // public function getData(Request $request){
    //     $request->validate([
    //         'email' => 'required|email',
    //         'message' => 'required'
    //     ]);

    //     Contact::create($request->all());
    //     return redirect()->back()
    //                      ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    // }

    public function sendEmail(Request $request){
        $file_to_attach = 'Bureau/onePieceEpisodeEcoute.txt';

        $details = [
            'name' => $request -> name,
            'msg' => $request -> msg,
            'email' => $request -> email,
            'file' => $request -> file,
        ];
        

        Mail::to('st-pierrethomas@hotmail.com') -> send(new ContactMail($details));
        // Attachment::fromPath($file_to_attach);
        return back() -> with('message_sent', 'Votre message a bien été envoyé!'); 
    }
}
