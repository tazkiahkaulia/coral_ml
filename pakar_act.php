<?php

$params = $_POST;

$sehat = 0;
$tidak_sehat = 0;
// $keterangan = [];

if ($params['nomor_1'] == 'ya') {
    $sehat++;
} else {
    $tidak_sehat++;
}

if ($params['nomor_2'] == 'tidak') {
    $sehat++;
} else {
    $tidak_sehat++;
}

if ($params['nomor_3'] == 'ya') {
    $sehat++;
} else {
    $tidak_sehat++;
}

if ($params['nomor_4'] == 'ya') {
    $sehat++;
} else {
    $tidak_sehat++;
}

if ($params['nomor_5'] == 'ya') {
    $sehat++;
} else {
    $tidak_sehat++;
}

if ($params['nomor_6'] == 'tidak') {
    $sehat++;
} else {
    $tidak_sehat++;
}

if ($sehat > $tidak_sehat) {
    header("Location: pakar_hasil.php?params=sehat");
} else {
    header("Location: pakar_hasil.php?params=tidak_sehat");
}
