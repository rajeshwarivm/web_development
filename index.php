<?php
require_once './config.php';
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {
  // user already logged in the site
  header("location:".SITE_URL . "home.php");
}
include './header.php';
?>
<div class="container">
  <div class="margin10"></div>
  
  <?php if ($_SESSION["e_msg"] <> "") { ?>
    <div class="alert alert-dismissable alert-danger">
      <button data-dismiss="alert" class="close" type="button">x</button>
      <p><?php echo $_SESSION["e_msg"]; ?></p>
    </div>
  <?php } ?>
  <div class="col-sm-3 col-sm-offset-4 padding20">
    <a class="btn btn-block btn-social btn-linkedin" href="linkedin_login.php">
            <i class="fa fa-linkedin"></i> Login with LinkedIn
          </a>
  </div>
  <div class="col-sm-3 col-sm-offset-4 padding20">
      <form action="math_expression.php" method="post">
          <input type="text" name="math_exp" placeholder="Enter math expression" required="true">
              <input type="submit" name="submit" value="Submit">
      </form>
  </div>
  <div class="col-sm-3 col-sm-offset-4 padding20">
      <form action="read_mail.php" method="post">
          <input type="mail" name="mail" placeholder="Enter mail id" required="true">
          <input type="password" name="password" placeholder="Enter password" required="true">
              <input type="submit" name="submit" value="Submit">
      </form>
  </div>
</div>
<?php
//include './footer.php';
// unset if after it display the error.
$_SESSION["e_msg"] = "";
?>