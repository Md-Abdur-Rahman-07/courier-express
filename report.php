<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>Admin</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/mystyle.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="new.css" rel="stylesheet">

  <style type="text/css">

  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/index.php#"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/index.php#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
    <tbody>
      <tr>
        <td width="780">
          <?php include("header.php"); ?>

        </td>
      </tr>

      <tr>
        <td bgcolor="#FFFFFF">
          <div align="center"> <br>
            <br>
            <table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
              <tbody>
                
                <tr>
                  
                  <td>
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                      <tbody>
                        <tr>
                          <td colspan="2" height="4"></td>
                        </tr>
                        <tr>
                          <td height="18">
                            <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                              <tbody>
                                <tr valign="top">
                                  <td colspan="2" class="headtext13 h4" height="25" valign="middle">Reports</td>
                                  <td height="25" colspan="3">&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                  <td>&nbsp;</td>
                                  <td class="smallpoints" valign="middle" width="41%">&nbsp;</td>
                                  <td width="12%">&nbsp;</td>
                                  <td colspan="2" class="smallpoints" valign="middle">&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                  <td width="11%">
                                    <div align="center"><span class="style110"><img src="images/12258.gif" border="0" height="32" width="30"></span> </div>
                                  </td>
                                  <td class="smallpoints" valign="middle"><a href="datewise-list.php" class="link">Datewise Report </a></td>
                                  <td colspan="3" rowspan="3"><img src="images/imagesform.jpg" width="103" height="95"><a href="http://tracking4web.com/admin/prealertxlreport.php" class="link"></a></td>
                                </tr>
                                <tr valign="top">
                                  <td>
                                    <div align="center"></div>
                                  </td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                  <td>
                                    <div align="center"><span class="style110"><img src="images/12258.gif" border="0" height="32" width="30"></span></div>
                                  </td>
                                  <td class="smallpoints" valign="middle"><a href="delivered-list.php" class="link">Delivered Report </a></td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  
                </tr>
                
              </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
            <tbody>
              <tr>
                <td bgcolor="" height="40" width="476">&nbsp;</td>
                <td bgcolor="" width="304">
                  <div align="right"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

  <!--- Connect -->
  <footer id="connect">
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
          <hr class="light">
          <p>999-999-9999</p>
          <p>email@gmail.com</p>
          <p>Dtreet name</p>
          <p>City, State, 00000</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Our hours</h5>
          <hr class="light">
          <p>Monday: 9am to 5pm</p>
          <p>Saturday: 10am to 6pm</p>
          <p>Sunday closed</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Service Area</h5>
          <hr class="light">
          <p>City, State, 00000</p>
          <p>City, State, 00000</p>
          <p>City, State, 00000</p>
          <p>City, State, 00000</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>