<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function mahasiswa()
    {
        helper('url');

        return redirect()->to(site_url('mahasiswa'));
    }

    public function dosen()
    {
        return view('dosen/index');
    }

    public function matakuliah()
    {
        return view('matakuliah/index');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
