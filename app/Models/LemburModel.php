<?php

namespace App\Models;

use CodeIgniter\Model;

class LemburModel extends Model
{
    protected $table = "data_lembur";

    public function getLembur($id = false)
    {
        if ($id === false) {
            return $this->table('data_lembur')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('data_lembur')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_lembur($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_lembur($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_lembur($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
