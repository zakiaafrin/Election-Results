<?php 
include "partials/header.php";
include "includes/connect.php"; 
?>
<div style="margin-top:80px; margin-left: 50px; margin-right: 50px;">
<h1 style="text-align:center; color: #3affc1;">Results</h1>

<?php 
	$query = "SELECT candidate.id, candidate.name,COUNT(votes.candidateid) as TotalCount FROM candidate join votes on candidate.id = votes.candidateid GROUP BY votes.candidateid ORDER BY TotalCount DESC";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if ($total!=0){

		while($result= mysqli_fetch_assoc($data))
		{
		?>
		<form action="" method="post" style="margin-top:60px; margin-left: 40px; margin-right: 40px;">
			<div class="row space15">
				<div class="col-sm">
					<img src="candidates/<?php echo $result['id']?>.jpg" class="candidate" />
				</div>		
				<div class="col-sm">
					<h5 style="color: #3affc1"><?php echo $result['name']?></h5>
				</div>
				<div class="col-sm"><h5 style="color: #3affc1"> Total : <?php echo $result['TotalCount']?></h5></div>
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
</div>
<?php include "partials/footer.php"; ?>