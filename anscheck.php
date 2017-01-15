<?php
 include 'header.inc';
//mysql_query("create temporary table anssheet(userid varbinary(15) not null, userans varchar(100),examno int(5), examname varchar(25), qno int(5));") or die(mysql_error());
   
   $retime=mysql_query("SELECT CURTIME() as time;");
   while($info=mysql_fetch_array($retime))
    {
        $endtime=$info['time'];
        //  echo"time = ".$endtime;
    }
    
$_SESSION['endtime']=$endtime;
$userid=$_SESSION['userid'];
$examname=$_SESSION['examname'];
$data=mysql_query("select MAX(examno) from ".$examname."_ans;") or die(mysql_error());
$noexam=mysql_fetch_assoc($data);
$examno=$noexam['MAX(examno)']; 
    //  print"<br/> Print Exam no ==".$examno;
    
$examno++;
$_SESSION['examno']=$examno;
//  echo"USer id = ".$userid;
$check=mysql_query("SELECT themename FROM themes WHERE userid = '$userid';") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
 echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>";


 $qnoarr=$_SESSION['qnoarr'];
    $q=0;

//user entry answer through form POST method.
$ua1=$_POST['one'];
$ua2=$_POST['two'];
$ua3=$_POST['three']; 
$ua4=$_POST['four'];
$ua5=$_POST['five'];
$ua6=$_POST['six'];
/*$ua1=$_POST['one']; 
$ua2=$_POST['two'];
$ua3=$_POST['three']; 
$ua4=$_POST['four'];
$ua5=$_POST['five'];*/
     //echo"<script>alert('ua1=". $ual ." ua2=". $ua2 ." The muain ua3=". $ua3 ." ua4=". $ua4 ." ua5= ". $ua5 ." The end ua6=". $ua6 ."');</script>";
$userans=array("$ua1","$ua2","$ua3","$ua4","$ua5");
$x=0;
/*
if($examname="c_language")
{   
$c_question=array("In C Language, can we write a loop program without using loop statements?","An Instruction Pipeline is called when the following","TCP/IP stands for?","WhenC++ was originally Developed by","SQL stands for");
$c_orians=array("Yes","Arthimetic Operations","Transmission Control Protocol/Internet Protocol","Bjarne Stroustrup","Structured Query Language");
    while($x<5)//user answers entering into database.
    {
        mysql_query("INSERT INTO $tbl_name VALUES('$userid', '$userans[$x]', '$c_orians[$x]','$c_question[$x]','$examno');") or die(mysql_error());
        //$userid++;
        $x++;
    }
}*/
//if($examname="Information Technology")
//{   
//$it_question=array("1) SMPS stands for ?","2)Floppy Disks are of 3 1/4 inches in size, and hold","3)IDE Stands for?","4)Plotter is an","5)The space area where you type, edit, and format your document in MS WORD is");
//$it_orians=array("A)Switch Mode Power Supply","A)1.45Mb","C)Integrated Drive Electronics","B)Output Device","A)White Space Area");
    while($x<5)//user answers entering into database.
    {
        mysql_query("INSERT INTO ".$examname."_ans VALUES('$userid', '$userans[$x]','$examno','$examname','$x');") or die(mysql_error());
        //$userid++;
        $x++;
    }
//}

 //$count=mysql_query("Select * from $tbl_name;");
 // echo"Total rows = ".mysql_num_rows($count);

   /*$sql="INSERT INTO $tbl_name(userid, userans, orians)VALUES('$userid', '$two', '$otwo')"; 
$result=mysql_query($sql);
if($result) echo"success";
else echo"fail";
$userid++;*/

// echo"Ur name is".$_SESSION['username']."<br/>";
//  echo"Hallticket number is ".$_SESSION['id'];
     
if (isset($_GET["date"]))
 {
     $checktime=$_GET["date"];
     echo "current date is ".$checktime;
echo "<script>alert('Just wanted to say $checktime!');</script>"; 
 }
 //mysql_query("Update markslist SET endtime='$time' where endtime='00:00:00';") or die(mysql_error());
    ?>
   <html>
   <head>
   <!--<script type="text/javascript">
   function onsubmit()
   {
   check=confirm("Are u sure! you want to continue");
   if(check==true)
   {
       return;
   }
   else
   {
       alert("writ redirect code here");
   }
   }
   </script>-->
   <link href="allcss.css" rel="stylesheet" type="text/css"> 
   <style>
   font{
   font-family: Segoe UI;
   }
   </style>
   </head>
   <body bgcolor="#f0f0f0">
<div class="centerbox">
    <div class="topbox">
          <h1 align='center' style="color: #FF3300;">Check your answers once</h1>
    </div>
<hr>
    <div class="rightbox">
        <a href="about.php"><h5 align="right" style="left: 83%;">About |</h5></a><a href="logout.php"><h5 align="right">Logout</h5></a>
    </div>
    <div class="leftbox">
           <h5 align="left">Hai <?php echo $_SESSION['username']; ?>.<br/>Please check your answers before you submit your paper.</h5><br/><br/>   
           <?php
    echo"<table border='0' cellspacing='5' cellpadding='4' align='center'>"; 
    
    $data = mysql_query("select a.userans, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#FF0000'>Q:".($q+1).$info['question']."</font></td></tr>"; //$qno++;
    Print"<tr><td>Your Answer:<font size='4' color=green>".$info['userans']."</font></td></tr>"; 
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
    $q++;
    $data = mysql_query("select a.userans, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#FF0000'>Q:".($q+1).")".$info['question']."</font></td></tr>"; //$qno++;
    Print"<tr><td>Your Answer:<font size='4' color=green>".$info['userans']."</font></td></tr>"; 
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
    $q++;
    $data = mysql_query("select a.userans, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#FF0000'>Q:".($q+1).")".$info['question']."</font></td></tr>"; //$qno++;
    Print"<tr><td>Your Answer:<font size='4' color=green>".$info['userans']."</font></td></tr>"; 
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
    $q++;
    $data = mysql_query("select a.userans, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#FF0000'>Q:".($q+1).")".$info['question']."</font></td></tr>"; //$qno++;
    Print"<tr><td>Your Answer:<font size='4' color=green>".$info['userans']."</font></td></tr>"; 
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
    $q++;
    $data = mysql_query("select a.userans, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q]." AND a.qno=".$q.";")or die(mysql_error());
    while($info = mysql_fetch_array( $data ))
    {
    print"<tr><td><font size='5' color='#FF0000'>Q:".($q+1).")".$info['question']."</font></td></tr>"; //$qno++;
    Print"<tr><td>Your Answer:<font size='4' color=green>".$info['userans']."</font></td></tr>"; 
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
    print"</table>";   
?>
    <form action="newlastpage.php" method="post">
                <p align="center">
                <input type="submit" id="submit" name="submit"  class="subbox" value="continue" align="center" style="width: 260px; height: 35px" >
                </p>
        </form>
    </div>
</div>
    
</body>
</html>
    <?php
// echo"<br/><a href='logout.php' onclick='phplogout()'><font size='5' align='left'>Logout</font></a>";   

?>
