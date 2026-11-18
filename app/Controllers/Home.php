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
        helper('url');

        return redirect()->to(site_url('dosen'));
    }

    public function matakuliah()
    {
        helper('url');

        return redirect()->to(site_url('mata-kuliah'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}
