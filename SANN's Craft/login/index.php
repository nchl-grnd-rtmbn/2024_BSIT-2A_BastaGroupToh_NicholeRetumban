<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
    <form class="row g-3">
      <div class="col-md-6">
           <label for="inputFull_name" class="form-label">Email:</label>
           <input type="text" name="email" class="form-control" id="inputEmail">
      </div>
      <div class="col-md-6">
           <label for="inputEmail" class="form-label">Password:</label>
           <input type="text" name="password" class="form-control" id="inputPassword">
      </div>
      </div>
      <div class="col-12">
        <button type="login" class="btn btn-primary">Login</button>
    </div>
    </form>
    </form>
</body>
</html>