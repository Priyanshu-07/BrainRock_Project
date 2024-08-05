<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup Page</title>
    <link rel="shortcut icon" href="/default.png" type="image/x-icon">
    <link rel="stylesheet" href="signup.css">
</head>

<body>

    <h2 class="text-center ls p-3 heading-text">SIGNUP FORM</h2>
    <form class="form-container" action="" method="POST">
        <div class="dropdown dropdown-container text-center">
            <label for="dropdownMenu2" class="ls">Signup Type</label>
            <button class="btn dropdown-toggle border mt-1 ls" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Please Select Your ID Type
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item ls" type="button" onclick="selectItem(this)">State Level</button></li>
                <li><button class="dropdown-item ls" type="button" onclick="selectItem(this)">District Level</button></li>
                <li><button class="dropdown-item ls" type="button" onclick="selectItem(this)">Block Level</button></li>
                <li><button class="dropdown-item ls" type="button" onclick="selectItem(this)">Sector Level</button></li>
            </ul>
        </div>
        <div class="form-group my-2">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control form-text" name="name" placeholder="Enter Your Full Name" />
        </div>
        <div class="form-group my-2">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control form-text" name="email" placeholder="email@domain.com" />
        </div>
        <div class="form-group my-2">
            <label for="gender" class="mb-2">Gender</label><br>
            <input type="radio" id="male" class="form-check-input " name="gender" value="male" />
            <label for="male">Male</label>
            <input type="radio" id="female" class="form-check-input ms-3" name="gender" value="female" />
            <label for="female">Female</label>
            <input type="radio" id="transgender" class="form-check-input ms-3" name="gender" value="transgender" />
            <label for="transgender">Transgender</label>
        </div>
        <div class="form-group my-2">
            <label for="aadhar">Aadhar</label>
            <input type="number" id="aadhar" class="form-control form-text" name="aadhar" placeholder="Enter your aadhar number" />
        </div>
        <div class="form-group my-2">
            <label for="mob">Mob No.</label>
            <input type="number" id="mob" class="form-control form-text" name="mob" placeholder="phone number" />
        </div>
        <div class="form-group my-2">
            <label for="address">Address</label>
            <input type="text" id="address" class="form-control form-text" name="address" placeholder="Enter your full address." />
        </div>
        <button type="submit" class="btn btn-primary ls">Submit</button>
    </form>
    <div class="text-center">
        <p>
            Already have an account? <a href="login.php">Login</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function selectItem(item) {
            var dropBtn = document.getElementById('dropdownMenu2');
            dropBtn.textContent = item.textContent;
        }
    </script>

</body>

</html>