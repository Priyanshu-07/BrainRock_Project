<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Demo Form</title>
    <?php 
    session_start();
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="./demo.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="district" class="form-label">District</label>
                        <input id="district" type="text" class="form-control" name="district" value="<?php echo $_SESSION['district'] ?>" placeholder="enter your district" disabled/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="project" class="form-label">Project</label>
                        <input id="project" type="text" class="form-control" name="project" value="<?php echo $_SESSION['block'] ?>" placeholder="enter your Project" disabled/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="sector" class="form-label">Sector</label>
                        <input id="sector" type="text" class="form-control" value="<?php echo $_SESSION['gram'] ?>" name="sector" placeholder="enter your sector" disabled/>
                    </div>
                    <div class="form-group mb-3">
                        <label for="village" class="form-label">Village</label>
                        <input id="village" type="text" class="form-control" value="<?php echo $_SESSION['village'] ?>" name="village" placeholder="enter your village" disabled/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="form-submit">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>hello</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>