<?php include "partials/header.php"; ?>

<?php if($error) {  ?> 
<div class="alert alert-danger" role="alert"><?= $error ?></div>
<?php } ?>
    <div style="background-color: #130543; color: #ef0170; border-radius: 50px; border:2px solid #3affc1;">
        <h1 style="font-size: 48px; text-align:center; padding:15px;">Techlaunch Election</h1>
    </div>
<div style="margin-top:80px; margin-left: 50px; margin-right: 50px;">
    <h1 style="text-align:center;color: #3affc1;">Student Poll</h1>
    <form action="loginsubmit.php" method="post" style="margin-top:80px; margin-left: 170px; margin-right: 170px;">
        <div class="form-group">
            <label for="studentid" style="color: #3affc1;"><b>Student Id</b></label>
            <input type="number" class="form-control" id="studentid" name="studentid" required />
        </div>
        <button type="submit" class="btn btn-primary mb-2" style="background-color: #130543; border-color: #3affc1;">Enter</button>
        <a href="register.php" style="color: #f8308d;"><b>Register</b></a>
        <a href="results.php" style="color: #f8308d;"><b> | Results</b></a>
    </form>
</div>

<?php include "partials/footer.php"; ?>