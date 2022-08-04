<?php
class Produk
{
    // ini Property
    public $sku = "001";
    public $merek = "Samsung";
    public $harga = 4000000;

    // ini method
    public function pesanProduk()
    {
        return "Produk dipesan..";
    }
}

// object dari class Produk
$televisi = new Produk();