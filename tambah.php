<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $id_prov = $_POST['id_prov'];
    $id_paqYrec = $_POST['id_paqYrec'];
    $id_chip = $_POST['id_chip'];
    $id_tel = $_POST['id_tel'];
    $id_accesorios = $_POST['id_accesorios'];
    $nombre_prov = $_POST['nombre_prov'];
    $inversion_prov = $_POST['inversion_prov'];
    $fecha = $_POST['fecha'];

    // query
    $sql = "INSERT INTO provedores(id_prov, id_paqYrec, id_chip, id_tel, id_accesorios, nombre_prov, inversion_prov, fecha)
    VALUES('$id_prov', '$id_paqYrec', '$id_chip', '$id_tel', '$id_accesorios', '$nombre_prov', '$inversion_prov', '$fecha')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
