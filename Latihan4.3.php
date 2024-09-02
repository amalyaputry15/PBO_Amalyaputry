<?php
class kendaraan {
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;
    var $statusHarga;

    function setMerek($x) {
        $this->merek = $x;
    }

    function getMerek() {
        return $this->merek;
    }

    function setHarga($x) {
        $this->harga = $x;
    }

    function getHarga() {
        return $this->harga;
    }

    function setJmlroda($x) {
        $this->jmlroda = $x;
    }
    function getJmlroda() {
        return $this->jmlroda;
    }

    function setWarna($x) {
        $this->warna = $x;
    }
    function getWarna() {
        return $this->warna;
    }

    function setStatusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$kendaraan1 = new kendaraan;
$kendaraan1->setMerek('Yamaha Mio');
$kendaraan1->setHarga(10000000);
$kendaraan1->setJmlroda(2);
$kendaraan1->setWarna("Biru");
$kendaraan1->setStatusHarga();

$kendaraan2 = new kendaraan;
$kendaraan2->setMerek('Alphard');
$kendaraan2->setHarga(200000000);
$kendaraan2->setJmlroda(4);
$kendaraan2->setWarna("Hitam");
$kendaraan2->setStatusHarga();

echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
echo "<br>";
echo $kendaraan1->getJmlroda();
echo "<br>";
echo $kendaraan1->getWarna();
echo "<br>";
echo $kendaraan1->setStatusHarga();
echo "<br>";
echo "<br>";

echo $kendaraan2->getMerek();
echo "<br>";
echo $kendaraan2->getHarga();
echo "<br>";
echo $kendaraan2->getJmlroda();
echo "<br>";
echo $kendaraan2->getWarna();
echo "<br>";
echo $kendaraan2->setStatusHarga();
echo "<br>";
?>