<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests\EmailReq;
use App\Mail\Email;

class EmailCon extends Controller
{

    public function kirim(EmailReq $request){
    	$kontak = [
            'nama'  => $request->input('nama'),
            'pesan' => $request->input('pesan'),
            'email' => $request->input('email')
        ];

        $emailAdmin = setting('site.email');

        if (!Mail::to($emailAdmin)->send(new Email($kontak))) {
            $status = session()->flash('status','Pesan Terkirim, Terima Kasih');
        }else{
            $status = session()->flash('status','Pesan Tidak Terkirim, Mohon Coba Lagi');
        }
        
        return redirect('/');
    }
}
