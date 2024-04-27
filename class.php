<?php 

$conn = new mysqli("localhost", "root", "", "chatapp");

class Action 
{
    private $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function showAll($data) {
        while($x = $data->fetch_assoc()) {
?>
        <div class="mes">
            <b class="mes-usm"><?= $x['user'] ?></b>
            <p class="mes-mes"><?= $x['mess'] ?></p>
        </div>
<?php 
        }
    }
    function queryAll() {
        $query = $this->conn->query("SELECT * FROM chat");
        $this->showAll($query);
    }
    function sendMes($mess, $user) {
        $query = $this->conn->query("INSERT INTO chat (mess, user) VALUES ('$mess','$user')");
        if($query) {
            return "Berhasil!";
        } else {
            return "gagal";
        }
    }
}

$act = new Action($conn);