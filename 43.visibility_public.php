<?php
class Produk
{
    public $merek;
    public function hello()
    {
        return "ini adalah produk";
    }
}

$produk01 = new Produk();
$produk01->merek = "Asus";

echo $produk01->merek;
echo "<hr>";
echo $produk01->hello();