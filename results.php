<?php 
include "partials/header.php";
include "includes/connect.php"; 
?>
<h1>Results</h1>

<?php 
	$query = "SELECT candidate.id, candidate.name,COUNT(votes.candidateid) as TotalCount FROM candidate join votes on candidate.id = votes.candidateid GROUP BY votes.candidateid ORDER BY TotalCount DESC";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if ($total!=0){

		while($result= mysqli_fetch_assoc($data))
		{
		?>
		<form action="" method="post">
			<div class="row space15">
				<div class="col-sm">
					<img src="candidates/<?php echo $result['id']?>.jpg" class="candidate" />
				</div>		
				<div class="col-sm">
					<p><?php echo $result['name']?></p>
				</div>
				<div class="col-sm"><h5> Total : <?php echo $result['TotalCount']?></h5></div>
				<div class="col-sm-11">
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: <?php echo $result['TotalCount']?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>		
			</div>
		</form>
		<?php
 		}
 		?>
	<?php
	} else { 
		echo "No Data Found";
	}
	mysqli_close($conn);
	?>

<?php include "partials/footer.php"; ?>