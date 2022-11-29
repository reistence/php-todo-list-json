<?php
//  $todos = ["HTML", "CSS", "Vue", "PHP", "Laravel"];

$string = file_get_contents("todo.json");

$todos = json_decode($string, true);

if (isset($_POST["newTodo"])) {
    $new_todo = [
        "text" => $_POST["newTodo"],
         "done" => false
        ];
    $todos[] = $new_todo;
    file_put_contents("todo.json", json_encode($todos));
};

if(isset($_POST["thisDone"])){
    $thisDone = intval($_POST["thisDone"]);
    $todos[$thisDone]["done"] = !$todos[$thisDone]["done"];
    $todos = $todos;
    file_put_contents("todo.json", json_encode($todos));
};


if(isset($_POST["thisTodo"])){
    $thisTodo = intval($_POST["thisTodo"]);
    array_splice($todos,$thisTodo, 1);
    $todos = $todos;
        file_put_contents("todo.json", json_encode($todos));
};

header("Content-Type: application/json");
echo json_encode($todos);

// echo json_encode($todos);
?>