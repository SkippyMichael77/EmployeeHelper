<?php

namespace App\Models;

use CodeIgniter\Model;

class GajiModel extends Model
{
    protected $table = "data_gaji";

    public function getGaji($id = false)
    {
        if ($id === false) {
            return $this->table('data_gaji')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('data_gaji')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_gaji($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_gaji($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_gaji($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
