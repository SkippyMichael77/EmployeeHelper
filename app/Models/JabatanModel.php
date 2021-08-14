<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = "data_jabatan";

    public function getJabatan($id = false)
    {
        if ($id === false) {
            return $this->table('data_jabatan')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('data_jabatan')
                ->where('kodejabatan', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_jabatan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_jabatan($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['kodejabatan' => $id]);
    }

    public function delete_jabatan($id)
    {
        return $this->db->table($this->table)->delete(['kodejabatan' => $id]);
    }
}
