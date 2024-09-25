<?php
// Data Mahasiswa
$mahasiswa = [
    ["nama" => "Dimas Mahendra", "npm" => "22313012", "kelas" => "TI22A"],

];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>

<h1>Data Saya</h1>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['npm']; ?></td>
                <td><?php echo $mhs['kelas']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<footer>
    &copy; 2024 Data Saya
</footer>

</body>
</html>
