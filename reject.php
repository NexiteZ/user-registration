<html>
<head>
<style>
.mycss{
	color: green;
    border:1px solid #000;
    background: #ccc;
    padding: 10px;
	text-align: center;
}
a {
text-align:center;
display:block;
}

</style>
</head>
<body>
<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query)){
            echo "<p class='mycss'>Account has been rejected.</p>";
        }else{
            echo "<p class='mycss'>Unknown error occured. Please try again.</p>";
        }

?>
<a href="home.php" class="mycss">Back</a>
</body>
</html>