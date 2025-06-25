<?php include 'connect.php'; ?>

<form method="POST" action="">
    isbn: <input type="text" name="isbn" required><br>
    judul: <input type="text" name="judul" required><br>
    penulis: <input type="text" name="penulis" required><br>
    penerbit: <input type="text" name="penerbit" required><br>
    tahun_terbit: <input type="text" name="tahun_terbit" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = "INSERT INTO mahasiswa (isbn, judul, penulis, penerbit, tahun_terbit)
              VALUES ('$isbn', '$judul', '$penulis', '$penerbit', '$tahun_terbit')";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan! <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
