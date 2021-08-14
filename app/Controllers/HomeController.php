<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\JabatanModel;
use App\Models\GolonganModel;

class HomeController extends BaseController
{
    protected $PegawaiModel;
    protected $JabatanModel;
    protected $GolonganModel;

    public function __construct()
    {
        $this->PegawaiModel = new PegawaiModel();
        $this->JabatanModel = new JabatanModel();
        $this->GolonganModel = new GolonganModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | EmployeeHelper',
            'pegawai' => $this->PegawaiModel->getPegawai(),
            'jabatan' => $this->JabatanModel->getJabatan(),
            'golongan' => $this->GolonganModel->getGolongan()
        ];

        return view('index', $data);
    }
}
