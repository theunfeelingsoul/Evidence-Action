<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
  <head>
    <title>Evidence Action</title>
    <?php require_once("includes/meta-link-script.php"); ?>
  </head>
  <body>
    <!---------------- header start ------------------------>
    <div class="header">
      <div style="float: left">  <img src="images/logo.png" />  </div>
      <div class="menuLinks">

        <div style="width: 200px; float: left; margin-left: 100px">
          <!--Notifications dashboard-->
          <table>
            <tr>
              <td><b class="notificationTitle">New Messages </b></td>
              <td><b class="notificationTitle"> : </b></td>
              <td><b class="notificationContent"> 0 </b></td>
            </tr>
            <tr>
              <td><b class="notificationTitle">New Emails </b></td>
              <td><b class="notificationTitle"> : </b></td>
              <td><b class="notificationContent"> 1 </b></td>
            </tr>
            <tr>
              <td><b class="notificationTitle">Pending tasks </b></td>
              <td><b class="notificationTitle"> : </b></td>
              <td><b class="notificationContent"> 3 </b></td>
            </tr>
          </table>


        </div>
      </div>
    </div>
    <div class="clearFix"></div>
    <!---------------- content body ------------------------>
    <div class="contentMain" style="margin: 0px auto">
      <!--<div class="contentBody" style="margin: 0px auto">-->
      <center>
        <div class="dashboardMenu1">
          <!-- Administrative data-->
          <a href="adminData.php"><div class="dashboardTile" style="background-color: #202640; width: 20%;" onMouseOut="this.style.backgroundColor = '#202640'" onMouseOver="this.style.backgroundColor = '#1A213F'">
              <font style="text-align: left">Administrative Data</font><br/>
              <img align="middle" src="images/adminData.png" height="100px"/>
            </div></a>
        </div>
      </center>
    </div>
    <div class="clearFix"></div>
    <!---------------- Footer ------------------------>
  </body>
</html>



