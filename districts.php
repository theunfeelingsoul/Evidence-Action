<!DOCTYPE html>

<?php
  require_once ("includes/class.district.php");
  $_districts = new District();
?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
  <head>
    <title>Evidence Action</title>
    <?php
    require_once ("includes/meta-link-script.php");
    ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
  </head>
  <body onload="document.getElementById('imgLoading').style.visibility = 'hidden';">
    <!---------------- header start ------------------------>
    <div class="header">
      <div style="float: left">  <img src="images/logo.png" />  </div>
      <div class="menuLinks">
        <?php
        require_once ("includes/menuNav.php");
        ?>
      </div>
    </div>
    <div class="clearFix"></div>
    <!---------------- content body ------------------------>
    <div class="contentMain">
      <div class="contentLeft">
        <?php
        require_once ("includes/menuLeftBar-AdminData.php");
        ?>
      </div>
      <div class="contentBody">
        <!--================================================-->
       <table id="myTable" class="display">
    <thead>
        <tr>
            <th>County</th>
            <th>District</th>
            <!-- <th>Column 2</th> -->
        </tr>
    </thead>
    <tbody>
        <?php 
          foreach ($_districts->getAll() as $key => $value) {
            echo"<tr><td>".$value['county']."</td><td>".$value['district_name']."</td></tr>";
          }
         ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
