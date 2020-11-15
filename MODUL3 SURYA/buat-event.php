<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <?php
        include('config.php');
        $query = "SELECT * FROM buku";
        $select = mysqli_query($conn, $query);
    ?>

    <title>EAD Events</title>
</head>

<body>

<ul class="nav align-items-top justify-content-center" style="background-color:#343a40;">
    <li class="nav-item ">
        <a class="nav-link"  style="color: white; vertical-align:middle;" 
        href=
        "
        home.php
        "
        >Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" style="color: #B2B2B2; vertical-align:middle;" 
        href=
        "
        buat-event.php
        "
        >Buat Event</a>
    </li>
</ul>

<h2 class="p-5 text-center" style="color: hotpink">WELCOME TO EAD EVENTS</h2>

<div class="row mt-5 align-items-top justify-content-center">
    <div class="col-sm-5">
        <div style="background-color:white;">
            <div class="mt-3 pl-3 pr-3 pb-4" style="color: black;">
            <form action="./insert.php" method="post" enctype="multipart/form-data"> 
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="inputNama" value="" placeholder="Makan Kerupuk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDeskripi" class="col-sm-4 col-form-label">Deskripsi</label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control" name="inputDeskripi" value=""></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputGambar" class="col-sm-4 col-form-label">Upload Gambar</label>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="inputGambar" placeholder="">
                            <label class="custom-file-label" for="inputGambar">Choose File</label>
                        </div>
                    </div>
                </div>
                
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Kategori</legend>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inputKategori" name="kategori1" value="Online">
                                <label class="form-check-label" for="kategori1">Online</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inputKategori" name="kategori2" value="Offline">
                                <label class="form-check-label" for="kategori2">Offline</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div style="background-color:white;">
            <div class="mt-3 pl-3 pr-3 pb-4" style="color: black;"> 
                <div>                    
                    <div class="form-group row">
                        <label for="inputTanggal" class="col-sm-4 col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                            <input type="date" name="tanggal" class="form-control" name="tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="inputMulai">Jam Mulai</label>
                            <select class="custom-select" name="inputMulai">
                                <option>
                                </option>
                                <?php for ($i = 1; $i < 25; $i++) : ?>
                                <option><?= $i % 25 ? $i % 25 : 1 ?> : 00
                                </option>
                                <?php endfor ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="inputBerakhir">Jam Berakhir</label>
                            <select class="custom-select" name="inputBerakhir">
                                <option selected>
                                    <?php for ($i = 1; $i < 25; $i++) : ?>
                                <option><?= $i % 25 ? $i % 25 : 1  ?> : 00
                                </option>
                                <?php endfor ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTempat" class="col-sm-4 col-form-label">Tempat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputTempat" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHarga" class="col-sm-4 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputHarga" value="">
                        </div>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Pembayaran</legend>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label"><input class="form-check-input" type="checkbox"
                                        name="inputBenefit[]" value="Snacks">Snacks</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label"><input class="form-check-input" type="checkbox"
                                        name="inputBenefit[]" value="Sertifikat">Sertifikat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label"><input class="form-check-input" type="checkbox"
                                        name="inputBenefit[]" value="Souvenir">Souvenir</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">
                        <a href="./home.php?" style="color:white">Submit</a>
                    </button>
                    <button type="cancel" class="btn btn-primary btn-block">
                        <a href="./home.php?" style="color:white">Cancel</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>