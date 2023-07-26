<?php
include "koneksi.php"; 

function getBooks()
{
    global $conn;
    $queryGetData = "SELECT * FROM Book";
    $resultGetData = mysqli_query($conn, $queryGetData);

    $dataBuku = array();
    while ($row = mysqli_fetch_assoc($resultGetData)) {
        $dataBuku[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($dataBuku);
}

function addBook()
{
    global $conn;

    $data = json_decode(file_get_contents('php://input'), true);

    $title = $data["title"];
    $author = $data["author"];
    $publication = $data["publication"];
    $isbn = $data["isbn"];

    $query = "INSERT INTO Book (title, author, publication, ISBN) VALUES ('$title', '$author', '$publication', '$isbn')";

    if (mysqli_query($conn, $query)) {
        if (isset($data['from_ajax']) && $data['from_ajax'] === 'true') {
            http_response_code(201);
            echo json_encode(array("message" => "Success!"));
        } else {
            header("Location: index.php");
            exit;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    addBook();
}


function updateBook()
{
    global $conn;
    $inputData = file_get_contents('php://input');
    $put_vars = json_decode($inputData, true);

    $id = $put_vars['id'];
    $title = $put_vars['title'];
    $author = $put_vars['author'];
    $publication = $put_vars['publication'];
    $isbn = $put_vars['isbn'];

    $result = mysqli_query($conn, "UPDATE book SET title = '$title', author = '$author', publication = '$publication', isbn = '$isbn' WHERE id = '$id'");
    if ($result) {
        http_response_code(200); 
        echo json_encode(['success' => true, 'message' => 'Succes update book']);
    } else {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Gagal update book']);
    }
}



function deleteBook()
{
    global $conn;
    parse_str(file_get_contents("php://input"), $delete_vars);

    $id = $delete_vars["id"];

    $query = "DELETE FROM Book WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        http_response_code(204);
        echo "Book deleted successfully!";
    } else {
        http_response_code(500);
        echo "Error: " . mysqli_error($conn);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    getBooks();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    addBook();
} elseif ($_SERVER["REQUEST_METHOD"] == "PUT") {
    updateBook();
} elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    deleteBook();
}

mysqli_close($conn);
