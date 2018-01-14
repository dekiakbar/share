<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\EmailReq;

class Email extends Controller
{

    public function kirim(EmailReq $request){
    	$nama  = $request->input('nama');
        $pesan = $request->input('pesan');
        $email = $request->input('email');

        $kirim = Mail::send('email.kirim', ['nama' => $nama, 'pesan' => $pesan,'email' => $email], function ($message)
                {
                    $message->to('dekiakbar1337@gmail.com');
                    $message->subject("Notifikasi Feedback");
                });
        if (!$kirim) {
            $status = session()->flash('status','Pesan Terkirim, Terima Kasih');
        }else{
            $status = session()->flash('status','Pesan Tidak Terkirim, Mohon Coba Lagi');
        }
        
        return redirect('/');
    }
}
