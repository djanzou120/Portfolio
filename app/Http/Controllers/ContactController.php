<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function create(Request $request) {
        $validator = Validator::make($request->all((new Contact())->getFillable()), (new ContactRequest())->rules());

        if ($validator->fails())
            return json_encode(array('state' => 'error', 'msg' => $validator->errors()));

        $contact = Contact::create($request->all());

        Mail::to(['junior.djanzou@dsmart.dev', 'djanzou120@yahoo.fr'])->send(new ContactMail($contact));

        return json_encode(array('state' => 'success', 'msg' => 'Contact bien pris en compte.'));
    }
}
