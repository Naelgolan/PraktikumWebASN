<?php
include 'connect.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM sistem _data_buku_perpustakaan WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<form method="POST" action="">
    isbn: <input type="text" name="isbn" value="<?= $row['isbn']; ?>" required><br>
    judul_buku: <input type="text" name="judul_buku" value="<?= $row['judul_buku']; ?>" required><br>
    penulis: <input type="text" name="penulis" value="<?= $row['penulis']; ?>" required><br>
    penerbit: <input type="text" name="penerbit" value="<?= $row['penerbit']; ?>" required><br>
    tahun_terbit: <input type="text" name="tahun_terbit" value="<?= $row['tahun_terbit']; ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $isbn = $_POST['isbn'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = "UPDATE sistem _data_buku_perpustakaan SET 
                isbn='$isbn', 
                judul_buku='$judul_buku', 
                penulis='$penulis', 
                penerbit='$penerbit', 
                tahun_terbit='$tahun_terbit' 
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil diupdate! <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
