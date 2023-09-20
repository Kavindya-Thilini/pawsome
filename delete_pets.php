<?php

$con = mysqli_connect("localhost", "u159462725_pets_user", "Pets_123456#", "u159462725_pets_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted and 'delete' button is clicked
if (isset($_POST['delete'])) {
    // Validate and sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($con, $_POST['id']);

    // Delete the data from the database using prepared statement
    $delete = "DELETE FROM pets WHERE id = ?";
    $stmt = mysqli_prepare($con, $delete);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($con);

    // Redirect to the pets overview page after deletion
    header("location: uppets.php");
    exit;
}
?>
