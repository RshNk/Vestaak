<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request$request){
        $page='contact';
        $data=['name'=>$request->get('name'),'email'=>$request->get('email'), 'message'=>$request->get('message'),];
        $subject='new contact from vestaak.com';
        $Email='h.faghihi15@gmail.com';
        $to_email='h.faghihi15@gmail.com';
        $name='ایمیل کاربری';
        try {
            \Mail::send('Emails.'.$page, $data, function($message) use ($Email,$subject,$name,$to_email) {
                $message->to($to_email)->subject
                ($subject);
                $message->from($Email,$name);
            });
        } catch (\Exception $e) {
            if (count(\Mail::failures()) > 0) {
                return 0;
            }
        }
        return 1;
    }
}
