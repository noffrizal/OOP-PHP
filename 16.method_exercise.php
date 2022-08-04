<?php
class Produk
{
    public $jenis;
    public $merek;
    public $stok;

    public function tambahStok($jumlah = 12)
    {
        $totalStok = $this->stok + $jumlah;

        if ($totalStok <= 100) 
        {
            $this->stok = $totalStok;
            $pesan = "Stok berhasil ditambah <br>";
            $pesan .= "Jumlah Stok saat ini : ".$this->stok."<br>";
        }
        else
        {
            $pesan = "Maaf, Stok sudah penuh. Penambahan Stok dibatalkan <br>";
            $pesan .= "Jumlah stok saat ini: ".$this->stok."<br>";
        }

        return $pesan;
    }
}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Televisi";
$produk01->stok = 54;

echo $produk01->tambahStok();
echo "<br>";

echo $produk01->tambahStok(20);
echo "<br>";

echo $produk01->tambahStok(15);
echo "<br>";