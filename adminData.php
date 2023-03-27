<!DOCTYPE html">
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

        <h1 style="text-align: center; margin-top: 0px">Administrative Data</h1>

        <center>
        <div class="dashboardMenu1">
          <!-- Counties-->
          <a href="counties.php"><div class="menuTile" style="background-color: #202640; width: 20%" onMouseOut="this.style.backgroundColor = '#202640'" onMouseOver="this.style.backgroundColor = '#1A213F'">
              Counties<br/><br/> 
              <img align="middle" src="images/counties.png" height="100px"/>
            </div> </a>
          <!-- Districts -->
          <a href="districts.php"><div class="menuTile" style="background-color: #C4546A; width:20% " onMouseOut="this.style.backgroundColor = '#C4546A'" onMouseOver="this.style.backgroundColor = '#D85D75'">
              Districts<br/><br/>
              <img align="middle" src="images/districts.png" height="100px"/>
            </div> </a>
          <!-- Divisions-->
          <a href="divisions.php"><div class="menuTile" style="background-color: #2E6889; width: 20%" onMouseOut="this.style.backgroundColor = '#2E6889'" onMouseOver="this.style.backgroundColor = '#24526B'">
              Divisions<br/> <br/>
              <img align="middle" src="images/divisions.png" height="100px"/>
            </div> </a>
          <!-- Schools -->
          <a href="schools.php"><div class="menuTile" style="background-color: #2A4E5C; width: 22%" onMouseOut="this.style.backgroundColor = '#2A4E5C'" onMouseOver="this.style.backgroundColor = '#305968'">
              Schools<br/> <br/>
              <img align="middle" src="images/schools.png" height="100px"/>
            </div> </a>
        </div>
      </center>

        <!--================================================-->
      </div><!--end of content Main -->
    </div>
    <div class="clearFix"></div>
    <!---------------- Footer ------------------------>
    <!--<div class="footer">  </div>-->
 
  </body>
</html>





 
  
  
  
  
  
  
  