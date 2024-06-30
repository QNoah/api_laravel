<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class ContactController extends Controller
{
    public function index(){
        $contacts = Message::all();
        return response()->json($contacts);
    }
    public function store(Request $request){
        $contact = Message::create($request-> all());
        return response()->json($contact, 201);
    }
}
