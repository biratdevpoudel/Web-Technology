<?php
$db = mysqli_connect('localhost','root','','login_temp')
                or die ('Error connecting to MySQL server.');
var_dump($_POST);

if(isset($_POST['submit_app'])){
    $approval = $_POST['approval'];
    $q1 = "UPDATE reservation SET approval = '{$_POST['approval']}' where res_id = {$_GET['id']}";
    $res = mysqli_query($db,$q1);

    header("Location: MonthEntry.php?".$approval);
}
?>