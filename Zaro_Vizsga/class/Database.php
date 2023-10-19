<?php
class Database {
    private $db = null;
    public function __construct($host, $name, $pass1, $db) {
        $this->db = new mysqli($host, $name, $pass1, $db);
    }
    public function login($email, $name, $pass1) {
        $stmt = $this->db->prepare('SELECT `regisztracio` FROM `users` WHERE `email`, `name`, `password`'); // 'SELECT `email`, `name`, `password` FROM `regisztracio` WHERE `users`'
        $stmt->bind_param("sss", $name, $email, $pass1);
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
    public function register($pass1, $pass2, $emailcim, $mennyiseg, $igazolvanyszam, $gender, $jegyt, $date, $name) {
        //$password = password_hash($pass, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('SELECT `regisztracio` FROM `users` WHERE `name`, `email`, `jegyt`, `mennyiseg`, `igazolvany`, `password`, `gender`, `date`) VALUES(?,?,?,?,?,?,?,?);'); //'INSERT INTO `users`(`name`, `password`, `email`, `igazolvany`, `gender`, `jegyt`, `date`, `mennyiseg`
        $stmt->bind_param("ssssssss", $pass1, $pass2, $emailcim, $mennyiseg, $igazolvanyszam, $gender, $jegyt, $date, $name);
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