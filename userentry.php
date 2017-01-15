<?php
include 'header.inc';
$userid               =$_SESSION['userid'];
$check                =mysql_query("SELECT themename FROM themes WHERE userid = '" . $_SESSION['userid'] . "';") or die(mysql_error());
$info                 =mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
echo "<body bgcolor='#f0f0f0' link='#0000ff' background='" . $_SESSION['themename'] . ".jpg'></body>";
?>
<?
if(($_POST['fno']<$_POST['lno'])&&($_POST['collcode']!=NULL))
{
    $thedate=$_POST['dyear']."-".$_POST['dmon']."-".$_POST['dday'];
    mysql_query("Insert into examtime values('$thedate','00:00:00'," . $_POST['fno'] . "," . $_POST['lno'] . ",'00'," . $_POST['year'] . ",'$_POST[branch]'," . $_POST['collcode'].",'$_POST[eng]','$_POST[gk]','$_SESSION[userid]');") or die(mysql_error());
    echo"<script>alert('Details Submitted Successfully.');</script>";
    //$pinretrive=mysql_query("select * from examtime where collcode=".$_POST['collcode'].";") or die(mysql_error());
    //$pin=mysql_fetch_assoc($pinretrive);
    $no=$_POST['fno'];   
  while($no<=$_POST['lno'])
  {
            if($no>9)
            {
                $newpin=trim("$_POST[year]",20).$_POST['collcode']."-".$_POST['branch']."-0".$no;
            }
            else
            {
                $newpin=trim("$_POST[year]",20).$_POST['collcode']."-".$_POST['branch']."-00".$no;             
            }
            $newpwd=$newpin;
            $newpwd = md5($newpwd);
            if (!get_magic_quotes_gpc()) 
            {      
                $newpwd = addslashes($newpwd);
                $newpin= addslashes($newpin);
            }
            $uniqid=uniqid();
            mysql_query("insert into users values('".$uniqid."','".$newpin."','".$newpwd."');")or die(mysql_error());
            mysql_query("insert into themes values('".$uniqid."','bgpat005');");
            $no++;
  }
   
}
else
{
    echo"<script>alert('hai fucky');</script>";
}
//echo "<script>alert('Okay,day=". $thedate.", Year=" . $_POST['year'] . " & collcode is " . $_POST['collcode'] . " & gruop is ". $_POST['group'] . " Range is " . $_POST['fno'] . " & " . $_POST['lno'] . " Finally Sub is " . $_POST['gk']. "');</script>";
?>


<html>
<head>
  <link href="allcss.css" type="text/css" rel="stylesheet">
  <link href="tabs.css" type="text/css" rel="stylesheet">
  <title>Enter Students</title>
</head>
<body>
  <div class="centerbox">
    <div class="topbox">
      <h1 align='center' style="color: #FF3300;">Student Entry</h1>
    </div>
    <hr>
    <div class="rightbox">
      <div class="tabs">
        <div class="tab">
          <input type="radio" id="tab-1" name="tab-group-1" align=
          "right"> <label for="tab-1"><img src="power.png" alt=
          "\|/" width="40px" height="40px" align="right" style=
          "text-shadow: 0px 0px 85px black;"></label>

          <div class="tab close-tab">
            <input type="radio" id="tab-close" name="tab-group-1"
            align="right"> <label for="tab-close"><img src=
            "power.png" alt="\|/" width="40px" height="40px" align=
            "right" style=
            "text-shadow: 0px 0px 85px black;"></label>
          </div>

          <div class="content" style="background-color: gray;">
            <ul>
              <li><a href="themes.php">Theme</a></li>

              <li><a href="about.php">About</a></li>

              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="leftbox">
      <h5 align="left">Enter ur Students</h5>

      <div>
        <form action="userentry.php" method="post">
          <br>
          <br>
          <br>
          <br>
          Select Examdate: 
          <select id="dyear" name="dyear">
            <option>
              2014
            </option>
            <option>
              2015
            </option>
          </select>/ 
          <select id="dmon" name="dmon">
            <option>
              1
            </option>
            <option>
              2
            </option>
            <option>
              3
            </option>
            <option>
              4
            </option>
            <option>
              5
            </option>
            <option>
              6
            </option>
            <option>
              7
            </option>
            <option>
              8
            </option>
            <option>
              9
            </option>
            <option>
              10
            </option>
            <option>
              11
            </option>
            <option>
              12
            </option>
          </select>/
          <select id="dday" name="dday">
            <option>
              1
            </option>
            <option>
              2
            </option>
            <option>
              3
            </option>
            <option>
              4
            </option>
            <option>
              5
            </option>
            <option>
              6
            </option>
            <option>
              7
            </option>
            <option>
              8
            </option>
            <option>
              9
            </option>
            <option>
              10
            </option>
            <option>
              11
            </option>
            <option>
              12
            </option>
            <option>
              13
            </option>
            <option>
              14
            </option>
            <option>
              15
            </option>
            <option>
              16
            </option>
            <option>
              17
            </option>
            <option>
              18
            </option>
            <option>
              19
            </option>
            <option>
              20
            </option>
            <option>
              21
            </option>
            <option>
              22
            </option>
            <option>
              23
            </option>
            <option>
              24
            </option>
            <option>
              25
            </option>
            <option>
              26
            </option>
            <option>
              27
            </option>
            <option>
              28
            </option>
            <option>
              29
            </option>
            <option>
              30
            </option>
          </select>
          </select>
           Enter Student Year : 
           <select id="year" name=
          "year">
            <option name="year">
              2011
            </option>

            <option name="year">
              2012
            </option>

            <option name="year">
              2013
            </option>
          </select> College Code: <input type="text" maxlength="5" size="3" name="collcode"><br>
          Enter Student Group: 
          <select id="branch" name="branch">
            <option>
              CM
            </option>
            <option>
              EC
            </option>
          </select><br>
          Set Range:<br>
          Enter First Range: 
          <select id="fno" name="fno">
            <option name="fno">
              1
            </option>

            <option name="fno">
              2
            </option>

            <option name="fno">
              3
            </option>

            <option name="fno">
              4
            </option>

            <option name="fno">
              5
            </option>

            <option name="fno">
              6
            </option>

            <option name="fno">
              7
            </option>

            <option name="fno">
              8
            </option>

            <option name="fno">
              9
            </option>

            <option name="fno">
              10
            </option>
          </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter First
          Range: 
          <select id="lno" name="lno">
            <option name="lno">
              1
            </option>

            <option name="lno">
              2
            </option>

            <option name="lno">
              3
            </option>

            <option name="lno">
              4
            </option>

            <option name="lno">
              5
            </option>

            <option name="lno">
              6
            </option>

            <option name="lno">
              7
            </option>

            <option name="lno">
              8
            </option>

            <option name="lno">
              9
            </option>

            <option name="lno">
              10
            </option>
          </select><br>
          Select Subjects:<br>
          <input type="checkbox" name="gk">GK paper<br>
          <input type="checkbox" name="eng">English paper<br>
          <input type="submit">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
