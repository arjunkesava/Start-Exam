<?php
  include 'header.inc';
$username=$_SESSION['username'];
$userid               =$_SESSION['userid'];
$check                =mysql_query("SELECT themename FROM themes WHERE userid = '" . $_SESSION['userid'] . "';") or die(mysql_error());
$info                 =mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
echo "<body bgcolor='#f0f0f0' link='#0000ff' background='" . $_SESSION['themename'] . ".jpg'></body>";
?>
<html>
<head>
  <link href="allcss.css" type="text/css" rel="stylesheet">
  <link href="tabs.css" type="text/css" rel="stylesheet">
  <style>
  table.bottomBorder { border-collapse:collapse; }
table.bottomBorder td, table.bottomBorder th { 
    border-bottom:1px solid blue; padding:5px; 
    background-color: white;
}
  </style>
  <title>Enter Students</title>
</head>
<body>
  <div class="centerbox">
    <div class="topbox">
      <h1 align='center' style="color: #FF3300;">Report Cards</h1>
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
      <h5 align="left">Here`s your student details:<br /></h5>
      <div>      <br /><br />
      <?
            //$username="hradmin173";
            $len=strlen("$username");
            $ucollcode=substr("$username",($len-3),$len);
      if($ucollcode=="173")
      {
           ?>
           <table class="bottomBorder" align="center" style="font-size: 22px;">
           <tr>                             
           <th>S. No</th><th>Pin No</th><th>Gk</th><th>English</th><th>Avg</th><th>Total</th><th>Rank</th>
           </tr>
           <?php
           $sno=1;
           $today=date("Y-m-d");
           $exam=mysql_query("select * from examtime where inchargeid='$_SESSION[userid]' and date='$today';") or die(mysql_error());
           while($einfo=mysql_fetch_array($exam))
           {
            $collcode=$einfo['collcode'];    $branch=$einfo['branch'];    $fno=$einfo['fno'];  $lno=$einfo['lno'];
            $no=$fno;
            $re=trim("$einfo[year]",20); 
            while($no<=$lno)
            {
            if($no>9)
                $newpin=$re.$collcode."-".$branch."-0".$no;
            else
                $newpin=$re.$collcode."-".$branch."-00".$no;    
            $useruserid=mysql_query("select userid from users where username='$newpin';")or die(mysql_error());
            $useridinfo=mysql_fetch_assoc($useruserid);
            
            $minfo=mysql_query("select * from markslist where userid='$useridinfo[userid]';") or die(mysql_error());
            $mdata=mysql_fetch_assoc($minfo);
            
            echo"<tr><td>".$sno."</td><td>".$newpin."</td><td>".$mdata['examname']."</td><td>".$mdata['examname']."</td><td>".$mdata['avg']."</td><td>".$mdata['usermarks']."/".$mdata['totalmarks']."</td><td>".$mdata['examdate']."</td></tr>";           
            $no++;
            }
            }
           
           
 
            ?>           
           </table>
           <?
      }
      ?>
      </div>
    </div>
  </div>
</body>
</html>