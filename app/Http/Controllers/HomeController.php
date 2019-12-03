<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create_info()
    {
        return view('guru/infocreate');
    }

     public function store_info()
    {
        return view('');
    }

    public function create_program()
    {
        return view('program/programcreate');
    }

    public function program()
    {
        return view('program/program');
    }

    public function listattendee()
    {
        return view('program/lihatsemuapendaftar');
    }

     public function store_program()
    {
        return view('');
    }

    public function create_event()
    {
        return view('guru/eventcreate');
    }


    public function event()
    {
        return view('guru/event');
    }

     public function store_event()
    {
        return view('');
    }

    public function daftarkaryawan()
    {
        return view('info/daftarkaryawan');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function contact_bimbel()
    {
        return view('contactbimbel');
    }

    public function sukses_daftar()
    {
        return view('suksesdaftar');
    }

    public function sukses_contact()
    {
        return view('suksescontact');
    }
}
