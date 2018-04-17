<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create ()
	{
		return view('contact.create');
	}
	
	public function store(Request $request)
	{
		$contact = [];
		
		
		$contact['nom_evenement'] = $request->get('nom_evenement');
		$contact['message'] = $request->get('message');
		Mail::to("dbf79f7b15-2f4ba1@inbox.mailtrap.io")->send(new ContactEmail($contact));
		
		//flash('Le message a bien été envoyé !')->succes();
		
		return redirect()->route('contact.create');
	}
}
