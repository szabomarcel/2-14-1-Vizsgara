<?php
class Database {
    private $db = null;
    public $error = false;
    public function __construct($host, $name, $pass1, $db) {
        $this->db = new mysqli($host, $name, $pass1, $db);
    }
    public function login($name, $pass) {
        //-- jelezzük a végrehajtandó SQL parancsot
        $stmt = $this->db->prepare('SELECT * FROM users WHERE users.name LIKE ?;');
        //-- elküldjük a végrehajtáshoz szükséges adatokat
        $stmt->bind_param("s", $name);
        if ($stmt->execute()) {
            //-- sikeres végrehajtás után lekérjük az adatokat
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if ($pass == $row['password']) {
                //-- felhasználónév és jelszó helyes
                $_SESSION['user'] = $row;
                $_SESSION['login'] = true;
            } else {
                $_SESSION['username'] = '';
                $_SESSION['login'] = false;
            }
            // Free result set
            $result->free_result();
            header("Location:index.php");
        }
        return false;
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