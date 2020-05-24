<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conosciamoci');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome'=>'required',
            'email'=>'required|email'
        ]);

        $details = [
            'nome' => $request->nome,
            'email' => $request->email

        ];

        Mail::to('hello@elegraf.it')->queue(new \App\Mail\ContactMessage($details));
        Mail::to($request->email)->queue(new \App\Mail\ContactMessage($details));
        return redirect()->back()->with('flash_message', 'Grazie per averci contattato!');
    }






}
