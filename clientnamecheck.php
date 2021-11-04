<?php 

if (empty($_POST['msg-client']) or $_POST['clientname']=='no') {

    $intro = "Hello,
    <p>
    I have 10 years of experience in content writing and I have a passion for what I do. I have written articles and website content on different topics. Some of my website content writing projects are listed in the portfolio. So, you can see the quality of my work. 
    <p>
    I always write content for clients on my own and never outsource work to other content creators!";

}else

{
$client = htmlspecialchars($_POST['msg-client']);
$intro = "Hello $client,
<p>
I have 10 years of experience in content writing and I have a passion for what I do. I have written articles and website content on different topics. Some of my website content writing projects are listed in the portfolio. So, you can see the quality of my work. 
<p>
I always write content for clients on my own and never outsource work to other content creators!";
} 

?>