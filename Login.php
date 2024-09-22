<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST['loguser'];
    $pass = $_POST['logpass'];

    require_once 'Connection.php';

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM login WHERE loguser = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $response = $stmt->get_result();

    $result = array();
    $result['login'] = array();
    
    if ($response->num_rows === 1) {
        $row = $response->fetch_assoc();
        if (password_verify($pass, $row['logpass'])) {
            $index['loginId'] = $row['loginId'];
            $index['loguser'] = $row['loguser'];

            array_push($result['login'], $index);

            $result["success"] = "1";
            $result["message"] = "success";
        } else {
            $result["success"] = "0";
            $result["message"] = "Incorrect password.";
        }
    } else {
        $result["success"] = "0";
        $result["message"] = "User not found.";
    }

    echo json_encode($result);
    $stmt->close();
    mysqli_close($conn);
}
?>
