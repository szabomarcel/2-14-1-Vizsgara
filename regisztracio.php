<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Regisztráció Űrlap</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="fooldal.html">Főoldal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="fooldal.html">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jegyvasarlas.php">Jegyvásárlás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="atigazolasi hirek.html">Átigazolási hírek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Napi kwiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mérkőzések</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forraskodok.html">Forrás kódok</a>
                </li>
                </div>
            </ul>
        </div>
    </nav>
    <form action="">
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
        <div class="cda1daf8c c62524078">
            <form method="post" data-provider="google" class="c5366f585 c9ff0e6f3 c14b9751e" data-form-secondary="true">
            <input type="hidden" name="state" value="hKFo2SBQMjdrUC1MRHNRMzNscjJ1aHhCaUJyZzl0RTR1QXNkVqFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIHMzOEFZQThfNElVN1IzdUxtYzJJTkZzSElmdXZaeUZ1o2NpZNkgYVVEdjlqVnFUZnhCUkUxbDYwTkE1QWY3eVRDR0U0Y3k" />
            <input type="hidden" name="connection" value="google-oauth2" />
            <button type="submit" class="c97288905 c6d63c797 cdf193067" data-provider="google" data-action-button-secondary="true">
                <span class="ce2203299 ccafe093c" data-provider="google"></span>
                <span class="c96391cbf">Continue with Google</span>
            </button>
            </form>
            <form method="post" data-provider="github" class="c5366f585 c9ff0e6f3 c6d7c6e11" data-form-secondary="true">
            <input type="hidden" name="state" value="hKFo2SBQMjdrUC1MRHNRMzNscjJ1aHhCaUJyZzl0RTR1QXNkVqFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIHMzOEFZQThfNElVN1IzdUxtYzJJTkZzSElmdXZaeUZ1o2NpZNkgYVVEdjlqVnFUZnhCUkUxbDYwTkE1QWY3eVRDR0U0Y3k" />
            <input type="hidden" name="connection" value="github" />
            <button type="submit" class="c97288905 c6d63c797 cca44703b" data-provider="github" data-action-button-secondary="true">
                <span class="ce2203299 ccafe093c" data-provider="github"></span>
                <span class="c96391cbf">Continue with GitHub</span>
            </button>
            </form>
            <form method="post" data-provider="apple" class="c5366f585 c9ff0e6f3 c95218161" data-form-secondary="true">
                <input type="hidden" name="state" value="hKFo2SBQMjdrUC1MRHNRMzNscjJ1aHhCaUJyZzl0RTR1QXNkVqFur3VuaXZlcnNhbC1sb2dpbqN0aWTZIHMzOEFZQThfNElVN1IzdUxtYzJJTkZzSElmdXZaeUZ1o2NpZNkgYVVEdjlqVnFUZnhCUkUxbDYwTkE1QWY3eVRDR0U0Y3k" />
                <input type="hidden" name="connection" value="apple" />
                <button type="submit" class="c97288905 c6d63c797 c93c887de" data-provider="apple" data-action-button-secondary="true">
                    <span class="ce2203299 ccafe093c" data-provider="apple"></span>
                <span class="c96391cbf">Continue with Apple</span>
                </button>
            </form>
        </div>
    </form>
    
</body>
</html>