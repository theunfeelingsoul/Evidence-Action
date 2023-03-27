
<?php
// $staff_email = $_SESSION['staff_email'];
// $staff_level = $_SESSION['staff_level'];
// $staff_id = $_SESSION['staff_id'];
?>

<h3>Programme Geographies</h3>
<ul>
   <?php  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>
  <a href="counties.php"><li <?php if (strpos($url,'counties') !== false) { echo 'class="linkActive"';} ?> >Counties</li></a>
  <a href="districts.php"><li <?php if (strpos($url,'districts') !== false) { echo 'class="linkActive"';} ?> >Districts</li></a>
  <a href="divisions.php" ><li <?php if (strpos($url,'divisions.php') !== false) { echo 'class="linkActive"';} ?>>Divisions</li></a>
  <a href="schools.php"  ><li <?php if (strpos($url,'schools') !== false) { echo 'class="linkActive"';} ?>  >Schools</li></a>
</ul>
<br/>
<!-- <h3>Contact Details</h3>
<ul>
  <a href="health_contacts.php"><li </?php if (strpos($url,'health_contacts') !== false) { echo 'class="linkActive"';} ?> >MoH</li></a>
  <a href="education_contacts.php"><li </?php if (strpos($url,'education_contacts') !== false) { echo 'class="linkActive"';} ?> >MoEST</li></a>
  <a href="masterTrainers.php"><li </?php if (strpos($url,'masterTrainers') !== false) { echo 'class="linkActive"';} ?> >Master Trainers</li></a>
  <a href="county_contacts.php"><li </?php if (strpos($url,'county_contacts') !== false) { echo 'class="linkActive"';} ?> >County Contacts</li></a>
</ul>
<br/>
<hr/>
<br/>
<br/>
<h3 style="font-size: 14px">Drop-down Settings</h3>
<ul>
  <a href="dropdown_ministry.php"><li </?php if (strpos($url,'minstry_dd') !== false) { echo 'class="linkActive"';} ?> >Ministry</li></a>
</ul>
<br/> -->
