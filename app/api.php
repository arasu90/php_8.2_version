<?php


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


$request_method = $_SERVER['REQUEST_METHOD'];

// switch ($request_method) {
//     case 'GET':
//         get_posts();
//         break;
//     case 'POST':
//         add_post();
//         break;
//     case 'PUT':
//         update_post();
//         break;
//     case 'DELETE':
//         delete_post();
//         break;
//     default:
//         header("HTTP/1.0 405 Method Not Allowed");
//         break;
// }

 add_post();
function add_post()
{
    global $conn;

    $data = json_decode(file_get_contents("php://input"), true);

    $title = $data['title'];
    $body = $data['body'];
echo "INSERT INTO posts (title, body) VALUES ('$title', '$body')";
    // $conn->query("INSERT INTO posts (title, body) VALUES ('$title', '$body')");

    echo json_encode(["message" => "Post added successfully"]);
}


?>
