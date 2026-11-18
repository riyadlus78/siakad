<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $dosenModel;

    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Dosen',
            'dosen' => $this->dosenModel->findAll()
        ];

        return view('dosen/index', $data);
    }

    public function create()
    {
        helper('form');

        return view('dosen/create', [
            'title' => 'Tambah Dosen'
        ]);
    }

    public function store()
    {
        $data = [
            'nidn' => trim($this->request->getPost('nidn') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if (
            $data['nidn'] === '' ||
            $data['nama'] === '' ||
            $data['prodi'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->dosenModel->insert($data);

        return redirect()->to(site_url('dosen'))
            ->with('success', 'Data dosen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        helper('form');

        $dosen = $this->dosenModel->find($id);

        if (!$dosen) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data dosen tidak ditemukan.'
            );
        }

        return view('dosen/edit', [
            'title' => 'Edit Dosen',
            'dosen' => $dosen
        ]);
    }

    public function update($id)
    {
        $dosen = $this->dosenModel->find($id);

        if (!$dosen) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data dosen tidak ditemukan.'
            );
        }

        $data = [
            'nidn' => trim($this->request->getPost('nidn') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if (
            $data['nidn'] === '' ||
            $data['nama'] === '' ||
            $data['prodi'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->dosenModel->update($id, $data);

        return redirect()->to(site_url('dosen'))
            ->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function delete($id)
    {
        $dosen = $this->dosenModel->find($id);

        if (!$dosen) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data dosen tidak ditemukan.'
            );
        }

        $this->dosenModel->delete($id);

        return redirect()->to(site_url('dosen'))
            ->with('success', 'Data dosen berhasil dihapus.');
    }
}
