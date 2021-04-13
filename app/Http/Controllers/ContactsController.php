<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Validation\Rule;
use function request;

class ContactsController extends Controller
{
    public $id;
    public $contactNumber;

    public function index()
    {
        $contacts = Contact::get();
        return view('index', compact('contacts'));
    }

    public function create()
    {
        $input = request()->validate([
            'name' => ['required'],
            'contact' => ['required', 'max:11', 'unique:contacts,contact,' . request('id')]
        ]);

        Contact::create([
            'name' => $input['name'],
            'contact' => $input['contact']
        ]);

        return redirect('/home');
    }

    public function update($id)
    {
        $contact = Contact::find($id);
        return view('edit', compact('contact'));
    }


    public function updateContact()
    {
        $temp = request()->all();

        request()->validate([
            'name' => ['required'],
            'contact' => ['required', 'max:11', 'unique:contacts,contact,' . request('id')]
        ]);


        Contact::find($temp['id'])->update([
            'name' => $temp['name'],
            'contact' => $temp['contact']
        ]);
        return redirect('/home');

    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        return redirect('/home');
    }
}
