<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Contact_Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    // Function Create Message Contact
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required'
        ]);
        // If Validation perfect
            $date = date('Y-m-d h:i:s');
            $sql = "INSERT INTO `contacts` (`first_name`,`last_name`,`email`,`phone`,`message`,`created_at`) VALUES ('$request->first_name','$request->last_name','$request->email','$request->phone','$request->message','$date')";
            $contact = DB::insert($sql);
            if($contact)
            {
                $alsa_name = "Alsa Service";
                $email = $request->email;
                $full_name = $request->first_name.' '.$request->last_name;
                $emails_sends_to = Contact_Admin::all();
                $data = array(
                  'full_name' => $full_name,
                  'email' => $email,
                  'body' => "Test ALAH",
                );
                foreach ($emails_sends_to as $emails)
                {
                    Mail::send('emails.email',$data,function($message) use ($emails,$email, $full_name , $alsa_name){
                        $message->from($email,$full_name);

                        $message->to($emails->email, $alsa_name)->subject('Contact Alsa');
                    });
                }

                return redirect('/');
            }
            else{
                return dd("error");
            }


    }

}
