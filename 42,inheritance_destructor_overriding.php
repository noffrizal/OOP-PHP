<?php

use Produk as GlobalProduk;

class Produk
{
    public $jenis, $merek, $stok;

    public function __construct($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }

    public function __destruct()
    {
        unset($this->jenis, $this->merek, $this->stok);
        echo "Property Class milik Produk sudah dihapus..";
    }
}

class Televisi extends Produk
{
    public $ukuranLayar;

    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        parent::__construct($jenis, $merek, $stok);
        $this->ukuranLayar = $ukuranLayar;
    }

    public function __destruct()
    {
        unset($this->ukuranLayar);
        echo "Property class Televisi sudah dihapus... <br>";
        parent::__destruct();
    }
}

$produk01 = new Televisi("Televisi", "Samsung", 20,32);

echo "<pre>";
print_r($produk01);
echo "</pre>";

echo "<hr>";
echo "<pre>";
echo $produk01->jenis;
echo "</pre>";