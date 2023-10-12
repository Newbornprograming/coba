<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ofline -->
    <!-- arahkan menggunaka absolut url yaitu langsung melalui server yaitu localhost -->
    <!-- tidak bisa pake relative url  seperti ../folder/file-->
    <!-- <link rel="sylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css"> -->
    <!-- online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman <?= $data['title']; ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/phpmvc/public/">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="http://localhost/phpmvc/public/">Home</a>
            <a class="nav-link" href="http://localhost/phpmvc/public/about">About</a>
        </div>
        </div>
    </div>
    </nav>
    