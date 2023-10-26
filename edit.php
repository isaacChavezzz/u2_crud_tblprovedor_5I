<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $id_prov = $_POST['edit_id_prov'];
    $id_paqYrec = $_POST['edit_id_paqYrec'];
    $id_chip = $_POST['edit_id_chip'];
    $id_tel = $_POST['edit_id_tel'];
    $id_accesorios = $_POST['edit_id_accesorios'];
    $nombre_prov = $_POST['edit_nombre_prov'];
    $inversion_prov = $_POST['edit_inversion_prov'];
    $fecha = $_POST['edit_fecha'];

    // query
    $sql = "UPDATE provedores SET id_prov='$id_prov', id_paqYrec='$id_paqYrec', id_chip='$id_chip', id_tel='$id_tel', id_accesorios='$id_accesorios', nombre_prov='$nombre_prov', inversion_prov='$inversion_prov', fecha='$fecha' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
