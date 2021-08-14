<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    protected $table = "data_absen";

    public function getAbsen($id = false)
    {
        if ($id === false) {
            return $this->table('data_absen')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('data_absen')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_absen($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_absen($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_absen($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
