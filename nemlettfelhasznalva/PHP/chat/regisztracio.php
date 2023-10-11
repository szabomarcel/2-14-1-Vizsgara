<?php
    $db = new mysqli('localhost', 'root', '', 'youtube' );

    if(isset($_POST['submit'])){
        $errors = array();
        $true = true;
        if(empty($_POST['username'])){ 
            $true = false;
            array_push($errors, "A felhasználnév üres");
        }
        if(empty($_POST['password'])){
            $true = false;
            array_push($errors, "A jelszó üres!");
        }
        if(empty($_POST['password_2'])){
            $true = false;
            array_push($errors, "A jelszó megerősitése!");
        }
        if(!($_POST['password']==$_POST['password_2'])){
            $true = false;
            array_push($errors, "A jelszavak nem egynelöek.");
        }
        if(empty($_FILES['image']['name'])){
            $true = false;
            array_push($errors, "A képet még nem választotad ki.");
        }
        $type = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        if(!($type == "png" || $type == "jpeg" || $type == "jpeg")){
            $true = false;
            array_push($errors, "A kép csak png, jpeg vagy jpg formátumo lehet, de te" . $type . 'akartál feltölteni');
            $_FILES['image']['name'] = date("Ymdhis").mt_rand().".".$type;
        }
        if($_FILES['image']['size'] > 1000000){
            $true = false;
            array_push($errors, "A kép túl nagy! ");
        }
        if(file_exists('image/'.$FILES['image'])){
            $true = false;
            array_push($errors, "Ilyen nevű kép már létezik.");

        }
        if($true){
            // regisztráció
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
            $password = md5($password);

            move_uploaded_file($_FILES['image']['tmpname'], 'image/' . $_FILES['image']['name']);

            $image = $_FILES['image']['name'];
            $sql = "INSERT INTO users(username, password, image ,Date) VALUES('$username', '$password', '$image', NOW ())";
            $db->query($sql);
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['image'] = $image;
            header('location: home.php');
        }
    }

    $db->close();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="regisztracio.php" method="POST" enctype="multipart/form-data">
            username<input type="text" name="username">
            password<input type="password" name="password">
            repassword<input type="password" name="password_2">
            image<input type = "file" name="image"/>
            <input value="Regisztráció!" type="submit" name="submit">
        </form>
        <?php
            if(!empty($errors)){
                foreach($errors as $key){
                    echo $key . "<br>";
                }
            }
        ?>
    </body>
</html>