<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PegawaiModel;

class Pegawai extends Controller
{

    public function __construct()
    {
        $this->pegawai = new PegawaiModel();
    }

    public function index()
    {
        $data = [
            'pegawai' => $this->pegawai->getPegawai(),
            'title' => 'Pegawai | EmployeeHelper'
        ];
        echo view('pegawai/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pegawai | EmployeeHelper',
        ];
        return view('pegawai/create', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        $nip = $request->getVar('nip');
        $nama = $request->getVar('nama');
        $jeniskel = $request->getVar('jeniskel');
        $Tempatlahir = $request->getVar('Tempatlahir');
        $Tanggallahir = $request->getVar('Tanggallahir');
        $agama = $request->getVar('agama');
        $statusnikah = $request->getVar('statusnikah');
        $alamat = $request->getVar('alamat');
        $kodejabatan = $request->getVar('kodejabatan');
        $kodegolongan = $request->getVar('kodegolongan');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'nama' => $nama,
            'jeniskel' => $jeniskel,
            'Tempatlahir' => $Tempatlahir,
            'Tanggallahir' => $Tanggallahir,
            'agama' => $agama,
            'statusnikah' => $statusnikah,
            'alamat' => $alamat,
            'kodejabatan' => $kodejabatan,
            'kodegolongan' => $kodegolongan
        ];
        $simpan = $this->pegawai->insert_pegawai($data);

        // Jika simpan berhasil
        if ($simpan) {
            session()->setFlashdata('success', 'Created data successfully');
            return redirect()->to(base_url('pegawai'));
        }
    }
    public function edit($id)
    {
        $data = [
            'pegawai' => $this->pegawai->getPegawai($id),
            'title' => 'Pegawai | EmployeeHelper',
        ];
        return view('pegawai/edit', $data);
    }

    public function update($id)
    {
        $request = \Config\Services::request();
        $nip = $request->getVar('nip');
        $nama = $request->getVar('nama');
        $jeniskel = $request->getVar('jeniskel');
        $Tempatlahir = $request->getVar('Tempatlahir');
        $Tanggallahir = $request->getVar('Tanggallahir');
        $agama = $request->getVar('agama');
        $statusnikah = $request->getVar('statusnikah');
        $alamat = $request->getVar('alamat');
        $kodejabatan = $request->getVar('kodejabatan');
        $kodegolongan = $request->getVar('kodegolongan');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nip' => $nip,
            'nama' => $nama,
            'jeniskel' => $jeniskel,
            'Tempatlahir' => $Tempatlahir,
            'Tanggallahir' => $Tanggallahir,
            'agama' => $agama,
            'statusnikah' => $statusnikah,
            'alamat' => $alamat,
            'kodejabatan' => $kodejabatan,
            'kodegolongan' => $kodegolongan
        ];
        $ubah = $this->pegawai->update_pegawai($data, $id);
        // Jika berhasil ubah
        if ($ubah) {
            session()->setFlashdata('info', 'Updated data successfully');
            return redirect()->to(base_url('pegawai'));
        }
    }
    public function delete($id)
    {
        $hapus = $this->pegawai->delete_pegawai($id);

        // Jika berhasil  hapus
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted data successfully');
            return redirect()->to(base_url('pegawai'));
        }
    }
}
