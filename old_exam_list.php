<?php
    //require_once("phpChart_Lite\conf.php");
    include 'header.inc';


    $userid=$_SESSION['userid'];
    $username=$_SESSION['username'];
    $starttime=$_SESSION['starttime'];
    $examdate=$_SESSION['examdate'];
    $check=mysql_query("SELECT themename FROM themes WHERE userid = '$userid';") or die(mysql_error());
    $info=mysql_fetch_assoc($check);
    $_SESSION['themename']=$info['themename'];
    echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>";
    //$examname=$_SESSION['examname'];
    //echo"<font face='Segoe UI' size='16' color='#f15a22'>".$username."</font>";
?>
<html>
    <head>
        <meta name="generator" content="PhpED Version 5.9 (Build 5921)">
        <title></title>
        <link href="oldexamlist.css" type="text/css" rel="stylesheet">
        <link href="allcss.css" type="text/css" rel="stylesheet">
        <link href="tabs.css" type="text/css" rel="stylesheet">
        <style>
        </style>
    </head>
    <body>
        <div class="centerbox">
        <div class="topbox">
            <h1 align='center' style="color: #FF3300;">Check your old exam results</h1>
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
                            <li><a href="about.php">About</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="leftbox">
        <h5 align="left"><?php echo $_SESSION['username']; ?></h5><br/><br/>
        <?php
            //   $pc = new C_PhpChartX(array(array(123, 34, 51, 22, 3)),'simplest_graph');
            // $pc->set_title(array('text'=>'REMO'));
            // $pc->draw();
            $data=mysql_query("select * from markslist where userid='$userid' order by examdate desc, starttime desc;")or die(mysql_error());
            while($info=mysql_fetch_array($data))
            {
                echo"<div class='infield'><input type='radio' id='i' name='u' /><a href='".$info['examname'].".php' style='text-decoration:none;'><font size='15px' face='Segoe UI'>".$info['examname']."</font></a>"; 
                echo"<b>Scored:";
                if($info['usermarks']>=3){    
                    echo"<font size='40px' style='color:green;'>".$info['usermarks']."</font>";     
                }
                else{    
                    echo"<font size='40px' style='color:red;'>".$info['usermarks']."</font>";     
                }
                echo"</font face size='40px'>/</font><font size='8px'>".$info['totalmarks']."</font></b>";                 
                $fortime=mysql_query("select hour(timediff(starttime,curtime())) as agohh, minute(timediff(starttime,curtime())) as agomm, second(timediff(starttime,curtime())) as agoss from markslist where userid='$userid' AND starttime='".$info['starttime']."' order by examdate desc,starttime desc;") or die(mysql_error());
                $fordata=mysql_query("Select datediff('".$info['examdate']."',curdate()) as date from markslist where userid='$userid' AND examdate='".$info['examdate']."' order by examdate desc,starttime desc;") or die(mysql_error());
                $no=mysql_fetch_assoc($fordata);
                $no=$no['date'];
                if($no >0)
                {
                    echo"Check u r date dude. ur in future now.";
                }
                if($no == 0)
                {
                    //write time ago code here;
                    $pre_startitime=$info['starttime'];
                    $pre_endtime=$info['endtime'];
                    $fortimeinfo=mysql_fetch_assoc($fortime);
                    $minmm=$fortimeinfo['minmm'];       $minss=$fortimeinfo['minss'];
                    $agohh=$fortimeinfo['agohh'];       $agomm=$fortimeinfo['agomm'];       $agoss=$fortimeinfo['agoss'];
                    if(($agohh==0)&&($agomm==0)&&($agoss >= 0)&&($agomm <= 59))   
                    {   echo "<dl>A few seconds ago</dl>";                             }
                    if(($agohh==0)&&($agomm == 1))
                    {   echo"<dl>1 minute ago</dl>";                                   }
                    if(($agohh==0)&&($agomm > 1)&&($agomm <= 9))
                    {   echo "<dl>".trim($agomm,"0")." minutes ago</dl>";              }
                    if(($agohh==0)&&($agomm >= 2)&&($agomm <= 59))   
                    {   echo "<dl>".$agomm." minutes ago</dl>";                        }
                    if($agohh == 1)                                  
                    {   echo "<dl>1 hour ago</dl>";                                    }
                    if(($agohh > 1)&&($agohh <= 9))                  
                    {   echo "<dl>".trim($agohh,"0")." hours ago</dl>";                }
                    if(($agohh >= 10)&&($agohh <= 12))               
                    {   echo "<dl>".$agohh." hours ago</dl>";                          }


                }
                /*$formm=mysql_query("select minute(timediff(starttime,endtime)) as minmm, second(timediff(starttime,endtime)) as minss from markslist where userid='1' order by examdate,starttime;") or die(mysql_error());
                while($formminfo=mysql_fetch_array($formm))
                {
                $minmm=$formminfo['minmm'];       $minss=$formminfo['minss'];
                if($minmm>0){   echo"</td><td>min.wrote in ". $minmm ." minutes". $minss." seconds</td>";           }
                if($minmm<0){   echo"</td><td>min.wrote in ". $minss." seconds</td>";           }
                } */
                if($no == -1) echo"<dl>1 day ago</dl>";
                if(($no <= -2)&&($no >= -6))
                {
                    echo "<dl>".trim($no,"-")." days ago</dl>";
                }
                if(($no <= -7)&&($no >= -13))
                {
                    echo "<dl>1 week ago</dl>";
                }
                if(($no <= -14)&&($no >= -20))
                {
                    echo "<dl>2 weeks ago</dl>";   
                }
                if(($no <= -21)&&($no >= -27))
                {
                    echo "<dl>3 weeks ago</dl>";
                }
                //echo"</td><td>wrote at mins".$info['starttime']." & ".$info['endtime'];
                /*while($fortimeinfo=mysql_fetch_array($fortime))
                {$minmm=$fortimeinfo['minmm'];       $minss=$fortimeinfo['minss'];

                } */

                //echo "<td>date:".$info['examdate']."</td>";
                echo"<p>";
                $wrotein=mysql_query("select minute(timediff('".$info['endtime']."','".$info['starttime']."')) as wmin, second(timediff('".$info['endtime']."','".$info['starttime']."')) as wsec;") or die(mysql_error());
                $newrote=mysql_fetch_assoc($wrotein);
                if($newrote['wmin']==00){
                    echo"<font size='4px' align='left'>Wrote in = ".$newrote['wsec']." Sec(s)</font><br/>";
                }
                elseif($newrote['wmin']>=00){
                    echo"<font size='4px' align='left'>Wrote in = ".$newrote['wmin']." Min(s) ".$newrote['wsec']." Sec(s)</font><br/>";
                }
                echo"<font size='4px' align='left'>Date/Time = ".$info['examdate']." ".$info['starttime']."</font>";
                echo"<font size='4px'>Average = ".$info['avg']."</font>";

                if($info['usermarks']>=3){    
                    echo"<font size='4px' style='color:green;'>Status= PASSED</font>";     
                }
                else{    
                    echo"<font size='4px' style='color:red;'>Status= FAILED</font>";     
                }
                $notcorrect=$correct=0;
                $tandf=mysql_query("select * from corrections where userid='$userid' AND ".$info['examno']."=examno;") or die(mysql_error());
                while($tandfinfo=mysql_fetch_array($tandf))
                {
                    if($tandfinfo['result']=='true'){
                        $correct++;
                    }
                    else{
                        $notcorrect++;
                    }
                }
                echo"<font size='4px'>".$correct." right and".$notcorrect." wrong</font>";

                echo"</p></div>";  
            }

        ?>

    </body>
</html>