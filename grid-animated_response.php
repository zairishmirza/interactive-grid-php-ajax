
<?php

session_start();

header("Content-Type: application/json");

// Initialize session
if (!isset($_SESSION["clicks"])) {

    $_SESSION["clicks"] = [
        "rose" => 0,
        "tulip" => 0,
        "sunflower" => 0,
        "hibiscus" => 0,
        "apple" => 0,
        "orange" => 0,
        "grapes" => 0,
        "strawberry" => 0
    ];

}

// Get action
$action = $_POST["action"] ?? "";

// Handle clicks
if ($action === "click") {

    $id = $_POST["id"] ?? "";
    $amount = (int)($_POST["amount"] ?? 1);

    if (!array_key_exists($id, $_SESSION["clicks"])) {

        echo json_encode(["error" => "Invalid element"]);
        exit;

    }

    if ($amount !== 1 && $amount !== 2) {

        echo json_encode(["error" => "Invalid amount"]);
        exit;

    }

    $_SESSION["clicks"][$id] += $amount;
    $resp=[
        "success" => true,
        "id" => $id,
        "count" => $_SESSION["clicks"][$id]
    ];
    //print_r($resp);
    //exit;

    echo json_encode($resp);

    exit;
}


// Show results
if ($action === "result") {

    echo json_encode($_SESSION["clicks"]);
    exit;

}


// Invalid action
echo json_encode(["error" => "Invalid action"]);

?>
