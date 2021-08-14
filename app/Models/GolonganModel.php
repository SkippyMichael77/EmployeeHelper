<?php

namespace App\Models;

use CodeIgniter\Model;

class GolonganModel extends Model
{
    protected $table = "data_golongan";

    public function getGolongan($id = false)
    {
        if ($id === false) {
            return $this->table('data_golongan')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('data_golongan')
                ->where('kodegolongan', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_golongan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_golongan($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['kodegolongan' => $id]);
    }

    public function delete_golongan($id)
    {
        return $this->db->table($this->table)->delete(['kodegolongan' => $id]);
    }
}
