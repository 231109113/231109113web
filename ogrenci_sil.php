<?php
include 'db.php';

$id = $_GET["id"];

$sql = "DELETE FROM ogrencıler WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla silindi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
exit;
?>