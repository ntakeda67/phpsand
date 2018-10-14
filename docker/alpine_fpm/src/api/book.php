<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $request = json_decode(file_get_contents('php://input'), true);
    $newTaskName = $request['task'];
    echo '{ "status": "success", "tasks": ["' . $newTaskName . '", "a", "b", "c"] }';
} else {
    http_response_code(405);
}
