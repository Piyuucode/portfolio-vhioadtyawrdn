<?php
$conn = mysqli_connect("localhost", "root", "no", "portfolio");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO saran (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($query) === TRUE) {
    // Jika query berhasil dieksekusi, tampilkan alert menggunakan JavaScript
    echo "<script>alert('Sending success!.');</script>";
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

// Redirect ke halaman index.html setelah menampilkan alert
header('Location: index.html');
?>
