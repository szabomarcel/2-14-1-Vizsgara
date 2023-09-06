<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Regrisztráció</title>
</head>
<div>
    <?php
    $servername ="localhost";
    $username = "rool";
    $password = "";
    $database = "focistak";
    //Craete connaction
    $connection = new mysqli($servername, $username, $password, $database);

    // Check connection 
    if($connection -> connect_error){
        die("Connection failed:" .$connection ->connect_error);
    }

    // read all row from database table
    $sql = "SELECT * FROM clients";
    $result = $connection -> query($sql);

    if(!$result){
        die("Invalid query: " .$connection->error);
    }
    // read data of each row
    while($row = $result -> fetch_assoc()){
        echo"
        <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[address]</td>
            <td>$row[created_at]</td>
            <td>
                <a class='btn btn-primary btn-sm' href='PHP/Focizás/edit.php'>Edit</a>
                <a class='btn btn-danger btn-sm' href='PHP/Focizás/detele.php'>Detele</a>
            </td>
        </tr>
        ";
    }
    /*
    if(isset($_POST['create'])){
        echo'User submitted.';
    }*/
    ?>
</div>
<body>
<a class="btn btn-primary" href="Registralas.php"></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone </th>
            <th>Address</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <thead>
        <tr>
            <td>10</td>
            <td>Bill Gates</td>
            <td>bill.gates@microsoft.com</td>
            <td>+123123123</td>
            <td>NewYorkUSA</td>
            <td>18/05/2022</td>
            <td>
                <a class="btn btn-primary btn-sm" href="edit.php">Edit</a>
                <a class="btn btn-danger btn-sm" href="detele.php">Detele</a>
            </td>
        </tr>
    </thead>
</table>
    <!--<div>
        <form action="">
            <div class="container">
                <h1>Regrisztráció</h1>
                <p>Fill up the form wit correct values.</p>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" require>

                <label for="last Name"><b>Last Name</b></label>
                <input type="text" name="last Name" require>

                <label for="email"><b>Email Address</b></label>
                <input type="email" name="email" require>

                <label for="phonenumber"><b>Phone number</b></label>
                <input type="text" name="phonenumber" require>

                <label for="passwoed"><b>Passwoed</b></label>
                <input type="passwoed" name="passwoed" require>

                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>
    </div>-->
</body>
</html>