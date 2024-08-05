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
        <h3 class="mt-5 text-center">Beneficiary Area Details</h3>
        <form action="" method="POST">
            <div class="form-group my-3">
                <label for="district">District</label>
                <input type="text" id="district" class="form-control from-text" name="district" placeholder="Enter Beneficiary District." required />
            </div>
            <div class="form-group my-3">
                <label for="block">Block</label>
                <input type="text" id="block" class="form-control from-text" name="block" placeholder="Enter Beneficiary Block." required />
            </div>
            <div class="form-group my-3">
                <label for="gram">Gram</label>
                <input type="text" id="gram" class="form-control from-text" name="gram" placeholder="Enter Beneficiary Gram." required />
            </div>
            <div class="form-group my-3">
                <label for="village">Village</label>
                <input type="text" id="village" class="form-control from-text" name="village" placeholder="Enter Beneficiary Village." required />
            </div>
            <div class="form-group my-2">
                <label for="landtype" class="mb-2">Land Type</label><br>
                <input type="radio" id="urban" class="form-check-input " name="landtype" value="urban" />
                <label for="urban">Urban</label>
                <input type="radio" id="rural" class="form-check-input ms-3" name="landtype" value="rural" />
                <label for="rural">Rural</label>
            </div>
            <div class="navigation-btn mb-4">
                <a href="SectorForm_familty_Details.php" class="btn btn-primary">Next</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>