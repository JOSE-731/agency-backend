<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //Mostramos todos los datos
        $contact = Contact::all();

        return $contact;
    }

    public function store(){
        
    }

}
