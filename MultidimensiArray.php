<?php
// membuat Multidimensi Array
$kendaraan = [
    "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
    "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
    "Motor" => ["Honda", "Yamaha", "Suzuki"]
];

// menampilkan Output
echo "Ini Array kendaraan <br>";

echo "<br>" . implode(", ", $kendaraan["transportasi"]) . "<br>";
echo "===========================<br>";

echo "Ini Array Mobil <br>";
echo "<br>" . implode(", ", $kendaraan["mobil"]) . "<br>";
echo "===========================<br>";

echo "Ini Array Motor <br>";
echo "<br>" . implode(", ", $kendaraan["Motor"]) . "<br>";
?>
