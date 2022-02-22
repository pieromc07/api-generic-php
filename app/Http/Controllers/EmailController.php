<?php

namespace App\Http\Controllers;

use App\Mail\ContactServipac;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function sendMail(Request $request)
    {
        // validar los datos
        $validated = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);

        if($validated) {

            // enviar el correo
            Mail::to('tg.elias.s@gmail.com')->send(new ContactServipac($request));
            // return $data;
            return json_encode(
                ['success' => true,
                'message' => 'Mensaje enviado correctamente',
            ]);
        } else {
            return json_encode(
                ['success' => false,
                'message' => 'Error al enviar el mensaje',
            ]);
        }
    }
}
