<?php 
      include "../../path.php";
      include "../../app/controllers/niches.php";    
?>
<!DOCTYPE html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" href="../../assets/CSS/admin.css">
    <meta charset='utf-8'>
</head>
<body>

<div class="container">
<?php include "../../app/include/sidebar-admin.php"; ?>

<div class="posts col-9">
            <div class="button row">
              <a href="<?php echo BASE_URL . "admin/niches/create.php";?>" class="col-2 btn btn-success">Add</a>
            </div>  
        <div class="row title-table">
            <h2>Niche Management</h2>
            <div class="col-4">Niche Short Name</div>
            <div class="col-5">Niche Full Name</div>
            <div class="col-3">Edit/Delete Niches</div>                      
        </div>
        <?php foreach ($niches as $key => $niche): ?>
        <div class="row post">
            <div class="title col-4"><?=$niche['nicheshortname'];?></div>
            <div class="title col-4"><?=$niche['nichefullname'];?></div>
            <div class="red col-2"><a href="edit.php?id=<?=$niche['id']; ?>">edit</a></div>
            <div class="del col-2"><a href="edit.php?del_id=<?=$niche['id']; ?>">delete</a></div>
        </div>
        <?php endforeach; ?>

</body>