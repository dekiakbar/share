<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\KontakReq;
use App\Mail\KontakMail;

class Kontak extends Controller
{
    public function kirim(KontakReq $request){
    	$kontak = [];

    	$kontak['nama'] = $request->get('nama');
    	$kontak['email'] = $request->get('email');
    	$kontak['pesan'] = $request->get('pesan');

    	Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
    	
    	flash('Your Message Has Been Sent')->success();
    	return redirect('/'); 
    }
}
