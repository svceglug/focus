<?php include('partials/header.php');
$page_header ="About Us";
$fsmk = "Free Software Movement Karnataka (FSMK) is a non-profit organization working for spreading free software and its ideals. The movement is inspired by software freedom visionaries like Richard Stallman.FSMK ia driven by volunteers from various background like software professionals, government officials, academicians and students.
      In order to build a mass movement for free software, FSMK organizes GNU/Linux User's Groups (GLUG) in Engineering colleges which conducts various technical sessions throughout the academic session.";
$fsmk_header="Free Software, Free Society";
$focus = "FOCUS- Free software and Open SourCe Users-is started as a part of the FSMK by the students of Sri Venkateshwara College of Engineering. We too conduct free session through the academic year and propagate the message of 'Learning and Sharing' amongst us.";
$focus_header ="FOCUS-GLUG";
$free = "Free Software means software that respects users' freedom and community, meaning it allows the user to share, copy, use, study, improve and use the softwares without any restrictions (copy right, patents, etc). Thus , free software is a matter of liberty and not price. We give an opportunity to be a part of this community, spread the joy of sharing and learning.";
$free_header = "Free software, Free as in Freedom";
?>

  <h1 class="heading"><?php echo $page_header; ?></h1>
  <div class="row">
    <div class="column-3-4">
      <h2><?php echo $fsmk_header; ?></h2>
      <br>
      <p align="justify"><?php echo $fsmk; ?></p>
    </div>
    <div class="column-1-4"><center><img src="img/eat.png"> </center> </div>
    <br>
  </div>
  <div class="row">
    <div class="column-1-4"><br><br><center><img src="img/sleep.png"></center></div>
    <div class="column-3-4">
      <h2><?php echo $focus_header; ?></h2>
      <br>
      <p align="justify"><?php echo $focus; ?></p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="column-3-4">
      <h2><?php echo $free_header; ?></h2>
      <br>
      <p align="justify"><?php echo $free; ?></p>
    </div>
    <div class="column-1-4"><br><br><center><img src="img/code.png"></center></div>
  </div>
  <br>

<?php include 'partials/footer.php' ?>
