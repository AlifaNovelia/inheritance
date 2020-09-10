<?php
class produk{
    public $namabarang,
           $merk,
           $harga,
           $ukuranlayar,
           $kapasitas;
    
    public function getcetak(){
        return "$this->merk, (RP $this->harga)";
   }
   public function __construct ($namaBarang = "nama barang", $merk ="merk", $harga =0,$ukuranlayar="ukuran layar", $kapasitas="kapasitas"){
       $this->namabarang=$namabarang;
       $this->merk=$merk;
       $this->harga=$harga;
       $this->ukuranlayar=$ukuranlayar;
       $this->kapasitas=$kapasitas;
   }
   
   public function cetakinfo(){
       $str="{$this->namabarang},{$this->getcetak()}";
       return $str;
   }
}
 class laptop extends produk{
     public function cetakinfo(){
         $str="laptop : {$this->namabarang}, {$this->getcetak()} | ukuran layar: {$this->ukuranlayar}";
         return $str;
     }
 }

 class flashdisk extends produk{
     public function cetakinfo(){
         $str="Aksesoris: {$this->namabarang}, {$this->getcetak()}|kapasitas: {$this->kapasitas}";
     }
 }
 $produk1 =new laptop("idepad 310", "lenovo", 7000000,"14 inci","-");
 $produk2 = new flashdisk("Flashdisk", "Sandisk", 100000,"-","8 GB");

 echo $produk1->cetakinfo();
 echo "<br>";
 echo $produk2->cetakinfo();
 echo "<br>";