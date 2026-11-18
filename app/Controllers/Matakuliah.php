<?php

namespace App\Controllers;

use App\Models\MatakuliahModel;

class Matakuliah extends BaseController
{
    protected $matakuliahModel;

    public function __construct()
    {
        $this->matakuliahModel = new MatakuliahModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Mata Kuliah',
            'matakuliah' => $this->matakuliahModel->findAll()
        ];

        return view('matakuliah/index', $data);
    }

    public function create()
    {
        helper('form');

        return view('matakuliah/create', [
            'title' => 'Tambah Mata Kuliah'
        ]);
    }

    public function store()
    {
        $data = [
            'kode' => trim($this->request->getPost('kode') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'sks' => trim($this->request->getPost('sks') ?? '')
        ];

        if (
            $data['kode'] === '' ||
            $data['nama'] === '' ||
            $data['sks'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->matakuliahModel->insert($data);

        return redirect()->to(site_url('mata-kuliah'))
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        helper('form');

        $matakuliah = $this->matakuliahModel->find($id);

        if (!$matakuliah) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }

        return view('matakuliah/edit', [
            'title' => 'Edit Mata Kuliah',
            'matakuliah' => $matakuliah
        ]);
    }

    public function update($id)
    {
        $matakuliah = $this->matakuliahModel->find($id);

        if (!$matakuliah) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }

        $data = [
            'kode' => trim($this->request->getPost('kode') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'sks' => trim($this->request->getPost('sks') ?? '')
        ];

        if (
            $data['kode'] === '' ||
            $data['nama'] === '' ||
            $data['sks'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->matakuliahModel->update($id, $data);

        return redirect()->to(site_url('mata-kuliah'))
            ->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    public function delete($id)
    {
        $matakuliah = $this->matakuliahModel->find($id);

        if (!$matakuliah) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }

        $this->matakuliahModel->delete($id);

        return redirect()->to(site_url('mata-kuliah'))
            ->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}
