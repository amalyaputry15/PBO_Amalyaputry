<?php
class kendaraan
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga;
    var $merek;
    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal'; 
        else $status = 'Murah';
        return $status;
    }
}
$objekKendaraan1 = new kendaraan();
$objekKendaraan1-> $merek="Yamaha MIO" (); //set properti
$objekKendaraan1-> $harga="10000000"; //set properti

$objekKendaraan2 = new kendaraan();
$objekKendaraan2-> $merek="Toyota Avanza" (); //set properti
$objekKendaraan2-> $harga="100000000"; //set properti

$objekKendaraan3 = new kendaraan();
$objekKendaraan3 -> $merek="Honda Jazz" (); //set properti
$objekKendaraan3 -> $harga="100000000"; //set properti

echo "Merek: ".$objekKendaraan1 -> $merek (); //Merek:Toyota Avanza
echo "Merek: ".$objekKendaraan2 -> $merek (); //Merek:Toyota Avanza
echo "Merek: ".$objekKendaraan3 -> $merek (); //Merek:Toyota Avanza
echo "<br>";
echo "Nominal Harga: ".$objekKendaraan1 -> $harga (); // Nominal Harga : 100000000
echo "Nominal Harga: ".$objekKendaraan2 -> $harga (); // Nominal Harga : 100000000
echo "Nominal Harga: ".$objekKendaraan3 -> $harga (); // Nominal Harga : 100000000
echo "<br>";
echo "Status Harga Kendaraan: ".$objekKendaraan1 -> $statusHarga(); //Status Harga Kendaraan : Mahal
echo "Status Harga Kendaraan: ".$objekKendaraan2 -> $statusHarga(); //Status Harga Kendaraan : Mahal
echo "Status Harga Kendaraan: ".$objekKendaraan3 -> $statusHarga(); //Status Harga Kendaraan : Mahal
?>