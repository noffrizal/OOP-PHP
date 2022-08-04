<?php
class Produk
{
    public $jenis,
           $merek,
           $stok;

    public function __construct($jenis, $merek, $stok = 10)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

$produk01 = new Produk("Televisi", "Samsung", 20);
$produk02 = new Produk("Mesin Cuci", "LG");

print_r($produk01);
echo "<br>";
print_r($produk02);