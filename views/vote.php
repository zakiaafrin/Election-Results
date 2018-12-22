
<?php include "partials/header.php";

$query = "SELECT * FROM candidate";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);?>

<h1>Candidates</h1>

<?php 
if ($total!=0){

    while($result= mysqli_fetch_assoc($data))
    {
?>

<form action="votesubmit.php" method="post">
	<div class="row space15">
		<div class="col-sm">
			<img src="candidates/<?php echo $result['id']?>.jpg" class="candidate" />
		</div>		
		<div class="col-sm">
			<p><?php echo $result['name']?></p>
		</div>
		<div class="col-sm text-right">
			<input type="radio" name="radio" value="<?php echo $result['id']?>" required>
		</div>
	</div><?php
 }?>
    <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Vote!</button>
</form>
<?php
}else{ echo "nome";}
?>


