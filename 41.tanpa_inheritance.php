<?php
class Televisi
{
    public $jenis, $merek, $stok, $ukuranLayar;

    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
        $this->ukuranLayar = $ukuranLayar;
    }
}

$produk01 = new Televisi("Televisi", "Samsung",20,32);

echo "<pre>";
print_r($produk01);
echo "</pre>";
