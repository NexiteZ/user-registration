<?php
use Phppot\DataSource;
require_once __DIR__ . '/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM tbl_user_comments WHERE id =? ";
$paramType = "i";
$paramValue = array(
    $_POST["comment_id"]
);
$delete = $database->delete($sql, $paramType, $paramValue);
if (! empty($delete)) {
    echo true;
}
?>
