<?php
require_once "class.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Halaman utama</title>
    <style>
        .chat-box {
            width: 400px;
            height: 500px;
            border: 2px solid black;
            overflow: auto;
        }

        .mes {
            margin: 1em;
        }

        .frm {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <h1>Silahkan masukkan pesan dan publik akan melihatnya</h1>
    <div class="chat-box">
        loading data...
    </div>
    <div class="frm">
        <input type="text" id="mess" placeholder="pesan anda" name="mess">
        <input type="text" id="user" placeholder="nama anda" name="user">
        <button id="subm" value="Kirim">Kirim</button>
    </div>
    <script>
        setInterval(() => {
            $.post("util/chat.php", (data) => {
                $(".chat-box").html(data);
                scrl();
            });
        }, 1000);

        
        function scrl() {
            const chatbox = $(".chat-box");
            chatbox.scrollTop(chatbox[0].scrollHeight);
        }
    </script>
    <script>
        const subm = document.getElementById("subm");

        subm.addEventListener("click", () => {
            const mess = document.getElementById("mess").value;
            const user = document.getElementById("user").value;
            $.post("backend/sendMes.php", {
                    mess: mess,
                    user: user
                })
                .done(() => {
                    $("#mess").val("");
                })
        })
    </script>
</body>

</html>