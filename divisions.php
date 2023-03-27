<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">

  <?php
    require("includes/class.division.php");
    require("includes/class.counties.php");
    $_division = new Division();
    $_counties = new counties();
  ?>

  <head>
    <title>Evidence Action</title>
    <?php require_once ("includes/meta-link-script.php");  ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="css/textext.core.css">
    <link rel="stylesheet" type="text/css" href="css/textext.plugin.tags.css">
    <link rel="stylesheet" type="text/css" href="css/textext.plugin.autocomplete.css">
  </head>
  <body>
    <!---------------- header start ------------------------>
    <div class="header">
      <div style="float: left">  <img src="images/logo.png" />  </div>
      <div class="menuLinks">
        <?php require_once ("includes/menuNav.php"); ?>
      </div>
    </div>
    <div class="clearFix"></div>
    <!---------------- content body ------------------------>
    <div class="contentMain">
    <div class="contentLeft">
      <?php require_once ("includes/menuLeftBar-AdminData.php"); ?>
    </div>
    <div class="contentBody">
    <!--================================================-->

    <table id="myTable" class="display">
      <thead>
        <tr>
          <th>County</th>
          <th>District</th>
          <th>Division</th>
          <th>Division ID</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($_division->getAll() as $key => $value) {
        echo"<tr><td>".$value['county']."</td><td>".$value['district_name']."</td><td>".$value['division_name']."</td><td>".$value['division_id']."</td> </tr>";
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

  </body>
</html>


          


             


