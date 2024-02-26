<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function index()
    {
        //return "Teste";

        $testMailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];

        Mail::to('8b16379ccbe9ad')
            ->send(new SendMail($testMailData));

        dd('Success! Envio de Email foi um sucesso.');

    }
}
