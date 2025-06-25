<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
            color: #333;
        }

        h2 {
            color: #2c3e50;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        table th {
            background-color: #2c3e50;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            padding: 6px 10px;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }

        .action-links a:hover {
            background-color: #0056b3;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
        }

        .add-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <h2>Data Buku</h2>
    <a href="tambah.php" class="add-btn">Tambah Data</a><br><br>

    <table>
        <tr>
            <th>ISBN</th>
            <th>JUDUL</th>
            <th>PENULIS</th>
            <th>PENERBIT</th>
            <th>TAHUN TERBIT</th>
            <th>Aksi</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".$row['isbn']."</td>
                <td>".$row['judul']."</td>
                <td>".$row['penulis']."</td>
                <td>".$row['penerbit']."</td>
                <td>".$row['tahun_terbit']."</td>
                <td class='action-links'>
                    <a href='edit.php?isbn=".$row['isbn']."'>Edit</a>
                    <a href='hapus.php?isbn=".$row['isbn']."' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>

</body>
</html>
