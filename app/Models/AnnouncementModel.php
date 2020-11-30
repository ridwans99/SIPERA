<?php
namespace App\Models;

use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table = 'announcements';
    protected $primaryKey = 'announcement_id';
    protected $useTimestamps = true;

    public function getAnnouncement($id = false){
        if ($id){
            return $this->where(['announcement_id' => $id]) -> first();
        } else {
            return $this->findAll();
        }
    }

    public function insertAnnouncement($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateAnnouncement($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('announcement_id' => $id));
        return $query;
    }

    public function deleteAnnouncement($id)
    {
        $query = $this->db->table($this->table)->delete(array('announcement_id' => $id));
        return $query;
    } 
}