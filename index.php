<?php
include 'db.php';

$sql = "SELECT * FROM ogrencıler";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Listesi</title>
</head>
<body>
    <h1>Öğrenci Listesi</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Yaş</th>
            <th>Email</th>
            <th>İşlemler</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["isim"]."</td>
                        <td>".$row["soyisim"]."</td>
                        <td>".$row["yas"]."</td>
                        <td>".$row["email"]."</td>
                        <td>
                            <a href='ogrenci_guncelle.php?id=".$row["id"]."'>Güncelle</a>
                            <a href='ogrenci_sil.php?id=".$row["id"]."'>Sil</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Kayıt bulunamadı</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <br>
    <a href="ogrenci_ekle.php">Yeni Öğrenci Ekle</a>
</body>
</html>