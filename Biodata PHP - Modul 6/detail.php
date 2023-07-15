<?php
$nama = $_GET['nama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$tempat = $_GET['tempat'];
$tanggal = $_GET['tanggal'];
$umur = $_GET['umur'];
$alamat = $_GET['alamat'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/plus-jakarta-display.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <h1>Congrats you are a member now 🤞</h1>
                        <p class="lead">Yeay! Biodata kamu sudah tersimpan. Enjoy Your Learning...</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="GET" action="proses.php">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required readonly>
                            <br>
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example" required readonly>
                                <option disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki" <?php if ($jenis_kelamin == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if ($jenis_kelamin == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                            </select>

                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="tempat" class="form-label">Tempat</label>
                                    <input type="text" class="form-control" name="tempat" value="<?php echo $tempat; ?>" required readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>" required readonly>
                                </div>
                            </div>
                            <br>
                            <label for="umur" class="form-label">Umur</label>
                            <input type="number" class="form-control" name="umur" value="<?php echo $umur; ?>" required readonly>
                            <br>
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="floatingTextarea2" style="height: 100px" required readonly><?php echo $alamat; ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button type="button" class="btn btn-primary" onclick="window.location.href='index.html'"><i class="fas fa-check"></i> Selesai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>