<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mysop";

// Create conection
$connection = new mysqli($servername, $username, $password,$database);

$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // GET method: Show the data of the client
    if(!isset($_GET["id"])){
        header("location: PHP/Focizás/registralas.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection -> query($sql);
    $row = $result -> fetch_assoc();

    if (!$row){
        header("location: PHP/Focizás/registralas.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
}
else{
    // POST method: Update the data of the client

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do{
        if(empty($name) || empty($email) || empty($phone) || empty($phone)){
            $errorMessage = "All the field are required";
            break;
        };
        $sql = "UPDATE clients" . "SET name = '$name', email = '$email', phone = '$phone', address = '$address' " . "WHERE id = $id";
        $result = $connection -> query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $connection -> error;
            break;
        }

        $successMessage = "Client updated corretly";
        header("location: PHP/Focizás/registralas.php");
    }while (true);
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>focistak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
        if(!empty($errorMessage)){
            echo"
            <div class = 'alert alert-wrning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                button type = 'button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label = 'Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address?>">
                </div>
            </div>
            <?php
            if(!empty($successMessage)){
                echo"
                <div class = 'row mb-3'>
                    <div class = 'offset-sm-3 col-sm6'>
                        <div class = 'alert alert-success alert-dismissible fade show' role = 'alert'>
                            <strong>$successMessage</strong>
                            <button type = 'button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>