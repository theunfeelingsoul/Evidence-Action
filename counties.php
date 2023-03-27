<!DOCTYPE>

<?php
require_once ("includes/class.counties.php");
$_counties = new counties();
$allCountiesAsc = $_counties->getAllAsc();
$priv_counties = 5;

?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
  <head>
    <title>Evidence Action</title>
    <?php
    require_once ("includes/meta-link-script.php");
    ?>
  </head>
  <body>
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
        <?php
        //Delete

        if (isset($_GET['deleteid'])) {
          $deleteid = $_GET['deleteid'];

          $_counties->delete($deleteid);

        }

        
        ?>

        <form action="#">
          <td><input type="text" name="search" value="" id="id_search" placeholder="Filter records here" autofocus /></td>
          <b style="margin-left:20%;width: 100px; font-size:1.5em;">Counties List</b>
          <!--<a class="btn-custom-small" href="PHPExcel/AdminData/counties.php">Export to Excel</a>-->
          <a id="export-button" class="btn-custom-small" href="#">Export to Excel</a>
            <a class="btn-custom-small" href="#addCounty">Add County</a>
        </form>
        <br/>
        <div style=" margin-right: 20px">
          <form method="post">
            <table width="100%" border="0" align="center" cellspacing="1" class="table-hover" >
              <thead>
                <tr style="border: 1px solid #B4B5B0;">
                  <th align="Left" width="15%">County</th>
                  <th align="Left" width="15%">County ID</th>
                  <th align="Left" width="15%">Number of <br/> Districts</th>
                  <th align="Left" width="15%">Number of <br/> Divisions</th>
                  <th align="Left" width="15%">Number of <br/> Schools</th>
                  <?php if ($priv_counties >= 1) { ?>
                    <th align="center" width="5%">View</th>
                  <?php } ?>
                  <?php if ($priv_counties >= 3) { ?>
                    <th align="center" width="5%">Edit</th>
                  <?php } ?>
                  <?php if ($priv_counties >= 4) { ?>
                    <th align="center" width="5%">Del</th>
                  <?php } ?>
                </tr>
              </thead>
            </table>
          </form>
        </div>

        <div style="width:100%; height:470px; overflow-x: visible; overflow-y: scroll; ">
          <table width="100%" border="0" frame="box" align="center" cellspacing="1" class="table-hover" id="data-table">
            <tbody>

              <?php
              foreach ($allCountiesAsc as $key => $value) {
                $id = $value['id'];
                $county = $value['county'];
                $county_id = $value['county_id'];
                ?>
                <tr style="border-bottom: 1px solid #B4B5B0;">

                  <td align="left" width="15%"> <?php echo $county; ?>  </td>
                  <td align="left" width="15%"> <?php echo $county_id; ?>  </td>
                  <td align="left" width="15%"> <?php echo $_counties->numberOfDistricts($county);?>  </td>
                  <td align="left" width="15%"> <?php echo $_counties->numberOfDivisions($county);?>  </td>
                  <td align="left" width="15%"> <?php echo $_counties->numberOfSchools($county);?>  </td>

                  <?php if ($priv_counties >= 1) { ?>
                    <td align="center" width="5%">
                      <!--view button-->
                      <form method="POST" action="#viewCounty">
                        <input type="hidden" name="county" value="<?php echo $county; ?>"/>
                        <input type="hidden" name="county_id" value="<?php echo $county_id; ?>"/>
                        <input type="hidden" name="numberOfDistricts" value="<?php echo $_counties->numberOfDistricts($county);?>"/>
                        <input type="hidden" name="numberOfDivisions" value="<?php echo $_counties->numberOfDivisions($county);?>"/>
                        <input type="hidden" name="numberOfSchools" value="<?php echo $_counties->numberOfSchools($county);?> ?>"/>
                        <input type="submit" name="viewDetails" value="" style="background: url(images/icons/view2.png); background-position: center center; border: none; background-repeat: no-repeat; width: 30px"/>
                      </form>
                    </td>
                  <?php } ?>
                  <?php if ($priv_counties >= 3) { ?>
                    <td align="center" width="5%">
                      <!--edit button-->
                      <form method="POST" action="#editCounty">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="hidden" name="county" value="<?php echo $county; ?>"/>
                        <input type="hidden" name="county_id" value="<?php echo $county_id; ?>"/> 
                        <input type="submit" name="editDetails" value="" style="background: url(images/icons/edit2.png); background-position: center center; border: none; background-repeat: no-repeat; width: 30px"/>
                      </form>
                    </td>
                  <?php } ?>
                  <?php if ($priv_counties >= 4) { ?>
                    <td align="center" width="5%" class="exclude-from-export"><a href="javascript:void(0)" onclick='show_confirm(<?php echo $id; ?>)' class="exclude-from-export"><img src="images/icons/delete.png" height="20px"/></a></td>
                  <?php } ?>
                </tr>
              </tbody>
            <?php } ?>
          </table>
        </div>

        <!--================================================-->
      </div><!--end of content Main -->
    </div>
    <div class="clearFix"></div>
    <!---------------- Footer ------------------------>
    <!--<div class="footer">  </div>-->


    <!--filter includes-->
    <script type="text/javascript" src="css/filter-as-you-type/jquery.min.js"></script>
    <script type="text/javascript" src="css/filter-as-you-type/jquery.quicksearch.js"></script>
    <script type="text/javascript">
                  $(function() {
                    $('input#id_search').quicksearch('table tbody tr');
                  });
    </script>
    <!--Delete dialog-->
    <script>
      function show_confirm(deleteid) {
        if (confirm("Are you sure you want to delete?")) {
          location.replace('?deleteid=' + deleteid);
        } else {
          return false;
        }
      }
    </script>

    <script type="text/javascript" src="js/tableExport.js"></script>
    <script type="text/javascript" src="js/jquery.base64.js"></script>
    <script type="text/javascript">
      $('#export-button').click(function() {
        $('#data-table').tableExport({
          type: 'excel',
          escape: 'false',
          consoleLog: 'true',
          ignoreColumn: [6, 7, 8],
          htmlContent: 'true'
        });
      });
    </script>


  </body>
</html>




<!--==== Modal ADD ======-->
<div id="addCounty" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <?php
    if (isset($_POST['submitAddCounty'])) {
      //Post Values to DB
      $county = $_POST['county'];
      $county = addslashes(trim($county));

      $_counties->add($county);
      //log entry
     
       $messageToUser = $county."Added Successfully!";
    }
    ?>
    <form action="" method="post">
      <?php include("includes/messageBox.php"); ?>
      <div >
        <h1 class="form-title">Add County</h1><br/>
      </div>
      <center>
        <div style="padding: 5px; margin: 0px auto">
          <table border="0">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <thead>
              <tr>
                <td>County Name </td><td><input type="text" name="county" class="input_textbox" required/></td>
              </tr>
            </thead>
          </table>
        </div>
      </center>
      <br/><br/>
      <center>
        <div>
          <input type="submit" class="btn-custom" name="submitAddCounty"  value="Add County"/>
          <a href="counties.php" class="btn-custom">Return to County List</a>
        </div>
      </center>
    </form>
  </div>
</div>


<!--==== Modal EDIT ======-->
<div id="editCounty" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <?php
    if (isset($_POST['editDetails'])) {
      $id = $_POST['id'];
      $county = $_POST['county'];
      $county_id = $_POST['county_id'];
    }


    // Edit County
    if (isset($_POST['submitEditCounty'])) {
    
      $id = $_POST['id'];
      $county = $_POST['county'];

      $_counties->update($county,$id);
      
    }
    ?>
    <form action="" method="post">
      <?php include("includes/messageBox.php"); ?>
      <div >
        <h1 class="form-title">Edit County</h1><br/>
      </div>
      <center>
        <div style="padding: 5px; margin: 0px auto">
          <table border="0">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <tr>
              <td>County </td><td><input type="text" name="county" class="input_textbox" value="<?php echo $county; ?>"/></td>
            </tr>
            <tr>
              <td>County ID</td><td><input type="text" name="county_id" class="input_textbox" value="<?php echo $county_id; ?>" readonly/></td>
            </tr>
          </table>
        </div>
      </center>
      <br/><br/>
      <center>
        <div>
          <input type="submit" class="btn-custom" name="submitEditCounty"  value="Edit County Details"/>
          <a href="counties.php" class="btn-custom">Return to County List</a>
        </div>
      </center>
    </form>
  </div>
</div>


<!--===== Modal View ===========================-->
<div id="viewCounty" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <div >
      <h1 class="form-title">View County</h1><br/>
    </div>
    <?php
    if (isset($_POST['viewDetails'])) {
      $county = $_POST['county'];
      $county_id = $_POST['county_id'];
      $numberOfDistricts = $_POST['numberOfDistricts'];
      $numberOfDivisions = $_POST['numberOfDivisions'];
      $numberOfSchools = $_POST['numberOfSchools'];
    }
    ?>
    <center>
      <div style="padding: 5px; margin: 0px auto">
        <table border="0">
          <input type="hidden" name="id" value="<?php echo $id; ?>"/>
          <tr>
            <td>County </td><td><input type="text"  class="input_textbox" value="<?php echo $county; ?>" readonly/></td>
          </tr>
          <tr>
            <td>County ID</td><td><input type="text" class="input_textbox" value="<?php echo $county_id; ?>" readonly /></td>
          </tr>
          <tr>
            <td>Number Of Districts</td><td><input type="text" class="input_textbox" value="<?php echo $numberOfDistricts; ?>" readonly style="width: 50px; text-align: center"/></td>
          </tr>
          <tr>
            <td>Number Of Divisions</td><td><input type="text" class="input_textbox" value="<?php echo $numberOfDivisions; ?>" readonly style="width: 50px; text-align: center"/></td>
          </tr>
          <tr>
            <td>Number Of Schools</td><td><input type="text" class="input_textbox" value="<?php echo $numberOfSchools; ?>" readonly style="width: 50px; text-align: center"/></td>
          </tr>
        </table>
      </div>
    </center>
    <br/>
    <center>
      <div>
        <a href="#close" class="btn-custom" > Close</a>
      </div>
    </center>
  </div>