<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>REGISTRATION</title>
</head>
<body>
    <form action="register.php" method="post">
    <form class="row g-3">
      <div class="col-md-6">
           <label for="inputFull_name" class="form-label">Full Name:</label>
           <input type="text" name="name" class="form-control" id="inputFull_name">
      </div>
      <div class="col-md-6">
           <label for="inputEmail" class="form-label">Email:</label>
           <input type="text" name="email" class="form-control" id="inputEmail">
      </div>
      <div class="col-md-6">
           <label for="inputPassword" class="form-label">Password:</label>
           <input type="text" name="password" class="form-control" id="inputPassword">
      </div>
      <div class="col-6">
           <label for="inputAddress" class="form-label">Address:</label>
           <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Barangay, Municipality, Province">
      </div>
      <div class="col-6">
           <label for="inputUser_type" class="form-label">User Type:</label>
           <input type="text" name="user_type" class="form-control" id="inputUser_type" placeholder="Customer / Seller">
      </div>
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </form>
</body>
</html>