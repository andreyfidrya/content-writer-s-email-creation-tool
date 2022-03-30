<?php  
        include "../../path.php";
        include "../../app/controllers/niches.php";    
?>
<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/CSS/admin.css">
    <meta charset='utf-8'>
</head>
<body>


<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

<div class="posts col-9">
              
        <div class="row title-table">
            <h1>Edit a Niche</h1>
        </div>
        <form action="edit.php" method="post">
        <input name="id" value="<?=$id;?>" type="hidden">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edit Niche Short Name</label>
                <input name="nicheshortname" value="<?=$NicheShortName;?>" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Edit Niche Full Name</label>
                <input name="nichefullname" value="<?=$NicheFullName;?>" type="text" class="form-control">
            </div>
            <button name="niche-edit" type="submit" class="btn btn-primary">Edit a Niche</button>
        </form>

</body>