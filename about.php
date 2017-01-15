<?php
 include 'header.inc';
//mysql_query("create temporary table anssheet(userid varbinary(15) not null, userans varchar(100),examno int(5), examname varchar(25), qno int(5));") or die(mysql_error());
   
    $userid=$_SESSION['userid'];
$examname=$_SESSION['examname'];
//  print"<br/> Print Exam no ==".$examno;
//  echo"USer id = ".$userid;
$check=mysql_query("SELECT themename FROM themes WHERE userid = '$userid';") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
 echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>";

    ?>
   <html>
   <head>
<link href="allcss.css" type="text/css" rel="stylesheet">
<link href="tabs.css" type="text/css" rel="stylesheet">
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
          <h1 align='center' style="color: #FF3300;">About Online Exam</h1>
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
          <li><a href="themes.php">Theme</a></li>
          <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <div class="leftbox">
           <h5 align="left">Hai <?php echo $_SESSION['username']; ?>.<br/>All about this Site</h5><br/><br/>   
    <form action="newlastpage.php" method="post">
                <p align="left" style="font-size: 20; font-family: Segoe UI;">
                This site was constructed with a great help of Mr. Mhd Sharfraaz who helped a lot for the develeopment of this site. Without him this would may not be possible for me. I extend a great thanks from the bottom of my heart for him. May the God grace him. While he was the First Person, there was an another super hero, who played a great role in the production of this site. His name was Mr. Rajesh Reddy, a Super Senior of mine and moreover a friend, a brother of me. These both personalities helped a lot for the software development regarding to this site. 
                </p>
                <p align="left" style="font-size: 20; font-family: Segoe UI;">
                I would also like to thank my parents, who supported me and I would vowe my thanks to our beloved teacher <b>"Smt. Ch. Sarojini Garu"</b> who inspired me to create this site. Without her inspiration may be, I wont create this site.
                </p>
        </form>
    </div>
</div>
    
</body>
</html>

