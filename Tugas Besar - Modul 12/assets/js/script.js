function validateForm() {
  var title = document.getElementById("title").value;
  var author = document.getElementById("author").value;
  var publication = document.getElementById("publication").value;
  var isbn = document.getElementById("isbn").value;

  if (title === "" || author === "" || publication === "" || isbn === "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "All fields must be filled!",
    });
    return false;
  }
}

function loadTableData() {
  $.ajax({
    url: "proses.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      var tableBody = $("#bukuTable tbody");
      tableBody.empty();

      $.each(data, function (index, book) {
        var row =
          "<tr>" +
          "<td>" +
          book.id +
          "</td>" +
          "<td>" +
          book.title +
          "</td>" +
          "<td>" +
          book.author +
          "</td>" +
          "<td>" +
          book.publication +
          "</td>" +
          "<td>" +
          book.isbn +
          "</td>" +
          "<td>" +
          '<a href="update.php?id=' +
          book.id +
          '" class="btn btn-warning"><i class="fas fa-edit"></i></a> ' +
          '<button class="btn btn-danger delete-btn" data-id="' +
          book.id +
          '"><i class="fas fa-trash"></i></button>' +
          "</td>" +
          "</tr>";

        tableBody.append(row);
      });

      $(".delete-btn").click(function (e) {
        e.preventDefault();
        var id = $(this).data("id");

        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!",
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: "proses.php?aksi=delete",
              type: "DELETE",
              data: {
                id: id,
              },
              success: function (response) {
                Swal.fire(
                  "Deleted!",
                  "Book deleted successfully!",
                  "success"
                ).then(() => {
                  location.reload();
                });
              },
              error: function () {
                Swal.fire("Error!", "Failed to delete book.", "error");
              },
            });
          }
        });
      });
    },
  });
}

loadTableData(); 

$(document).ready(function () {
  $("#addForm").on("submit", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: "proses.php",
      type: "POST",
      data: formData + "&from_ajax=true",
      success: function (response) {
        Swal.fire({
          icon: "success",
          title: "Success!",
          text: "The book has been added successfully",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "index.php";
          }
        });
      },
      error: function (xhr, status, error) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "An error occurred while adding the book.",
        });
      },
    });
  });
});

   
