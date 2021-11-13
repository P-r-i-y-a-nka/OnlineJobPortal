<?php include 'config3.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <style>
          form{
            background-color:#fff;
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px;
          }
          body{
            background-color:grey;
          }
        </style>
        <title>Register</title>
    </head>
<body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name" value="<?php echo $username; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no" value="<?php echo $phone; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $_POST['password']; ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" value="<?php echo $_POST['cpassword']; ?>" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
<br>
<p class="login-register-text">Already Have an account? <a href="index.php">Login Here</a>.</p>
  </form>
</div>
</body>
</html>