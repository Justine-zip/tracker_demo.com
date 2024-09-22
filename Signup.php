<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST['loguser'];
    $pass = $_POST['logpass'];

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    require_once 'Connection.php';

    $sql = "INSERT INTO login (loguser, logpass) VALUES ('$user', '$pass')";
    
    if(mysqli_query($conn, $sql))
    {
        $result["success"] = "1";
        $result["message"] = "success";
        
        echo json_encode($result);
        mysqli_close($conn);
    }
    else
    {
        $result["success"] = "0";
        $result["message"] = "error";
        
        echo json_encode($result);
        mysqli_close($conn);
    }

}

?>