<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index(): string
    {
        return view('template');
    }

    public function about(): string
    {
        $data = [
            "title" => "About Us",
            "nama" => "Dzikri Maulana",
            "tempatLahir" => "Karawang",
            "alamat" => "Karawang, Jawa Barat",
            "minat" => "Cyber Security"
        ];

        return view('about', $data);
    }

    public function home(): string
    {
        $data = [
            "title" => "Home",
            "nama" => "Dzikri Maulana",
        ];

        return view('home', $data);
    }
}
