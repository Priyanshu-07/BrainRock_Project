<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Infant Details</title>
    <link rel="shortcut icon" href="./default.png" type="image/x-icon">
    <link rel="stylesheet" href="SectorForm.css">
</head>

<body>
    <div class="container w-50">
        <h3 class="mt-4 text-center">Beneficiary Family Details</h3>
        <form action="" method="POST">
            <div class="form-group my-3">
                <label for="mothername">Mother Name</label>
                <input type="text" id="mothername" class="form-control from-text" name="mothername" placeholder="Enter Beneficiary Mother Name." required />
            </div>
            <div class="form-group my-3">
                <label for="fatherguardianname">Father/Guardian Name</label>
                <input type="text" id="fatherguardianname" class="form-control from-text" name="fatherguardianname" placeholder="Enter Beneficiary Father/Guardian Name." required />
            </div>
            <div class="form-group my-3">
                <label for="guardian-phone">Guardian Phone</label>
                <input type="number" id="guardian-phone" class="form-control from-text" name="guardian-phone" placeholder="Enter your Guardian Phone Number." required />
            </div>
            <div class="form-group my-3">
                <label for="guardian-adharcard">Guardian Aadhar Number</label>
                <input type="number" id="guardian-adharcard" class="form-control from-text" name="guardian-adharcard" placeholder="Enter Guardian Aadhar Number." required />
            </div>
            <div class="form-group my-3">
                <label for="relation">Relation with Beneficiary</label>
                <input type="text" id="relation" class="form-control from-text" name="relation" placeholder="Relation with Beneficiary." required />
            </div>
            <div class="form-group my-2">
                <label for="caste" class="mb-2">Caste</label><br>
                <input type="radio" id="general" class="form-check-input " name="caste" value="general" />
                <label for="general">General</label>
                <input type="radio" id="obc" class="form-check-input ms-3" name="caste" value="obc" />
                <label for="obc">OBC</label>
                <input type="radio" id="sc" class="form-check-input ms-3" name="caste" value="sc" />
                <label for="sc">SC</label>
                <input type="radio" id="st" class="form-check-input ms-3" name="caste" value="st" />
                <label for="st">ST</label>
            </div>
            <div class="form-group my-3">
                <label for="address">Address</label>
                <input type="text" id="address" class="form-control from-text" name="address" placeholder="Enter Guardian Address" required />
            </div>
            <div style="display: flex; justify-content: space-between;">
                <a href="SectorForm_land_type.php" class="btn btn-primary">Previous</a>
                <a href="SectorForm_Beneficiary_Form.php" class="btn btn-primary">Next</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>