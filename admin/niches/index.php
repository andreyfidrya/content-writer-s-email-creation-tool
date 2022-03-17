<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" href="../../admin.css">
    <meta charset='utf-8'>
</head>
<body>
<?php include "../../path.php"; ?>

<div class="container">
<?php include "../../include/sidebar-admin.php"; ?>

<div class="posts col-9">
            <div class="button row">
              <a href="<?php echo BASE_URL . "admin/niches/create.php";?>" class="col-2 btn btn-success">Add</a>
            </div>  
        <div class="row title-table">
            <h2>Niche Management</h2>
            <div class="col-5">Niches</div> 
            <div class="col-3">Edit/Delete Niches</div>                      
        </div>

</body>