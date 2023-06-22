<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validations</title>
</head>

<body>
    <div class='wrapper col-8'>
        <h3 class='text-center'>Login Form</h3>
        <form action='validate.php' method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name='email' class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name='password' class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4">Sign in</button>
        </form>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</html>
