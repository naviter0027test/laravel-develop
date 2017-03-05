<?php

namespace App\Http\Controllers;

use App\Page;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactControl extends Controller
{
    //
    public function show()
    {
        $allPage = Page::get();
        return view("contact", ['allPage' => $allPage]);
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'company' => 'required'
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->company = $request->company;
        $contact->memo = $request->memo;
        $contact->created_at = date("Y-m-d H:i:s");
        unset($contact->updated_at);
        $contact->save();
        $request->session()->flash('alert-success', '留言成功');
        return redirect("/contact");
    }
}
