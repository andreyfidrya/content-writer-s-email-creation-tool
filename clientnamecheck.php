<?php 

$client = htmlspecialchars($_POST['msg-client']);

if ($client =='No') {

    $intro = "Hello,
    <p>
    I have 10 years of experience in content writing and I have a passion for what I do. I have written articles and website content on different topics. Some of my website content writing projects are listed in the portfolio. So, you can see the quality of my work. 
    <p>
    I always write content for clients on my own and never outsource work to other content creators!";

}else
{
$intro = "Hello $client,
<p>
I have 10 years of experience in content writing and I have a passion for what I do. I have written articles and website content on different topics. Some of my website content writing projects are listed in the portfolio. So, you can see the quality of my work. 
<p>
I always write content for clients on my own and never outsource work to other content creators!";
} 

?>