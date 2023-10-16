<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border my-5 border-warning shadow font-monospace">
            <div class="text-center my-3">
                <p class="fs-3 fw-bold text-warning ">Sign_up</p>
            </div>

            <form action="registerdb.php" method="post">

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="fname" class="px-2 py-2 w-100 fw-bold" id="name1" placeholder="Enter the Name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email-id:</label>
                    <input type="email" name="email" class="px-2 py-2 w-100 fw-bold" id="email" placeholder="Enter Email-id">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile no:</label>
                    <input type="number" name="number" class="px-2 py-2 w-100 fw-bold" id="phone" placeholder="Enter mobile number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="pass" class="px-2 py-2 w-100 fw-bold" id="passw" placeholder="Enter your Password">
                </div>

                <div class="mb-3 col-12">
                    <button type="submit" name="save" class="btn btn-danger py-2 w-100 fw-bold fs-4">Register</button>
                </div>

                <div class="mb-3 col-12">
                    <a href="login.php" class="btn btn-warning  w-100 fw-bold fs-4 py-2 text-white">Allreday Register</a>
                </div>

            </form>
        </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>