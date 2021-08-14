<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = "data_pegawai";

    public function getPegawai($id = false)
    {
        if ($id === false) {
            return $this->table('data_pegawai')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('data_pegawai')
                ->where('nip', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_pegawai($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_pegawai($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['nip' => $id]);
    }

    public function delete_pegawai($id)
    {
        return $this->db->table($this->table)->delete(['nip' => $id]);
    }
}
