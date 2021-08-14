<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GajiModel;

class Gaji extends Controller
{

    public function __construct()
    {
        $this->gaji = new GajiModel();
    }

    public function index()
    {
        $data = [
            'gaji' => $this->gaji->getGaji(),
            'title' => 'Gaji | EmployeeHelper'
        ];
        echo view('gaji/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Gaji | EmployeeHelper',
        ];
        return view('gaji/create', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $nip = $request->getVar('nip');
        $tanggal = $request->getVar('tanggal');
        $keterangan = $request->getVar('keterangan');
        $jumlah_gaji = $request->getVar('jumlah_gaji');
        $bonus = $request->getVar('bonus');
        $potongan = $request->getVar('potongan');
        $total_gaji = $request->getVar('total_gaji');
        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'jumlah_gaji' => $jumlah_gaji,
            'bonus' => $bonus,
            'potongan' => $potongan,
            'total_gaji' => $total_gaji
        ];
        $simpan = $this->gaji->insert_gaji($data);

        // Jika simpan berhasil
        if ($simpan) {
            session()->setFlashdata('success', 'Created data successfully');
            return redirect()->to(base_url('gaji'));
        }
    }
    public function edit($id)
    {
        $data = [
            'gaji' => $this->gaji->getGaji($id),
            'title' => 'Gaji | EmployeeHelper',
        ];
        return view('gaji/edit', $data);
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $id = $request->getVar('id');
        $nip = $request->getVar('nip');
        $tanggal = $request->getVar('tanggal');
        $keterangan = $request->getVar('keterangan');
        $jumlah_gaji = $request->getVar('jumlah_gaji');
        $bonus = $request->getVar('bonus');
        $potongan = $request->getVar('potongan');
        $total_gaji = $request->getVar('total_gaji');
        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'jumlah_gaji' => $jumlah_gaji,
            'bonus' => $bonus,
            'potongan' => $potongan,
            'total_gaji' => $total_gaji
        ];

        $ubah = $this->gaji->update_gaji($data, $id);

        // Jika berhasil ubah
        if ($ubah) {
            session()->setFlashdata('info', 'Updated data successfully');
            return redirect()->to(base_url('gaji'));
        }
    }

    public function delete($id)
    {
        $hapus = $this->gaji->delete_gaji($id);

        // Jika berhasil  hapus
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted data successfully');
            return redirect()->to(base_url('gaji'));
        }
    }
}
