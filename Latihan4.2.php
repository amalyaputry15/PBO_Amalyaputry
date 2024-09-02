<?php 
class kendaraan {
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    function setMerek($x) 
    {
        $this->merek = $x;
    }
    function setHarga($x) 
    {
        $this->harga = $x;
    }
    function setjmlroda($x) 
    {
        $this->jmlroda = $x;
    }
    function setwarna($x) 
    {
        $this->warna = $x;
    }
    function setbhnbakar($x) 
    {
        $this->bhnbakar = $x;
    }
    function settahun($x) 
    {
        $this->tahun = $x;
    }
}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Toyota Yaris');
$kendaraan1->setjmlroda(4);
$kendaraan1->setharga(160000000);
$kendaraan1->setwarna("Merah");
$kendaraan1->setbhnbakar("Premium");
$kendaraan1->settahun(2005);

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Honda Scoopy');
$kendaraan1->setjmlroda(2);
$kendaraan1->setharga(13000000);
$kendaraan1->setwarna("Putih");
$kendaraan1->setbhnbakar("Premium");
$kendaraan1->settahun(2004);

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Isuzu Panther');
$kendaraan1->setjmlroda(4);
$kendaraan1->setharga(170000000);
$kendaraan1->setwarna("Hitam");
$kendaraan1->setbhnbakar("Solar");
$kendaraan1->settahun(2003);

echo $kendaraan1->merek;
echo "<br>";
echo $kendaraan1->jmlroda;
echo "<br>";
echo $kendaraan1->harga;
echo "<br>";
echo $kendaraan1->warna;
echo "<br>";
echo $kendaraan1->bhnbakar;
echo "<br>";
echo $kendaraan1->tahun;
echo "<br>";
echo "<br>";

echo $kendaraan1->merek;
echo "<br>";
echo $kendaraan1->jmlroda;
echo "<br>";
echo $kendaraan1->harga;
echo "<br>";
echo $kendaraan1->warna;
echo "<br>";
echo $kendaraan1->bhnbakar;
echo "<br>";
echo $kendaraan1->tahun;
echo "<br>";
echo "<br>";

echo $kendaraan1->merek;
echo "<br>";
echo $kendaraan1->jmlroda;
echo "<br>";
echo $kendaraan1->harga;
echo "<br>";
echo $kendaraan1->warna;
echo "<br>";
echo $kendaraan1->bhnbakar;
echo "<br>";
echo $kendaraan1->tahun;
echo "<br>";
echo "<br>";