<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <a class="navbar-brand" href="index.html">
                            <h1>Welcome 🙌</h1>
                        </a>
                        <p class="lead">Create your account here!</p>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <form method="POST" action="proses.php" onsubmit="return validateForm()">
                                <input type="hidden" name="action" value="register">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Siapa namamu?" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Tulis email kamu disini!" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Passwordnya apa?" required>
                                </div>
                                <div class="text-center">
                                    <a href="login.php">Already have an account? Sign in here!</a>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary">Sign up</button>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (nama === "" || email === "" || password === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please fill in all the fields',
                });
                return false;
            }

            // Validasi email dengan regular expression
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Invalid email format',
                });
                return false;
            }

            // Jika semua validasi berhasil
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Registration successful!',
            }).then(function() {
                document.getElementById("nama").value = "";
                document.getElementById("email").value = "";
                document.getElementById("password").value = "";
            });

            return true;
        }
    </script>
</body>

</html>