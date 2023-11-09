<?php
class Database {
    private $db = null;
    public function __construct($host, $name, $pass1, $db) {
        $this->db = new mysqli($host, $name, $pass1, $db);
    }
    public function login($name) {
        $stmt = $this->db->prepare("SELECT `email`, `name`, `password` FROM `users` WHERE `name` = ?");
        $stmt->bind_param("s", $name);
        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $_SESSION['login'] = true;
                header("Location: index.php");
            } else {
                echo "Nem megfelelő bejelentkezési adat!"; 
            }
        }
        $stmt->close();
    }
    public function register($id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $gender, $date) {
        
        //$password = password_hash($pass, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('INSERT INTO `users`(`id`, `name`, `email`, `jegyt`, `mennyiseg`, `igazolvany`, `password`, `gender`, `date`) VALUES (?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param("issssssss", $id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $gender, $date);
        if ($stmt->execute()) {
            //echo $stmt->affected_rows();
            $_SESSION['login'] = true;
            //header("Location: index.php");
        } else {
            $_SESSION['login'] = false;
            echo '<p>Rögzítés sikertelen!</p>';
        }
    }
}