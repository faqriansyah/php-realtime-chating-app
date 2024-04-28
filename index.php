<?php
require_once "class.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Halaman utama</title>
</head>

<body>
    <h1>Silahkan masukkan pesan dan publik akan melihatnya</h1>
    <div class="chat-box">
        loading data...
    </div>
    <div class="frm">
        <input type="text" id="mess" placeholder="pesan anda" name="mess">
        <input type="text" id="user" placeholder="nama anda" name="user" value="anonim">
        <button id="subm" value="Kirim">Kirim</button>
    </div>
    <script src="js/script.js"></script>
    <script src="js/livechat.js"></script>
    <script src="js/sendchat.js"></script>
</body>

</html>