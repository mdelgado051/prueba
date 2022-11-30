<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Response;
use Validator;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'msg' => $request['msg']
        ];

        Mail::send("mails.contact-notification", $data, function ($message) use ($data) {
            $addressee = (env('APP_ENV') == 'local') ? 'denisse.reyes@deadline.com.mx' : 'p.denisse.reyes@gmail.com.mx';

            $message->to($addressee, 'Sertei')->subject('Notificación desde Sitio Web Contact');
            $message->from(config('mail.username'), 'Notificaciones Sertei');
        });

        return Response::json([
            "success" => true,
            "message" => "Gracias por escribirnos, a la brevedad nos comunicaremos contigo"
        ]);
    }

    public function sendMailCompany(Request $request){
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'company' => $request['company']
        ];

        Mail::send("mails.mail-company", $data, function ($message) use ($data) {
            $addressee = (env('APP_ENV') == 'local') ? 'denisse.reyes@deadline.com.mx' : 'p.denisse.reyes@gmail.com.mx';

            $message->to($addressee, 'Sertei')->subject('Notificación Sitio Web Company');
            $message->from(config('mail.username'), 'Notificaciones Sertei Company');
        });
        return Response::json([
            "success" => true,
            "message" => "Gracias por escribirnos, a la brevedad nos comunicaremos contigo"
        ]);
    }
    public function sendMailCommentary(Request $request){
        $data = array(
            'commentary' => $request['commentary']
        );

         Mail::send("mails.mail-commentary", $data, function ($message) use ($data) {
             $addressee = (env('APP_ENV') == 'local') ? 'denisse.reyes@deadline.com.mx' : 'p.denisse.reyes@gmail.com.mx';

             $message->to($addressee, 'Sertei')->subject('Notificación Sitio Web Comentario');
             $message->from(config('mail.username'), 'Notificaciones Sertei Comentario');
         });
         return Response::json([
             "success" => true,
             "message" => "Gracias por escribirnos, tu opinion nos impota"
         ]);
     }
}