<?php
// array
$data = array(
    "nama" => "Arieq",
    "nim" => "G.231.23.0064",
    "jurusan" => "Teknik Informatika"
);

// Encode array ke JSON
$json_data = json_encode($data);

// Tampilkan hasil encode
echo "Hasil JSON Encode: <br>";
echo $json_data;

// Simpan ke file JSON (opsional)
file_put_contents("data.json", $json_data);
?>
