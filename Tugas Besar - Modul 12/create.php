<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Book | VSGA 2023 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-2 display-4 fw-bold text-center">
                            You have a
                            <span class="tc-pink">new book?</span>
                        </h1>
                        <p class=" mt-3 mb-3 text-center">
                            Manage your book collection here. Literature will keep your book safe.
                        </p>
                        <div class="container mt-2">
                            <div class="card-body">
                                <form id="addForm" method="POST" action="proses.php" onsubmit="return validateForm()">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="What is your title book?" aria-label="What is your title book?" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="author" class="form-label">Author</label>
                                        <input type="text" class="form-control" name="author" id="author" placeholder="Who is the author?" aria-label="Who is the author?" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="publication" class="form-label">Publication Year</label>
                                        <input type="date" class="form-control" name="publication" id="publication" placeholder="What is the publication year?" aria-label="What is the publication year?" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="isbn" class="form-label">ISBN</label>
                                        <input type="number" class="form-control" name="isbn" id="isbn" placeholder="What is the ISBN?" aria-label="What is the ISBN?" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="d-grid gap-2 col-2 mx-auto">
                                        <button type="submit" class="btn btn-pink px-4 text-white">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validateForm() {
            var title = document.getElementById('title').value;
            var author = document.getElementById('author').value;
            var publication = document.getElementById('publication').value;
            var isbn = document.getElementById('isbn').value;

            if (title === '' || author === '' || publication === '' || isbn === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'All fields must be filled!',
                });
                return false;
            }

        }

        $(document).ready(function() {
            $('#addForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'proses.php',
                    type: 'POST',
                    data: formData + '&from_ajax=true',
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'The book has been added successfully',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'index.php';
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'An error occurred while adding the book.',
                        });
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>