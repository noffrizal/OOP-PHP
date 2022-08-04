<?php
class Produk
{
    private $merek;

    private function hello()
    {
        return " ini adalah Produk";
    }
}

$produk01 = new Produk();

$produk01->merek = "Asus";
echo $produk01->merek;
echo $produksi->hello();