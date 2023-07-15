<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation</title>
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
                            <h1>Welcome Back 🎉</h1>
                        </a>
                        <p class="lead">Your account is ready to use!</p>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <form method="POST" action="proses.php" onsubmit="return validateForm()">
                                <input type="hidden" name="action" value="login">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Tulis email kamu disini!" required>
                                    <span id="emailError" class="text-danger"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Passwordnya apa?" required>
                                    <span id="passwordError" class="text-danger"></span>
                                </div>
                                <div class="text-center">
                                    <a href="register.php">Don't have an account? Sign up here!</a>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary">Sign in</button>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var emailError = document.getElementById("emailError");
            var passwordError = document.getElementById("passwordError");

            if (email == "") {
                emailError.innerHTML = "Email harus diisi";
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Email harus diisi'
                });
                return false;
            } else {
                emailError.innerHTML = "";
            }

            if (password == "") {
                passwordError.innerHTML = "Password harus diisi";
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Password harus diisi'
                });
                return false;
            } else {
                passwordError.innerHTML = "";
            }

            return true;
        }
    </script>
</body>

</html>