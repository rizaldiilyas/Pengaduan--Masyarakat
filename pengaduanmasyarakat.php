<?php
$conn = mysqli_connect('localhost','root','','pengaduan_masyarakat');
if(!$conn){
    echo "KONEKSI GAGAL!";
}
    class masyarakat{
        public $Nik;
        public $Nama;
        public $Username;
        public $Password;
        public $Telp;
    
    function __construct($Nik,$Nama,$Username,$Password,$Telp){
        $this->Nik = $Nik;
        $this->Nama = $Nama;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Telp = $Telp;
    }

    function tambah($Nik, $Nama, $Username, $Password, $Telp){
        $query = "INSERT INTO `masyarakat` (`Nik`, `Nama`, `Username`, `Password`, `Telp`) VALUES ($nik,$nama,)";
    }


    function hapus($Nik, $Nama, $Username, $Password, $Telp){
        $query = "DELETE FROM `masyarakat` WHERE 0";
    }

    function update($Nik, $Nama, $Username, $Password, $Telp){
        $query = "UPDATE `masyarakat` SET `Nik`='',`Nama`='',`Username`='',`Password`='',`Telp`='' WHERE 1";
    }
    }
   $masyarakat = new masyarakat(''.'','','','');
   $masyarakat1->update_masyarakat('','','','');
   $masyarakat1->hapus_masyarakat('','','','');

    