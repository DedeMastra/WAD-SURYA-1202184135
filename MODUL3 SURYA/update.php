<?php
    include('config.php');
    
    if (isset($_POST['submit'])) {
        $id = $_POST['inputNama'];
        $name = $_POST['inputNama'];
        $gambar = $_FILES['inputGambar']['inputNama'];
        $deskripsi = $_POST['inputDeskripi'];
        $kategori = $_POST['inputKategori'];
        $tanggal = $_POST['inputTanggal'];
        $mulai = $_POST['inputMulai'];
        $berakhir = $_POST['inputBerakhir'];
        $tempat = $_POST['inputTempat'];
        $harga = $_POST['inputHarga'];
        $benefit =  implode(' , ', $_POST['inputBenefit']
    );

    $query = "UPDATE latihan_events SET
            name = '$makanan',
            gambar = '$gambar',
            deskripsi = '$deskripsi',
            kategori = '$kategori',
            tanggal = '$tanggal',
            mulai = '$mulai',
            berakhir = '$berakhir',
            tempat = '$tempat',
            harga = '$harga',
            benefit = '$benefit'
            WHERE
            id = '$id'";             
    $update = mysqli_query($conn, $query);
?>
