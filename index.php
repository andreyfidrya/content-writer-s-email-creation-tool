<!DOCTYPE html>
<head>
    <title>Email Creation Tool for Content Writers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
    <meta charset='utf-8'>
</head>
<body>

    <?php 
    include "path.php"; 
    include SITE_ROOT . "/app/database/db.php";
    $niches = selectAll('niches');
    $numberofniches = count($niches);    
    ?>

    <div align="right"><a href="<?php echo BASE_URL . "admin/samples/index.php";?>">Admin Panel</a></div>
    <form action='form.php' method='post'>
        
        <h2>Does the job have spam word?(Yes/No)?</h2>
        <input type="radio" name="spamword" value="yes">Yes<br>
        <input type="radio" name="spamword" value="no">No<br>
        <h3>If Yes, what's spam word?</h3>
        <textarea cols='50' rows='1' name='msg-spamword'></textarea><br>

        <h2>Do you know client's name?(Yes/No)?</h2>
        <input type="radio" name="clientname" value="yes">Yes<br>
        <input type="radio" name="clientname" value="no">No<br>
        <h3>If Yes, what's client name?</h3>
        <textarea cols='50' rows='1' name='msg-client'></textarea><br>

        <h2>Do you have writing samples?(Yes/No)?</h2>
        <input type="radio" name="samples" value="yes">Yes<br>
        <input type="radio" name="samples" value="no">No<br>
        <h1>Choose the niche (or several niches) of your writing samples</h1><br>
        <select name="topic[]" multiple size="<?=$numberofniches;?>">
                            <?php foreach ($niches as $key => $niche): ?>
                            <option value="<?=$niche['nichename'];?>"><?=$niche['nichename'];?></option>
        <?php endforeach; ?>
        </select><br>
        <h3>If topic is not included or incorrect, enter the topic</h3> 
        <textarea cols='50' rows='1' name='no-topic'></textarea><br>
        <h2>Does a job require WordPress skills?(Yes/No)?</h2>
        <input type="radio" name="wordpress" value="yes">Yes<br>
        <input type="radio" name="wordpress" value="no">No<br>
        <h2>Does a job require SEO skills(Yes/No)?</h2>
        <input type="radio" name="seo" value="yes">Yes<br>
        <input type="radio" name="seo" value="no">No<br>

        
        <h2>What is the type of a job(Hourly/Fixed/Budget)?</h2>
        <input type="radio" name="jobtype" value="hourly">Hourly<br>
        <input type="radio" name="jobtype" value="fixed">Fixed<br>
        <input type="radio" name="jobtype" value="budget">Budget<br>

        <h3>Provide the price (for Fixed and Budget projects only)</h3> 
        <textarea cols='50' rows='1' name='msg-price'></textarea><br>

        <input class="button" type='submit' value='Submit'>
    </form>
    <!---<a href="http://localhost/php-crash-course-2020-master/cover_letter/content-writer-s-email-creation-tool/index.html">Previous version</a>---> 
</body>