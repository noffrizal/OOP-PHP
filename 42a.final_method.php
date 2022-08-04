<?php
class Produk
{
    final public function hello()
    {
        return "Ini dia Produk";
    }
}

class Televisi extends Produk 
{
    public function hello()
    {
        return "Ini dari Televisi";
    }
}