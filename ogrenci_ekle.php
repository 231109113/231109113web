<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $yas = $_POST["yas"];
    $email = $_POST["email"];

    $sql = "INSERT INTO ogrencıler (isim, soyisim, yas, email) VALUES ('$isim', '$soyisim', $yas, '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kayıt başarıyla oluşturuldu";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yeni Öğrenci Ekle</title>
</head>
<body>
    <h1>Yeni Öğrenci Ekle</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        İsim: <input type="text" name="isim" required><br>
        Soyisim: <input type="text" name="soyisim" required><br>
        Yaş: <input type="number" name="yas" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Ekle">
    </form>
    <br>
    <a href="index.php">Öğrenci Listesine Dön</a>
</body>
</html>