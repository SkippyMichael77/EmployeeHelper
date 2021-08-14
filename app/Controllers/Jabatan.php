<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\JabatanModel;

class Jabatan extends Controller
{

    public function __construct()
    {
        $this->jabatan = new JabatanModel();
    }

    public function index()
    {
        $data = [
            'jabatan' => $this->jabatan->getJabatan(),
            'title' => 'Jabatan | EmployeeHelper',
        ];
        echo view('jabatan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Jabatan | EmployeeHelper',
        ];
        return view('jabatan/create', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        $kodejabatan = $request->getVar('kodejabatan');
        $nama_jabatan = $request->getVar('nama_jabatan');
        $gaji_pokok = $request->getVar('gaji_pokok');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'kodejabatan' => $kodejabatan,
            'nama_jabatan' => $nama_jabatan,
            'gaji_pokok' => $gaji_pokok
        ];
        $simpan = $this->jabatan->insert_jabatan($data);

        // Jika simpan berhasil
        if ($simpan) {
            session()->setFlashdata('success', 'Created data successfully');
            return redirect()->to(base_url('jabatan'));
        }
    }
    public function edit($id)
    {
        $data = [
            'jabatan' => $this->jabatan->getJabatan($id),
            'title' => 'Jabatan | EmployeeHelper',
        ];
        return view('jabatan/edit', $data);
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $kodejabatan = $request->getVar('kodejabatan');
        $nama_jabatan = $request->getVar('nama_jabatan');
        $gaji_pokok = $request->getVar('gaji_pokok');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'kodejabatan' => $kodejabatan,
            'nama_jabatan' => $nama_jabatan,
            'gaji_pokok' => $gaji_pokok
        ];

        $ubah = $this->jabatan->update_jabatan($data, $id);

        // Jika berhasil ubah
        if ($ubah) {
            session()->setFlashdata('info', 'Updated data successfully');
            return redirect()->to(base_url('jabatan'));
        }
    }

    public function delete($id)
    {
        $hapus = $this->jabatan->delete_jabatan($id);

        // Jika berhasil  hapus
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted data successfully');
            return redirect()->to(base_url('jabatan'));
        }
    }
}
