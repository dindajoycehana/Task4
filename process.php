<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $age = (int) $_POST['age'];
    $password = trim($_POST['password']);
    $file = $_FILES['file'];

    if (empty($username) || strlen($username) < 5 || strlen($username) > 20) {
        die('Username tidak valid.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Email tidak valid.');
    }
    if ($age < 12 || $age > 120) {
        die('Usia tidak valid.');
    }
    if (!preg_match('/^(?=.[a-z])(?=.[A-Z]).{8,}$/', $password)) {
        $errors[] = "Password harus memiliki minimal 8 karakter, termasuk satu huruf besar dan satu huruf kecil.";
    }
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die('File upload error.');
    }
    if ($file['size'] > 2 * 1024 * 1024) {
        die('Ukuran file maksimal 2MB.');
    }
    if (mime_content_type($file['tmp_name']) !== 'text/plain') {
        die('Hanya file teks (.txt) yang diizinkan.');
    }

    $fileContent = file_get_contents($file['tmp_name']);
    $fileLines = explode("\n", $fileContent);
    $_SESSION['formData'] = compact('username', 'email', 'age', 'fileLines');
    header('Location: result.php');
}