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
                <h3 class="my-5 text-center">Beneficiary Details</h3>
                <form action="" method="POST">
                    <div class="form-group my-3">
                        <label for="beneficiary-adharcard">Beneficiary Aadhar Number ( Only if Beneficiary have Aadhar )</label>
                        <input type="number" id="beneficiary-adharcard" class="form-control from-text" name="beneficiary-adharcard" placeholder="Enter Beneficiary Aadhar Number." />
                    </div>
                    <div class="form-group my-3">
                        <label for="beneficiaryname">Beneficiary Name</label>
                        <input type="text" id="beneficiaryname" class="form-control from-text" name="beneficiaryname" placeholder="Enter Beneficiary Name." required />
                    </div>
                    <div class="form-group my-3">
                        <label for="blood-group">Blood Group</label>
                        <input type="text" id="blood-group" class="form-control from-text" name="blood-group" placeholder="Enter Beneficiary Blood Group." required />
                    </div>
                    <div class="form-group my-3">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" class="form-control from-text" name="dob" required />
                    </div>
                    <div class="form-group my-3">
                        <label for="education">Education Qualification</label>
                        <input type="text" id="education" class="form-control from-text" name="education" placeholder="Enter Beneficiary Qualification" required />
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <a href="SectorForm_familty_Details.php" class="btn btn-primary">Previous</a>
                        <a href="Account_Detail.php" class="btn btn-primary">Next</a>
                    </div>
                </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>