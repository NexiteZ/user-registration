<?php
use Phppot\DataSource;
include('functions.php');
?>
<html>
<head>
<title>Add-Delete-comment</title>
<link rel="stylesheet" type="text/css" href="assets/css/comment.css">
<link rel="stylesheet" type="text/css" href="button.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="assets/js/comment.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.error {
    font-size: 0.9em;
    color: #FF0000;
}
</style>
</head>
<body>
     <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong><?php include 'usernamecomment.php';?></strong>
          </a>
            <div class="pull-right">
                <?php
                if(isset($_POST['Logout'])){
                    session_destroy();
                    header('location:login.php');
                }
    
                ?>
                <form method="post">
                    <a href="logincomment.php" name="logout" class="btn btn-danger my-2">Back</a>
                </form>
    </header>
    <h1>Post your comment</h1>
    <div class="comment-form-container">
        <form action="" id="frmComment" method="post">
            <div class="input-row">
                <div class="label">
                    Name: <span id="name-info"></span>
                </div>
                <input class="input-field" id="name" type="text"
                    name="user">
            </div>
            <div class="input-row">
                <div class="label">
                    Message: <span id="message-info"></span>
                </div>
                <textarea class="input-field" id="message"
                    name="message" rows="4"></textarea>
            </div>
            <div>
                <input type="hidden" name="add" value="post" />
                <button type="submit" name="submit" id="submitButton"
                    class="btn-submit">Publish</button>
                <img src="LoaderIcon.gif" id="loader" />
            </div>
        </form>
    </div>

<?php
require_once __DIR__ . '/DataSource.php';
$database = new DataSource();
$sql = "SELECT * from tbl_user_comments ORDER BY id DESC";
$result = $database->select($sql);
?>
<h2>All comments</h2>
<?php
$count = $database->getRecordCount($sql);
if ($count > 0) {
    ?>
        <div id="comment-count">
        <span id="count-number"><?php echo $count;?></span> Comment(s)
    </div>
<?php } ?>
<div id="response">
<?php
if (! empty($result)) {
    foreach ($result as $key => $value) {
        ?>
     <div id="comment-<?php echo $result[$key]["id"];?>"
            class="comment-info">
            <div class="outer-comment">
                <div class="comment-info">
                    <span class="commet-row-label">from</span> <span
                        class="posted-by"><?php echo $result[$key]["username"];?></span>
                    <span class='commet-row-label'>at</span>
				<?php echo $result[$key]["create_at_timestamp"];?>
				</div>
                <div class="comment-text"
                    id="msgdiv-<?php echo $result[$key]["id"];?>">
				<?php echo $result[$key]["message"];?></div>
            </div>
        </div>
<?php
    }
}
?>
</div>
</body>
</html>