<!DOCTYPE html">
<html>

  <?php
    require_once("includes/class.schools.php");
    require_once("includes/class.counties.php");
    require_once("includes/class.district.php");

    $_school = New School();
    $_counties = New counties();
    $_districts = New District();
  ?>
  <head>
    <title>Evidence Action</title>
    <?php require_once ("includes/meta-link-script.php"); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
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
              <th>county</th>
              <th>district_name</th>
              <th>division_name</th>
              <th>school_name</th>
              <th>school_type</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($_school->getAll() as $key => $value) {
            echo"<tr><td>".$value['county']."</td><td>".$value['district_name']."</td><td>".$value['division_name']."</td><td>".$value['school_name']."</td><td>".$value['school_type']."</td></tr>";
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
      </div>
    </div>
</body>
</html>





