<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Showing Data</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Data Form</h1>
                <form action="" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="district" class="form-label">District:</label>
                        <select class="form-control" id="district" name="district">
                            <option value="">Select One</option>
                            <option value="D1">Almora</option>
                            <option value="D2">Nainital</option>
                        </select>
                    </div>
                    <button type="submit" name="form-submit" value="district" class="btn btn-primary my-5">Submit</button>

                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th class="col">District Id</th>
                            <th class="col">District Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include './connection.php';
                        if (isset($_POST['form-submit'])) {
                            $disId = $_POST['district'];
                            $sql = "SELECT * FROM district WHERE dis_id = '$disId'";
                            // echo $sql;
                            $result = mysqli_query($conn, $sql) or die("Error: Database not connected");
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $dis_id = $row['dis_id'];
                                    $sql1 = "SELECT * FROM project WHERE dis_id = '$disId'";
                                    $result1 = mysqli_query($conn, $sql1) or die("Error: Database");
                                    if (mysqli_num_rows($result1) > 0) {
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                            $Pro_id = $row1['pro_id'];
                                            $sql2 = "SELECT * FROM sector WHERE dis_id = '$disId'";
                                            $result2 = mysqli_query($conn, $sql2) or die("Error: Database");
                                            if (mysqli_num_rows($result2) > 0) {
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    $sec_id = $row2['sec_id'];
                                                    $sql3 = "SELECT * FROM village WHERE dis_id = '$disId'";
                                                    $result3 = mysqli_query($conn, $sql3) or die("Error: Database");
                                                    if (mysqli_fetch_assoc($result3) > 0) {
                                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                        ?>
                                                            <tr>
                                                                <td><?php echo $row3['vill_id'] ?></td>
                                                                <td><?php echo $row3['vill_name'] ?></td>
                                                            </tr>
                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
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