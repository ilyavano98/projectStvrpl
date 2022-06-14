<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function client()
    {
        return view("client");
    }

    public function manager()
    {
        $list_note = new ContactModel();
        return view("manager", ["list_note"=> $list_note->all()]);
    }

    public function managerContent($id)
    {
        $list_note = ContactModel::find($id);
//        dd($list_note);
        return view("content", ["list_note"=>$list_note]);
    }

    public function client_check(Request $request)
    {
//        dd($request);
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'message'=>'required|min:20|max:600'
        ]);

        $client_note = new ContactModel();

        $client_note->name = "Илья";
        $client_note->email = $request->input("email");
        $client_note->message = $request->input("message");
        $client_note->status = 0;
        $client_note->comment = "";
        $client_note->created_at;
        $client_note->updated_at = "";

        $client_note->save();
        $mesg = "все ок";
        return redirect()->route("client")->with(["mesg"=>$mesg]);
//        return view("client")->with("mesg", "все ок");
    }
}
