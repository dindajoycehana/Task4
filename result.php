<?php
session_start();
if (!isset($_SESSION['formData'])) {
    die('Data tidak tersedia.');
}
$data = $_SESSION['formData'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Data Pendaftaran</h1>
        <table border="1">
            <tr>
                <th>Username</th>
                <td><?php echo htmlspecialchars($data['username']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($data['email']); ?></td>
            </tr>
            <tr>
                <th>Usia</th>
                <td><?php echo htmlspecialchars($data['age']); ?></td>
            </tr>
            <tr>
                <th>Browser/OS</th>
                <td><?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?></td>
            </tr>
        </table>

        <br>
        <h2>Isi File</h2>
        <table border="1">
            <?php foreach ($data['fileLines'] as $line): ?>
                <tr>
                    <td><?php echo htmlspecialchars($line); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>
<?php
session_destroy();
?>