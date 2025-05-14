<?php 
namespace App\Models;

class profilModel {
    protected $data = ['nama' => 'Randy Febrian', 
                       'nim' => '2310817110013', 
                       'prodi' => 'Teknologi Informasi',
                       'hobi' => 'tidur', 
                       'skill' => 'tidur 8 jam', 
                       'info' => 'Aku ingin mobile saja'];

    public function getProfil() {return $this -> data;}
}
?>