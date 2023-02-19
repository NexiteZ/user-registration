<?php
use Phppot\DataSource;
if (isset($_POST['add'])) {
    require_once __DIR__ . '/DataSource.php';
    $database = new DataSource();
    $sql = "INSERT INTO tbl_user_comments (username, message) VALUES (?,?)";
    $paramType = 'ss';
    $paramValue = array(

        $_POST["user"],
        $_POST["message"]
    );
    $lastinsertid = $database->insert($sql, $paramType, $paramValue);

    $sql = "select * from tbl_user_comments where id=? ";
    $paramType = 'i';
    $paramValue = array(
        $lastinsertid
    );

    $result = $database->select($sql, $paramType, $paramValue);

    if (! empty($result)) {
        foreach ($result as $key => $value) {
            ?>
<div id="comment-<?php echo $result[$key]["id"];?>" class="comment-info">
	<div class="outer-comment">
		<div class="comment-info">
			<span class="commet-row-label">from</span> <span class="posted-by"><?php echo $result[$key]["username"];?></span>
			<span class='commet-row-label'>at</span>
		<?php echo $result[$key]["create_at_timestamp"];?>
		</div>
		<div class="comment-text" id="msgdiv"><?php echo $result[$key]["message"];?></div>

		<div class="delete" name="delete" id="delete"
			onclick="deletecomment(<?php echo $result[$key]["id"];?>)">Delete</div>
	</div>
</div>
<?php
        }
    }
}
?>
