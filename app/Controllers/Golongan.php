<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GolonganModel;

class Golongan extends Controller
{

    public function __construct()
    {
        $this->golongan = new GolonganModel();
    }

    public function index()
    {
        $data = [
            'golongan' => $this->golongan->getGolongan(),
            'title' => 'Golongan | EmployeeHelper'
        ];
        echo view('golongan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Golongan | EmployeeHelper',
        ];
        return view('golongan/create', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        $kodegolongan = $request->getVar('kodegolongan');
        $nama_golongan = $request->getVar('nama_golongan');
        $tunjangan_anak = $request->getVar('tunjangan_anak');
        $tunjangan_makan = $request->getVar('tunjangan_makan');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'kodegolongan' => $kodegolongan,
            'nama_golongan' => $nama_golongan,
            'tunjangan_anak' => $tunjangan_anak,
            'tunjangan_makan' => $tunjangan_makan
        ];
        $simpan = $this->golongan->insert_golongan($data);

        // Jika simpan berhasil
        if ($simpan) {
            session()->setFlashdata('success', 'Created data successfully');
            return redirect()->to(base_url('golongan'));
        }
    }
    public function edit($id)
    {
        $data = [
            'golongan' => $this->golongan->getGolongan($id),
            'title' => 'Golongan | EmployeeHelper',
        ];
        return view('golongan/edit', $data);
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $kodegolongan = $request->getVar('kodegolongan');
        $nama_golongan = $request->getVar('nama_golongan');
        $tunjangan_anak = $request->getVar('tunjangan_anak');
        $tunjangan_makan = $request->getVar('tunjangan_makan');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'kodegolongan' => $kodegolongan,
            'nama_golongan' => $nama_golongan,
            'tunjangan_anak' => $tunjangan_anak,
            'tunjangan_makan' => $tunjangan_makan
        ];

        $ubah = $this->golongan->update_golongan($data, $id);

        // Jika berhasil ubah
        if ($ubah) {
            session()->setFlashdata('info', 'Updated data successfully');
            return redirect()->to(base_url('golongan'));
        }
    }

    public function delete($id)
    {
        $hapus = $this->golongan->delete_golongan($id);

        // Jika berhasil  hapus
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted data successfully');
            return redirect()->to(base_url('golongan'));
        }
    }
}
