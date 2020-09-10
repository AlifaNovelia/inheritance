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
   }
}