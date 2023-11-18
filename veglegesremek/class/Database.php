<?php
class Database {
    private $db = null;
    public $error = false;
    public function __construct($host, $name, $pass1, $db) {
        try {
            $this->db = new mysqli($host, $name, $pass1, $db);
            $this->db->set_charset("utf8");
        } catch (Exception $exc) {
            $this->error = true;
            echo '<p>Az adatbázis nem elérhető!</p>';
            exit();
        }
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
                $_SESSION['name'] = $row;
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
    public function valasztos() {
        $result = $this->db->query("SELECT * FROM `focistanevek`");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}