<?php
include_once('./lib.php');
extract($_POST);

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
	$rows = query("SELECT * FROM usertable WHERE companyname like '%".$valueToSearch."%' OR name like '%".$valueToSearch."%'")->fetchAll(PDO::FETCH_OBJ);
    
}
 else {
    $rows = query("SELECT * FROM usertable")->fetchAll(PDO::FETCH_OBJ);
}

?>