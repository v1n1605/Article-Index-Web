<?php
$host = "localhost:3307";
$user = "root";
$pass = "kzoinucd"; // Ganti dengan password database kamu jika ada
$db = "dbcms_1";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT a.id, a.title, a.date, a.content, a.picture, au.nickname AS author_name
        FROM article a
        LEFT JOIN article_author aa ON a.id = aa.article_id
        LEFT JOIN author au ON aa.author_id = au.id
        ORDER BY a.date DESC"; // Mengambil semua artikel dan mengurutkannya berdasarkan tanggal terbaru

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jalan-jalan</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $title = htmlspecialchars($row['title']);
                $date = htmlspecialchars($row['date']);
                $content = $row['content'];
                $picture = htmlspecialchars($row['picture']) ? htmlspecialchars($row['picture']) : 'gambar1.jpg'; // Gunakan gambar dari database jika ada, jika tidak gunakan default
                $author = htmlspecialchars($row['author_name']) ? htmlspecialchars($row['author_name']) : 'Penulis Tidak Diketahui';
                ?>
                <div class="artikelwrapper">
                    <h1><?php echo $title; ?></h1>
                    <h4><?php echo $author; ?></h4>
                    <h6><?php echo $date; ?></h6>
                    <img src="<?php echo $picture; ?>" alt="<?php echo $title; ?>">
                    <?php echo $content; ?>
                </div>
                <?php
            }
        } else {
            echo "<p>Tidak ada artikel ditemukan.</p>";
        }
        ?>
    </div>
    <div class="footer">
        <p>
            &copy; Kevin2025
        </p>
    </div>
</body>
</html>

<?php
$conn->close();
?>