<?php
 include 'header.inc';

$tbl_name="ansheet";
$userid=$_SESSION['userid'];
$examno=$_SESSION['examno'];
//echo"<script>alert('examno is ".$examno."');</script>";
$examname=$_SESSION['examname'];
$starttime=$_SESSION['starttime'];  
$endtime=$_SESSION['endtime'];      
$examdate=$_SESSION['examdate'];   
$check=mysql_query("SELECT themename FROM themes WHERE userid = '$userid';") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
 echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>"; 
//  echo"Ur name is".$_SESSION['username']."<br/>";
//  echo"Hallticket number is ".$_SESSION['id'];
//  echo"<br/><a href='userhomepage.php'>Click here to fuck back to the exam...!</a><br/>";
//  echo"<br/><a href='logout.php' onclick='phplogout()'><font size='5' align='left'>Logout</font></a>";  
 $qnoarr=$_SESSION['qnoarr'];
    $q=0;
 
?>
<link href="allcss.css" type="text/css" rel="stylesheet">
<link href="tabs.css" type="text/css" rel="stylesheet">
<style>
div.scorebg{
    position:absolute;
    top: 18%;
    right: 10%;
    background-image: url(888x444px.png); 
    background-position: center;
    background-repeat: no-repeat;
    width: 888px;
    height: 444px;
}
div.examname {
            position: absolute;
            top:65%;
            font-family: Aero;
            font-size:35px;
            text-shadow: 0px 0px 10px black;
        }
div.link{
    position: absolute;
    top: 950px;
}
#footer { 
        position: fixed;        
        width: 100%;        
        height: 30px;        
        right: 0;        
        bottom: 0;        
        left: 0;
        border-top: 2px solid #a1cb2f;
        background: #fff;
        -moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
        -webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
        box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
        z-index: 999999;      
}
#footer h1 {
    line-height: 5px;
}
</style> 
<body>
    <div class="centerbox">
        <div class="topbox" height="10%">
          <h1 align='center' style="color: #FF3300;">Result Sheet</h1>
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
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
        <div class="leftbox">
        <?php
        if($userid!=NULL)
  echo"<div id='footer'><div class='w'><a href='scorepage.php' style='text-decoration: none;'>Click here for Answer Sheet</a></div></div>";
?>
              <div class="scorebg">
            <?php
            $marks=0;
            while($q<5)
            {
    $data = mysql_query("select a.userans, q.orians, q.qno, q.question FROM ".$examname."_ans a JOIN ".$examname."_que q where a.userid='$userid' AND a.examno='$examno' AND q.qno=".$qnoarr[$q].";")or die(mysql_error());
    echo"<table border='2' cellspacing='5' cellpadding='5' align='center'>"; 
    while($info = mysql_fetch_array( $data ))   
    {
    if($info['userans']==$info['orians'])
        {
            $marks=$marks+1;
        }
    }
    $q++;
    }
        $totalmarks=05;
        $usermarks=$marks;
        $avg=((($marks/$totalmarks)/100)*100)*100;
                echo"<div class='examname' style='color:white; top:31%; font-size:50px; left: 545px;'>".$marks."</div>";
                echo"<div class='examname' style='color:black; top: 47%; font-size:50px; left: 545px; height: 0px;'>".$totalmarks."</div>";
                echo"<div class='examname' style='color:white; right:45%; width:50%;'><span style='color:#fff200'>Examname: </span><font size='6'>".$examname."</font></div>";
                if($usermarks>=3)
                {   echo"<div class='examname' style='color:darkorange; right:5%;'><span style='color:#fff200'>Status: </span>Passed</div>";        }
                else 
                {   echo"<div class='examname' style='color:red; right:5%;'><span style='color:#fff200'>Status: </span>Failed</div>";               }
                echo"<div class='examname' style='color:white; right:65%; top:75%;'><span style='color:#fff200'>Average: </span>".$avg."</div>";
                $info=mysql_fetch_assoc(mysql_query("select minute(TIMEDIFF('$starttime','$endtime'))as min;"));
                echo"<div class='examname' style='color:white; right:5%; top:75%;'><span style='color:#fff200'>Wrote in: </span>".$info['min']." mins</div>";
    mysql_query("INSERT INTO markslist VALUES('$starttime','$endtime','$examdate','$avg','$userid','$examno','$usermarks','$totalmarks','$examname');") or die(mysql_error());
           /* $today=date("Y-m-d");
           substr("$username",2,3);
           mysql_query("Select collcode from examtime where ") or die(mysql_error());
           if($username=="hradmin173")
           {
               mysql_query("INSERT INTO upuser VALUES('$starttime','$endtime','$examdate','$avg','$userid','$examno','$usermarks','$totalmarks','$examname');") or die(mysql_error());
           }  */
           ?>   
           </div>
           </div>
           </div>
           </div>
</body>
