<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" style="background: url('assets/img/bg/slider.png'); background-size: cover;">
<fieldset><br><br>

<!-- Form Name -->
<h2 style="color: white;"><br><br><br>Change Password<br><br><br></h2>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="piCurrPass" style="color: white;">Password</label>
  <div class="col-md-4">
    <input id="piCurrPass" name="piCurrPass" type="password" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="piNewPass" style="color: white;">New Password</label>
  <div class="col-md-4">
    <input id="piNewPass" name="piNewPass" type="password" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="piNewPassRepeat" style="color: white;">Repeat New Password</label>
  <div class="col-md-4">
    <input id="piNewPassRepeat" name="piNewPassRepeat" type="password" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bCancel"></label>
  <div class="col-md-8">
    <button id="bCancel" name="bCancel" class="btn btn-danger" href="changepassEO.php">Cancel</button>
    <button id="bGodkend" name="bGodkend" class="btn btn-success" href="index.php">Change</button>
  </div>
</div>

<br><br><br><br><br><br><br><br><br>
</fieldset>
</form>