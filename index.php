<?php if(isset($_POST['submit'])){
  require_once("config/db.php");
  //I'm gonna use mysql_* functions which are depriciated, we just need to grab the data for now. and i'll turn off the warning message.
  ini_set('display_errors', 'false');
  //id
  mysql_connect($db_host,$db_user,$db_pass) or die(mysql_error());
  $name=mysql_escape_string($_POST['name']);
  $usn=mysql_escape_string($_POST['usn']);
  $year=mysql_escape_string($_POST['year']);
  $branch=mysql_escape_string($_POST['branch']);
  $email=mysql_escape_string($_POST['email']);
  $url=mysql_escape_string($_POST['link']);
  $about=mysql_escape_string($_POST['about']);
  $sql="INSERT INTO `nishghvm_focus`.`memberDetails` (`ID`, `name`, `usn`, `year`, `branch`, `email`, `link`, `about`) VALUES (NULL, '$name', '$usn', '$year', '$branch', '$email', '$url', '$about');";
  if(mysql_query($sql)&&move_uploaded_file($_FILES['fullimage']['tmp_name'], 'images/full'.$usn.$_FILES['fullimage']['name'])){
    header("location:index.php?success=Thank you for registration, please share with your friends!");
  }else{
    header("location:index.php?error=seems like you have already registered, please contact admins or maybe your email is used by someone else (in this case please contact admins)");
  }
}else{ ?>
<?php require_once( "partials/header.php"); ?>
<div align="center">
<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin-top:30px;" >

  <?php if(isset($_GET['error'])){ ?><div style="margin-bottom:30px;" class="alert error"><?php echo $_GET['error']; ?></div><?php } ?>
    <?php if(isset($_GET['success'])){ ?><div style="margin-bottom:30px;" class="alert success"><?php echo $_GET['success']; ?></div><?php } ?>
    <h1 class="heading">Hi there!</h1>
    <div class="row">
        <input type="text" class="membership" name="name" required placeholder="FULL NAME" />
    </div>
    <div class="row">
        <input type="text" class="membership" name="usn" required placeholder="USN" />
    </div>
    <div class="row">
      <select name="year" class="membership" required>
        <option value="-1">SELECT A YEAR</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <div class="row">
      <select name="branch" class="membership">
        <option value="-1">SELECT A BRANCH</option>
        <option value="ISE">ISE</option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="CIV">CIV</option>
        <option value="ME">ME</option>
      </select>
    </div>
    <div class="row">
      <input type="email" required class="membership" required name="email" placeholder="EMAIL" />
    </div>
    <div class="row">
      <input type="url" name="link" class="membership" required placeholder="URL" />
    </div>
    <br>
    <div class="row">
      <textarea name="about" cols="30" rows="10" class="membership" required placeholder="TELL US SOMETHING ABOUT YOURSELF"></textarea>
    </div>
    <div class="row" style="margin-top:20px;margin-bottom:20px;">
      Upload a High resolution picture in 8:9 Aspect Ratio <input type="file" name="fullimage" required />
    </div>
    <div class="row" style="margin-bottom:30px;">
      <input type="submit" name="submit" class="membership" value="MAKE ME A MEMBER">
    </div>
</form>
</div>
<?php require_once( "partials/footer.php"); ?>
<?php } ?>
