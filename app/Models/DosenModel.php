<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nidn',
        'nama',
        'prodi'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function getDataDosen()
    {
        return $this->db
            ->table('dosen')
            ->get()
            ->getResultArray();
    }

    public function getByProdi($prodi)
    {
        return $this->db
            ->table('dosen')
            ->where('prodi', $prodi)
            ->get()
            ->getResultArray();
    }

    public function getDataUrut()
    {
        return $this->db
            ->table('dosen')
            ->orderBy('nama', 'ASC')
            ->get()
            ->getResultArray();
    }
}
