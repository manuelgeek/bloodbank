<?php
error_reporting(0);
include_once 'db.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{
		$fn = $_POST["fname$i"];
		$ln = $_POST["lname$i"];		
		$sql="INSERT INTO users(first_name,last_name) VALUES('".$fn."','".$ln."')";
		$sql = $MySQLiconn->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple Insert, Update, Delete(CRUD) using PHP & MySQLi</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="http://cleartuts.blogspot.com" title='Programming Blog'>CLEARTUTS</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/CRUD">CRUD</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/PDO">PDO</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/jQuery">jQuery</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered'>
    
    <tr>
    <th>##</th>
    <th>First Name</th>
    <th>Last Name</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="fname<?php echo $i; ?>" placeholder="first name" class='form-control' /></td>
        <td><input type="text" name="lname<?php echo $i; ?>" placeholder="last name" class='form-control' /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="3">
    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button> 

    <a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to index</a>
    
    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>
</div>

</body>
</html>