<?php
include 'db.php';

$id = $_GET["id"];
$sql = "SELECT * FROM ogrencıler WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Kayıt bulunamadı";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $yas = $_POST["yas"];
    $email = $_POST["email"];

    $sql = "UPDATE ogrencıler SET isim='$isim', soyisim='$soyisim', yas=$yas, email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla güncellendi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Güncelle</title>
</head>
<body>
    <h1>Öğrenci Güncelle</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=$id");?>">
        İsim: <input type="text" name="isim" value="<?php echo $row["isim"]; ?>" required><br>
        Soyisim: <input type="text" name="soyisim" value="<?php echo $row["soyisim"]; ?>" required><br>
        Yaş: <input type="number" name="yas" value="<?php echo $row["yas"]; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row["email"]; ?>" required><br>
        <input type="submit" value="Güncelle">
    </form>
    <br>
    <a href="index.php">Öğrenci Listesine Dön</a>
</body>
</html>