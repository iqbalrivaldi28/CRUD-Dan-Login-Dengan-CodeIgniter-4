<?php

namespace App\Models;

use CodeIgniter\Model;

class Biodata_model extends Model
{
    protected $table = 'datadiri';
     
    public function getBiodata($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function saveBiodata($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }


    public function updateBiodata($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteBiodata($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}