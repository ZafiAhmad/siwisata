<<<<<<< HEAD
<?php
namespace App\Models;

use CodeIgniter\Model;

class TransportasiModel extends Model
{
    protected $table = 'transportasi';
    protected $primaryKey = 'id_transportasi';
    protected $allowedFields = ['nama_bis', 'price', 'tujuan_awal', 'tujuan_akhir', 'gambar', 'fasilitas', 'created_at', 'updated_at'];
    protected $useTimestamps = true; // Enable timestamps
    public function getAllTransportasi()
    {
        return $this->findAll();
    }

    public function deleteTransports($id)
    {
        // Perform the deletion based on the given ID
        $this->where('id_transportasi', $id)->delete();
    }
=======
<?php
namespace App\Models;

use CodeIgniter\Model;

class TransportasiModel extends Model
{
    protected $table = 'transportasi';
    protected $primaryKey = 'id_transportasi';
    protected $allowedFields = ['nama_bis', 'price', 'tujuan_awal', 'tujuan_akhir', 'gambar', 'fasilitas', 'created_at', 'updated_at'];
    protected $useTimestamps = true; // Enable timestamps
    public function getAllTransportasi()
    {
        return $this->findAll();
    }

    public function deleteTransports($id)
    {
        // Perform the deletion based on the given ID
        $this->where('id_transportasi', $id)->delete();
    }
>>>>>>> 59b13ae2290c5f2f0f8d60c4f2e43f8e10c3dec5
}