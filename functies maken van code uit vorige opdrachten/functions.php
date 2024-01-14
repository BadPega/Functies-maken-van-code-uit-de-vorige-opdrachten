<?php
require_once 'dbconn.php';

function select_product($id) {
    global $conn;

    $sql = "SELECT * FROM products WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return null;
    }
}

// Voeg hier de functies toe voor opslaan, wijzigen en verwijderen van gegevens
?>