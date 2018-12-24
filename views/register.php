<?php include "partials/header.php"; ?>

<?php if($error) { ?>
	<div class="alert alert-danger" role="alert"><?= $error ?></div>
<?php } ?>
<div style="margin-top:80px; margin-left: 50px; margin-right: 50px;">
<h1 style="text-align:center;color: #3affc1;">Register to vote</h1>
<form action="registersubmit.php" method="post" enctype="multipart/form-data" style="margin-top:40px; margin-left: 170px; margin-right: 170px;">
	<div class="form-group">
	<label for="studentid" style="color: #3affc1;"><b>Student Id</b></label>
		<input type="text" class="form-control" id="studentid" name="studentid" required />
	</div>
	<div class="form-group">
		<label for="picture" style="color: #3affc1;"><b>Picture</b></label>
		<input type="file" class="form-control" id="picture" name="picture" required />
	</div>
	<div class="form-group">
		<label for="name" style="color: #3affc1;"><b>Name</b></label>
		<input type="text" class="form-control" id="name" name="name" required />
	</div>
	<div class="form-group">
		<label for="program" style="color: #3affc1;"><b>Program</b></label>
		<select class="custom-select" id="program" name="program" required>
			<option selected>Choose one</option>
			<option value="web">Web Developer</option>
			<option value="cna">CNA</option>
			<option value="cyb">Cyber Security</option>
		</select>
	</div>
	<div class="form-group">
		<label for="platform" style="color: #3affc1;"><b>Platform</b></label>
		<textarea class="form-control" id="platform" name="platform" required></textarea>
	</div>

	<button type="submit" class="btn btn-primary mb-2" style="background-color: #130543; border-color: #3affc1;">Enter</button>
	<a href="login.php" style="color: #f8308d;"><b>Back</b></a>
</form>
</div>
<?php include "partials/footer.php"; ?>