<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AbsenModel;

class Absen extends Controller
{

    public function __construct()
    {
        $this->absen = new AbsenModel();
    }

    public function index()
    {
        $data = [
            'absen' => $this->absen->getAbsen(),
            'title' => 'Absen | EmployeeHelper'
        ];
        echo view('absen/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Absen | EmployeeHelper',
        ];
        return view('absen/create', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $nip = $request->getVar('nip');
        $masuk = $request->getVar('masuk');
        $izin = $request->getVar('izin');
        $alpha = $request->getVar('alpha');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'masuk' => $masuk,
            'izin' => $izin,
            'alpha' => $alpha
        ];
        $simpan = $this->absen->insert_absen($data);

        // Jika simpan berhasil
        if ($simpan) {
            session()->setFlashdata('success', 'Created data successfully');
            return redirect()->to(base_url('absen'));
        }
    }
    public function edit($id)
    {
        $data = [
            'absen' => $this->absen->getAbsen($id),
            'title' => 'Absen | EmployeeHelper',
        ];
        return view('absen/edit', $data);
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $nip = $request->getVar('nip');
        $masuk = $request->getVar('masuk');
        $izin = $request->getVar('izin');
        $alpha = $request->getVar('alpha');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'masuk' => $masuk,
            'izin' => $izin,
            'alpha' => $alpha
        ];

        $ubah = $this->absen->update_absen($data, $id);

        // Jika berhasil ubah
        if ($ubah) {
            session()->setFlashdata('info', 'Updated data successfully');
            return redirect()->to(base_url('absen'));
        }
    }

    public function delete($id)
    {
        $hapus = $this->absen->delete_absen($id);

        // Jika berhasil  hapus
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted data successfully');
            return redirect()->to(base_url('absen'));
        }
    }
}
