<?php

namespace App\Controllers;

class Siakad extends BaseController
{
    public function index()
    {
        helper('url');

        return view('siakad/home', [
            'title'  => 'Beranda',
            'active' => 'beranda',
        ]);
    }

    public function mahasiswa()
    {
        helper('url');

        return view('siakad/mahasiswa/index', [
            'title'  => 'Mahasiswa',
            'active' => 'mahasiswa',
        ]);
    }

    public function dosen()
    {
        helper('url');

        return view('siakad/dosen/index', [
            'title'  => 'Dosen',
            'active' => 'dosen',
        ]);
    }

    public function matakuliah()
    {
        helper('url');

        return view('siakad/matakuliah/index', [
            'title'  => 'Mata Kuliah',
            'active' => 'matakuliah',
        ]);
    }

    public function tentang()
    {
        helper('url');

        return view('siakad/tentang', [
            'title'  => 'Tentang',
            'active' => 'tentang',
        ]);
    }
}
