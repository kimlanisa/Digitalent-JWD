<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/plus-jakarta-display.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <h1>Let's to Learn With Me 😋✨</h1>
                        <p class="lead">Silahkan isi biodata anda dengan benar ya, tenang datanya bakal aman ko!</p>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <br>    
                            <img src="assets/image.png" alt="learnify" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="proses.php" onsubmit="return validateForm()">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Siapa nama kamu?" aria-label="Nama Lengkap" aria-describedby="basic-addon1">
                                <br>
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tempat" class="form-label">Tempat</label>
                                        <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Dimana Tempat Lahirmu" aria-label="Tempat Lahir" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tanggal" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Kapan Tanggal Lahir Kamu" aria-label="Tanggal Lahir" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <br>
                                <label for="umur" class="form-label">Umur</label>
                                <input type="number" class="form-control" name="umur" id="umur" placeholder="Berapa Umur Kamu?" aria-label="Umur" aria-describedby="basic-addon1">
                                <br>
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Tulis Alamat Kamu Disini..." id="floatingTextarea2" style="height: 100px"></textarea>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button type="submit" value="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-save"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        function validateForm() {
            var nama = document.getElementById("nama").value;
            var jenisKelamin = document.getElementById("jenis_kelamin").value;
            var tempat = document.getElementById("tempat").value;
            var tanggal = document.getElementById("tanggal").value;
            var umur = document.getElementById("umur").value;
            var alamat = document.getElementById("alamat").value;

            if (nama.trim() == "") {
                Swal.fire("Error", "Nama belum diisi", "error");
                return false;
            }
            if (jenisKelamin == "") {
                Swal.fire("Error", "Jenis kelamin belum dipilih", "error");
                return false;
            }
            if (tempat.trim() == "") {
                Swal.fire("Error", "Tempat lahir belum diisi", "error");
                return false;
            }
            if (tanggal.trim() == "") {
                Swal.fire("Error", "Tanggal lahir belum diisi", "error");
                return false;
            }
            if (umur.trim() == "") {
                Swal.fire("Error", "Umur belum diisi", "error");
                return false;
            }
            if (alamat.trim() == "") {
                Swal.fire("Error", "Alamat belum diisi", "error");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>