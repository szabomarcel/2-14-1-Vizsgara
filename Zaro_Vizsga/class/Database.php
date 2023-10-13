<?php
class Database {
    private $db = null;
    public function __construct($host, $user, $pass, $db) {
        $this->db = new mysqli($host, $user, $pass, $db);
    }
    public function login($email, $username, $pass) {
        $stmt = $this->db->prepare('SELECT  `email`, `name`, `password` FROM `users` WHERE users.name');
        $stmt->bind_param("sss", $username, $email, $pass);
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
    public function register($name, $pass1 , $emailcim, $igazolvanyszam, $gender, $jegyt, $date, $mennyiseg) {
        //$password = password_hash($pass, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('INSERT INTO `users`(`name`, `password`, `email`, `igazolvanyszam`, `gender`, `jegyt`, `date`, mennyiseg) VALUES(?,?,?,?,?,?,?,?);') ;
        $stmt->bind_param("ssssssss", $name, $pass1 , $emailcim, $igazolvanyszam, $gender, $jegyt, $date, $mennyiseg);
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