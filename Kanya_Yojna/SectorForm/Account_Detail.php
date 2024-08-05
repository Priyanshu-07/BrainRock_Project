<!doctype html>
<html lang="en">
<?php
$servername = 'localhost';
$username = 'root';
$password = 'Rohan@123*';
$port = 3307;
$dbname = 'infant';
$conn = new mysqli($servername . ':' . $port, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Account Details</title>
    <link rel="stylesheet" href="AccountDetail.css">
</head>

<body>
    <?php
    if (isset($_POST['submit_account_details'])) {
        $bank_name = $_POST['bank_name'];
        $account_number = $_POST['account_number'];
        $ifsc_code = $_POST['ifsc_code'];

        $sql = "INSERT INTO account_details(`bank name`, `account number`, `ifsc code`) VALUES('$bank_name', '$account_number', '$ifsc_code')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Data is Inserted');</script>";
            echo "<script>windows.open('Account_Detail.php','_self')</script>";
        } else {
            echo "<script>alert('Data is not Inserted');</script>" . mysqli_error($conn);
        }
    }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h3 class="text-center">Account Details</h3>
                <form action="" method="post">
                    <div class="form-group my-3">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Enter the bank name." required />
                    </div>
                    <div class="form-group my-3">
                        <label for="account_number">Account Number</label>
                        <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter the account number." required />
                    </div>
                    <div class="form-group my-3">
                        <label for="ifsc_code">IFSC Code</label>
                        <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="Enter the IFSC Code." required />
                    </div>
                    <div class="navigation-btn">
                        <a href="SectorForm_Beneficiary_Form.php" class="btn btn-primary my-2">Previous</a>  
                        <button type="submit" name="submit_account_details" class="btn btn-primary my-2">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Account Details Table</h3>
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Bank Name</th>
                            <th scope="col">Account Number</th>
                            <th scope="col">IFSC Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $sql = "SELECT * FROM `account_details`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['bank name']; ?></td>
                                    <td><?php echo $row['account number']; ?></td>
                                    <td><?php echo $row['ifsc code']; ?></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4" class="text-center">No Data Found</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>