<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Page</title>
    <link rel="shortcut icon" href="/default.png" type="image/x-icon">
</head>

<body>
    <?php
    include './Database/connection.php';
    ?>
    <form method="POST" action="">
        <div id="cdper" style="display:block;">
            <h4 style="text-align:center">Project Login</h4>
            <div class="form-group">
                <label for="text">Login Type:</label>
                <input type="text" name="type" class="form-control" value="Project" readonly="">
            </div>

            <div class="form-group">
                <label for="text">Project Name:</label>
                <select name="project_name" class="form-control">
                    <option selected="" disabled="">Choose project Name</option>
                    <?php
                    $sql = mysqli_query($conn, "SELECT DISTINCT district FROM sector_table");
                    while ($row = mysqli_fetch_array($sql)) {
                        $distc = $row['district'];
                    ?>
                    <!-- <option value="<?php echo $row['district']; ?>"><?php echo $row['district']; ?></option> -->
                        <optgroup label="<?php echo $distc; ?>">
                            <?php
                            $sqla = mysqli_query($conn, "SELECT DISTINCT project_name FROM sector_table WHERE district='$distc'");
                            while ($rowa = mysqli_fetch_array($sqla)) {
                            ?>
                                <option value="<?php echo $rowa['project_name']; ?>"><?php echo $rowa['project_name']; ?></option>
                            <?php } ?>
                        </optgroup>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="text">Login Password:</label>
                <input type="password" name="password" class="form-control" value="" required="" pattern="[^'\x22]+" title="Invalid input">
            </div>
            <button type="submit" name="cdpo_login" class="btn btn-primary">Login</button>
        </div>
    </form>
</body>

</html>