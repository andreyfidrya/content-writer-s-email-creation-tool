<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/CSS/admin.css">
    <meta charset='utf-8'>
</head>
<body>
<?php include "../../path.php"; ?>

<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

<div class="posts col-9">
              
        <div class="row title-table">
            <h1>Add a Niche</h1>
        </div>
        <form action="create.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter Niche Short Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter Niche Full Name</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button name="niche-create" type="submit" class="btn btn-primary">Add a Niche</button>
        </form>

</body>