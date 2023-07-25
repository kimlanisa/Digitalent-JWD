<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD Data Book | VSGA 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="mb-2 display-4 fw-bold">
                            What book are you
                            <span class="tc-pink">looking for?</span>
                        </h1>
                        <p class=" mt-3 mb-3">
                            Literature is a website for manage your book collection. You can add, edit, and delete your book collection here.
                        </p>
                        <div class="container mt-2">
                            <div class="col-4 mx-auto my-3">
                                <a href="create.php" class="btn btn-pink px-4 text-white">Add Book</a>
                            </div>
                            <div class="card-body">
                                <table id="bukuTable" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID Book</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Publication Year</th>
                                            <th>ISBN</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadTableData() {
                $.ajax({
                    url: 'proses.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        var tableBody = $('#bukuTable tbody');
                        tableBody.empty();

                        $.each(data, function(index, book) {
                            var row = '<tr>' +
                                '<td>' + book.id + '</td>' +
                                '<td>' + book.title + '</td>' +
                                '<td>' + book.author + '</td>' +
                                '<td>' + book.publication + '</td>' +
                                '<td>' + book.isbn + '</td>' +
                                '<td>' +
                                '<a href="update.php?id=' + book.id + '" class="btn btn-warning"><i class="fas fa-edit"></i></a> ' +
                                '<button class="btn btn-danger delete-btn" data-id="' + book.id + '"><i class="fas fa-trash"></i></button>' +
                                '</td>' +
                                '</tr>';

                            tableBody.append(row);
                        });

                        $(".delete-btn").click(function(e) {
                            e.preventDefault();
                            var id = $(this).data("id");

                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        url: 'proses.php?aksi=delete',
                                        type: 'DELETE',
                                        data: {
                                            id: id
                                        },
                                        success: function(response) {
                                            Swal.fire('Deleted!', 'Book deleted successfully!', 'success').then(() => {
                                                location.reload();
                                            });
                                        },
                                        error: function() {
                                            Swal.fire('Error!', 'Failed to delete book.', 'error');
                                        }
                                    });
                                }
                            });
                        });
                    }
                });
            }

            loadTableData();
        });
    </script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>