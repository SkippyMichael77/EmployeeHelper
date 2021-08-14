<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LemburModel;

class Lembur extends Controller
{

    public function __construct()
    {
        $this->lembur = new LemburModel();
    }

    public function index()
    {
        $data = [
            'lembur' => $this->lembur->getLembur(),
            'title' => 'Lembur | EmployeeHelper'
        ];
        echo view('lembur/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Lembur | EmployeeHelper',
        ];
        return view('lembur/create', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $nip = $request->getVar('nip');
        $tgl_lembur = $request->getVar('tgl_lembur');
        $lembur = $request->getVar('lembur');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'tgl_lembur' => $tgl_lembur,
            'lembur' => $lembur,
        ];
        $simpan = $this->lembur->insert_lembur($data);

        // Jika simpan berhasil
        if ($simpan) {
            session()->setFlashdata('success', 'Created data successfully');
            return redirect()->to(base_url('lembur'));
        }
    }
    public function edit($id)
    {
        $data = [
            'lembur' => $this->lembur->getLembur($id),
            'title' => 'Lembur | EmployeeHelper',
        ];
        return view('lembur/edit', $data);
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $nip = $request->getVar('nip');
        $tgl_lembur = $request->getVar('tgl_lembur');
        $lembur = $request->getVar('lembur');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'tgl_lembur' => $tgl_lembur,
            'lembur' => $lembur,
        ];

        $ubah = $this->lembur->update_lembur($data, $id);

        // Jika berhasil ubah
        if ($ubah) {
            session()->setFlashdata('info', 'Updated data successfully');
            return redirect()->to(base_url('lembur'));
        }
    }

    public function delete($id)
    {
        $hapus = $this->lembur->delete_lembur($id);

        // Jika berhasil  hapus
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted data successfully');
            return redirect()->to(base_url('lembur'));
        }
    }
}
