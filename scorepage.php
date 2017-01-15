<?php
 include 'header.inc';

$userid=$_SESSION['userid'];
$examno=$_SESSION['examno'];
$examname=$_SESSION['examname']; 
$check=mysql_query("SELECT themename FROM themes WHERE userid = '$userid';") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
 echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>";
 $qnoarr=$_SESSION['qnoarr'];
    $q=0;
 
  ?> 
<!DOCTYPE html>
<head>
    <title></title>
    <link type="text/css" rel="stylesheet" href="allcss.css" />
    <link type="text/css" rel="stylesheet" href="tabs.css" />
</head>
<body>
 <div class="centerbox">
    <div class="topbox">
        <h1 align='center' style="color: #FF3300;">Verify Your Answers</h1>
    </div>
<hr>
    <div class="rightbox">
         <div class="tabs">
    <div class="tab">
        <input type="radio" id="tab-1" name="tab-group-1"  align="right">
        <label for="tab-1"><img src="power.png" alt="\|/" width="40px" height="40px"  align="right" style="text-shadow: 0px 0px 85px black;"></label>
        <div class="tab close-tab">
            <input type="radio" id="tab-close" name="tab-group-1"  align="right">
            <label for="tab-close"><img src="power.png" alt="\|/" width="40px" height="40px" align="right" style="text-shadow: 0px 0px 85px black;"></label>
        </div>

        <div class="content" style="background-color: gray;">
            <ul>
        <li><a href="userhomepage.php">Home</a></li>
        <li><a href="themes.php">Themes</a></li>
        <li><a href="complaint.php">Compliant</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <div class="leftbox">
        <h5 align="left">Check your answers with the original answers, <?php echo $_SESSION['username']; ?></h5><br/>
        <?php
    $marks=0;
        echo"<table border='0' cellspacing='5' cellpadding='5' align='center'>"; 
    $data = mysql_query("select a.userans, q.orians, q.qno, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#0000ff'>Q:".$info['question']."</font></tr></td>";
        if($info['userans']==$info['orians']) //correct answer
        {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color=green size='5'>".$info['userans']."</font></td></tr>";    // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','true')") or die(mysql_error());
            $marks=$marks+1;
            }else                                 //wrong answer
      {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color='#ff0000' size='5'>".$info['userans']."</font></td>";    // user answer in red color
            Print "<td colspan='1'><font size='3'>Correct Answer:</font><font color=green size='5'>".$info['orians']."</font></td></tr>"; // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','false')") or die(mysql_error());
      }
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
       $q++;
       $data = mysql_query("select a.userans, q.orians, q.qno, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#0000ff'>Q:".$info['question']."</font></tr></td>";
        if($info['userans']==$info['orians']) //correct answer
        {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color=green size='5'>".$info['userans']."</font></td></tr>";    // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','true')") or die(mysql_error());
            $marks=$marks+1;
            }else                                 //wrong answer
      {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color='#ff0000' size='5'>".$info['userans']."</font></td>";    // user answer in red color
            Print "<td colspan='1'><font size='3'>Correct Answer:</font><font color=green size='5'>".$info['orians']."</font></td></tr>"; // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','false')") or die(mysql_error());
      }
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
       $q++;
       $data = mysql_query("select a.userans, q.orians, q.qno, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#0000ff'>Q:".$info['question']."</font></tr></td>";
        if($info['userans']==$info['orians']) //correct answer
        {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color=green size='5'>".$info['userans']."</font></td></tr>";    // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','true')") or die(mysql_error());
            $marks=$marks+1;
            }else                                 //wrong answer
      {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color='#ff0000' size='5'>".$info['userans']."</font></td>";    // user answer in red color
            Print "<td colspan='1'><font size='3'>Correct Answer:</font><font color=green size='5'>".$info['orians']."</font></td></tr>"; // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','false')") or die(mysql_error());
      }
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
       $q++;
       $data = mysql_query("select a.userans, q.orians, q.qno, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#0000ff'>Q:".$info['question']."</font></tr></td>";
        if($info['userans']==$info['orians']) //correct answer
        {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color=green size='5'>".$info['userans']."</font></td></tr>";    // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','true')") or die(mysql_error());
            $marks=$marks+1;
            }else                                 //wrong answer
      {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color='#ff0000' size='5'>".$info['userans']."</font></td>";    // user answer in red color
            Print "<td colspan='1'><font size='3'>Correct Answer:</font><font color=green size='5'>".$info['orians']."</font></td></tr>"; // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','false')") or die(mysql_error());
      }
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
       $q++;
       $data = mysql_query("select a.userans, q.orians, q.qno, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#0000ff'>Q:".$info['question']."</font></tr></td>";
        if($info['userans']==$info['orians']) //correct answer
        {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color=green size='5'>".$info['userans']."</font></td></tr>";    // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','true')") or die(mysql_error());
            $marks=$marks+1;
            }else                                 //wrong answer
      {
            Print "<tr><td colspan='1'><font size='3'>Your Answer:</font><font color='#ff0000' size='5'>".$info['userans']."</font></td>";    // user answer in red color
            Print "<td colspan='1'><font size='3'>Correct Answer:</font><font color=green size='5'>".$info['orians']."</font></td></tr>"; // user answer in green color
            mysql_query("INSERT into corrections VALUES('$userid','$examname','$examno','".$info['qno']."','false')") or die(mysql_error());
      }
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
       $q++;
    print"</table>";
?>
    </div>
</body>
</html>
 
   
   
   
  
   
   
   
   
   
   
   
