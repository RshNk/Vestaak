<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPSTORM_META\type;

class ContactController extends Controller
{
    public function contact(Request$request){
        $page = 'contact';
        \Log::info('message is '.$request->get('message'));
        $data=['name'=>$request->get('name'),'email'=>$request->get('email'), 'text'=>$request->get('message')];
        \Log::info('data is '. json_encode($data));
        $subject='new contact from vestaak.com';
        $Email='h.faghihi15@gmail.com';
        $to_email='h.faghihi15@gmail.com';
        $name='ایمیل کاربری';
        try {
            \Mail::send('Emails.'.$page, $data, function($message) use ($Email,$subject,$name,$to_email) {
                $message->to($to_email)->subject($subject)->from($Email,$name);
            });
        } catch (\Exception $e) {
            if (count(\Mail::failures()) > 0) {
                return 0;
            }
            \Log::error($e);
            return 0;
        }
        return 1;
    }
}
