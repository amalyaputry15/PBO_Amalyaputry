<?php
class Employee {
    var $name;
    var $gaji;
    var $tahunKerja;

    public function __construct($name, $salary, $tahunKerja) {
        $this->name = $name;
        $this->gaji = $salary;
        $this->tahunKerja = $tahunKerja;
    }

    public function getSalary() {
        return $this->gaji;
    }

    public function getYearsWorked() {
        return $this->tahunKerja;
    }
}

class Director extends Employee {
    public function calculateRaise() {
        $bonus = 0.5 * $this->tahunKerja;
        $tunjangan = 0.1 * $this->tahunKerja;
        return $this->gaji + $bonus + $tunjangan;
    }
}

// Contoh penggunaan
$director = new Director("John Doe", 2500000, 5);
echo "Gaji setelah kenaikan: " . $director->calculateRaise();
?>
