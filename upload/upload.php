<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Upload</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/kaltara.png" rel="icon">
  <link href="../assets/img/kaltara.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style-dashboard.css" rel="stylesheet">
</head>

<h1 style="text-align:center"> Upload Berkas Beasiswa Jenjang SD</h3>



<form action="" method="POST" enctype="multipart/form-data" style="text-align:center">
    <b>File Upload</b> <input type="file" name="NamaFile">
    <input type="submit" name="proses" value="Upload">
</form>
<h1 style="text-align:center"> <a href="../user-page.php">KEMBALI</a></h3>
<?php
$koneksi = mysqli_connect("localhost","root","","upload_db");

if(isset($_POST['proses'])){
    $direktory = "berkas/";
    $file_name=$_FILES['NamaFile']['name'];
    
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktory.$file_name);

    mysqli_query($koneksi, "insert into user set file='$file_name'");

    echo "<b text-center>File berhasil diupload";
}
?>
