<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $angka1 = $_POST["angka1"];
    $operator = $_POST["operator"];
    $angka2 = $_POST["angka2"];

    $hasil = calculateResult($angka1, $operator, $angka2);

    echo $hasil;
}

function calculateResult($angka1, $operator, $angka2)
{
    switch ($operator) {
        case "+":
            return $angka1 + $angka2;
        case "-":
            return $angka1 - $angka2;
        case "*":
            return $angka1 * $angka2;
        case "/":
            return $angka1 / $angka2;
        default:
            return "Operator tidak valid";
    }
}
