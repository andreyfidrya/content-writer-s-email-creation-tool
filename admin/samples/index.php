<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" href="../../assets/CSS/admin.css">
    <meta charset='utf-8'>
</head>
<body>
<?php include "../../path.php"; ?>

<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

<div class="posts col-10">
            <div class="button row">
              <a href="<?php echo BASE_URL . "admin/samples/create.php";?>" class="col-2 btn btn-success">Add</a>
            </div>  
        <div class="row title-table">
            <h2>Samples Management</h2>
            <div class="col-2">Niche</div>
            <div class="col-7">Sample URL</div> 
            <div class="col-3">Edit/Delete Samples</div>                       
</div>

</body>