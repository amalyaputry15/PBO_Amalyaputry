<?php
// Parent class Employee
class Employee {
    var $name;
    var $gajiPokok;
    var $tahunBekerja;

    public function __construct($name, $gajiPokok, $tahunBekerja) {
        $this->name = $name;
        $this->gajiPokok = $gajiPokok;
        $this->tahunBekerja = $tahunBekerja;
    }

    // Method untuk menghitung gaji tanpa bonus
    public function calculateSalary(): mixed {
        return $this->gajiPokok;
    }

    public function getEmployeeDetails(): string {
        return "Name: " . $this->name . ", gaji pokok: " . $this->gajiPokok . ", tahun kerja: " . $this->tahunBekerja;
    }
}

// Child class yang mewarisi class Employee
class SalaryAdjustment extends Employee {

    // Override method calculateSalary untuk menyesuaikan kenaikan gaji
    public function calculateSalary(): mixed {
        $gaji = $this->gajiPokok;

        if ($this->tahunBekerja >= 1 && $this->tahunBekerja <= 10) {
            // Bonus sebesar 0.01 kali lama kerja
            $bonus = 0.01 * $this->tahunBekerja * $this->gajiPokok;
            $gaji += $bonus;
        } elseif ($this->tahunBekerja > 10) {
            // Bonus sebesar 0.02 kali lama kerja
            $bonus = 0.02 * $this->tahunBekerja * $this->gajiPokok;
            $gaji += $bonus;
        }

        return $gaji;
    }
}

// Contoh penggunaan
$karyawan1 = new SalaryAdjustment("John Doe", 5000000, 0);  // Masa kerja 0 tahun
$karyawan2 = new SalaryAdjustment("Jane Smith", 5000000, 5); // Masa kerja 5 tahun
$karyawan3 = new SalaryAdjustment("Alice Brown", 5000000, 12); // Masa kerja 12 tahun

echo $karyawan1->getEmployeeDetails() . ", Gaji: " . $karyawan1->calculateSalary() . "<br/>";
echo $karyawan2->getEmployeeDetails() . ", Gaji: " . $karyawan2->calculateSalary() . "<br/>";
echo $karyawan3->getEmployeeDetails() . ", Gaji: " . $karyawan3->calculateSalary() . "<br/>";
?>
