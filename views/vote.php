
<?php include "partials/header.php";

$query = "SELECT * FROM candidate";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);?>

<div style="margin-top:80px; margin-left: 50px; margin-right: 50px;">
    <h1 style="text-align:center;color: #3affc1;">Candidates</h1>

<?php 
if ($total!=0){

    while($result= mysqli_fetch_assoc($data))
    {
?>

<form action="votesubmit.php" method="post" style="margin-top:80px; margin-left: 170px; margin-right: 170px;">
	<div class="row space15">
		<div class="col-sm">
			<img src="candidates/<?php echo $result['id']?>.jpg" class="candidate" />
		</div>		
		<div class="col-sm">
			<h5 style="color: #3affc1"><?php echo $result['name']?></h5>
		</div>
		<div class="col-sm text-right">
			<input type="radio" name="radio" value="<?php echo $result['id']?>" required>
		</div>
	</div><?php
 }?>
    <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2" style="background-color: #130543; border-color: #3affc1;">Vote!</button>
</form>
    </div>

<?php
}else{ echo "nome";}
?>


