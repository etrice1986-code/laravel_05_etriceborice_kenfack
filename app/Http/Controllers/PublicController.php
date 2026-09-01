<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public $users = [
        ['name'=> 'Merlin', 'surname'=> 'Kante', 'role'=> 'Senior Manager'],
        ['name'=> 'Alino', 'surname'=> 'Nanu', 'role'=> 'HR'],
        ['name'=> 'Sala', 'surname'=> 'Mohamed', 'role'=> 'Developer'],
    ];

    public function homepage() 
    {
        return view('homepage');
    }

    public function aboutus()
    {
        return view('about-us', ['users' => $this->users]);
    }

    public function contattaci() 
    {
        return view('contattaci');
    }

    public function aboutUsDetail($name)
    {
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('about-us-detail', ['user' => $user]);
            }
        }
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        try {
           
            Mail::to('noreply@moviedb.com')->send(new ContactMail($data));

            return redirect(route('homepage'))->with('emailSent', 'Mail correttamente inviata!');

        } catch (\Throwable $e) {
            return redirect()->route('homepage')
                ->withInput()
                ->with('emailError', "C'è stato un problema con l'invio delle mail, per favore riprova più tardi.");
        }
    }
}
