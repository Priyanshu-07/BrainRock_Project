<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>

    <?php
    include '../Database/connection.php';
    if (isset($_POST['form-submit'])) {
        $loginType = $_POST['role'];
        // $sectorName = $_POST['chpro'];
        // $districtName = $_POST['chdis'];
        // $Password = $_POST['pass'];
        if ($loginType == 'state') {
            $sectorName = 'Uttarakhand';
            $password = $_POST['pass'];
        } else if ($loginType == 'district') {
            $sectorName = $_POST['chdis'];
            $password = $_POST['pass'];
        } else if ($loginType == 'project') {
            $sectorName = $_POST['chpro'];
            $password = $_POST['pass'];
        }
        $sql = "SELECT * FROM area_table WHERE sector='$sectorName' AND def_pass='$password'";
        $result = mysqli_query($conn, $sql) or die("Error");
        if ($result) {
            echo "<script>alert('Login successfully')</script>";
            echo "<script>window.open('welcome.php')</script>";
        }
    }
    ?>

    <h3>Login Form</h3>
    <div>
        <input id="radiostate" name="radiobtn" value="state" type="radio" onclick="showForm('stateForm')" checked>
        <label for="radiostate">State</label>
        <input id="radiodistrict" name="radiobtn" value="district" type="radio" onclick="showForm('districtForm')">
        <label for="radiodistrict">District</label>
        <input id="radioproject" name="radiobtn" value="project" type="radio" onclick="showForm('projectForm')">
        <label for="radioproject">Project</label>


        <!-- State Form -->
        <form action="" method="POST" id="stateForm" style="display: block;">
            <h4>State</h4>
            <input type="hidden" name="role" value="state">
            <label for="st">State</label>
            <input id="st" name="st" type="text" value="Uttarakhand" disabled><br>
            <!-- <label for="stname">Username</label>
            <input id="stname" name="stname" type="text" placeholder="enter user name"><br> -->
            <label for="stpass">Password</label>
            <input id="stpass" name="pass" type="password" placeholder="enter password"><br>
            <button type="submit" name="form-submit" class="btn btn-primary">Submit</button>
        </form>


        <!-- District Form -->
        <form action="" method="POST" id="districtForm" style="display: none;">
            <h4>District</h4>
            <input type="hidden" name="role" value="district">
            <label for="chdis">Choose District</label>
            <select name="chdis" id="chdis">
                <option value="">Select District</option>
                <?php
                $sql = mysqli_query($conn, "SELECT DISTINCT district FROM area_table");
                while ($result = mysqli_fetch_array($sql)) {
                    // $district = $result['district'];
                    // $_SESSION['district'] = $district;
                    // echo "<option value="$result['district']">$result['district']</option>";
                    echo "<option value=\"" . $result['district'] . "\">" . $result['district'] . "</option>";
                }
                ?>
            </select><br>
            <!-- <label for="disname">Username</label>
            <input id="disname" name="disname" type="text" placeholder="enter user name"><br> -->
            <label for="dispass">Password</label>
            <input id="dispass" name="pass" type="password" placeholder="enter password"><br>
            <button type="submit" name="form-submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Project Form -->
        <form action="" method="POST" id="projectForm" style="display: none;">
            <h4>Project</h4>
            <input type="hidden" name="role" value="project">
            <label for="chpro">Choose Project</label>
            <select name="chpro" id="chpro">
                <option value="">Select Project</option>
                <?php
                $sql = mysqli_query($conn, "SELECT DISTINCT district FROM area_table");
                while ($row = mysqli_fetch_array($sql)) {
                    $distc = $row['district'];
                ?>
                    <!-- <option value="<?php echo $row['district']; ?>"><?php echo $row['district']; ?></option> -->
                    <optgroup label="<?php echo $distc; ?>">
                        <?php
                        $sqla = mysqli_query($conn, "SELECT DISTINCT project FROM area_table WHERE district='$distc'");
                        while ($rowa = mysqli_fetch_array($sqla)) {
                        ?>
                            <option value="<?php echo $rowa['project']; ?>"><?php echo $rowa['project']; ?></option>
                        <?php } ?>
                    </optgroup>
                <?php } ?>
            </select><br>
            <!-- <label for="proname">Username</label>
            <input id="proname" name="proname" type="text" placeholder="enter user name"><br> -->
            <label for="propass">Password</label>
            <input id="propass" name="pass" type="password" placeholder="enter password"><br>
            <button type="submit" name="form-submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST['form-submit'])) {
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function showForm(formId) {
            document.getElementById('stateForm').style.display = 'none';
            document.getElementById('districtForm').style.display = 'none';
            document.getElementById('projectForm').style.display = 'none';

            document.getElementById(formId).style.display = 'block';
        }
    </script>
</body>

</html>