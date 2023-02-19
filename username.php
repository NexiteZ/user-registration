<?php

session_start();

?>

<html>
<head>

<link href="Usernamestyle.css" rel="stylesheet">

</head>
<body>

<div class="container">
<h1>Welcome <?php echo $_SESSION['emails']; ?></h1>
</div>

</body>

</html>