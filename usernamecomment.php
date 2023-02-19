<?php

session_start();
?>

<html>
<head>

<link href="Usernamestyle.css" rel="stylesheet">

</head>
<body>

<div class="container">
<p>Welcome <?php echo $_SESSION['emails']; ?></p>
</div>

</body>

</html>