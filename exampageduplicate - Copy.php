<?php
 include 'header.inc';
    $newtime=mysql_query("SELECT CURTIME() as time;"); 
   $time=mysql_fetch_assoc($newtime);
        $starttime=$time['time'];
    $newdate=mysql_query("SELECT CURDATE() as date;");
    $date=mysql_fetch_assoc($newdate);
       $examdate=$date['date'];
$_SESSION['starttime']=$starttime;
$_SESSION['examdate']=$examdate;
$_SESSION['examname']=" ";

    echo"<div>";?>
<html>
<head>
  <script>
var m=00;
var s=00;
var ms=00;
var mtime = 0;
var stime = 0;
var mstime = 0;
function startTime()
{
    if ((m == 5) && (s == 0) && (ms == 0))
        {
            alert("time up");
            document.getElementById("timesub").submit();
        }
    document.getElementById('txt').innerHTML=m+" :"+s+" :"+ms;
    ms=ms+1;
    if(ms>9)
        {
        s=s+1;
        ms=0;
    }
    if(s>59)
        {
        m=m+1;
        s=0;
    }
    setTimeout(function(){startTime()},100);
} 
function open()
{
    alert("Lets Start");
}
function ctime()
{
    if ((mtime <= 5 ) && (stime == 0) && (mstime == 0))
    {   
        var result=confirm("Still u have Time left. click OK to submit the exam or CANCEL to return back.");    
        if(result == true)
        {
            document.getElementById("timesub").submit();              
            return false;
        }
        else
        {
            return false;
        }
    }
}
</script>
   <!--  <==time_script  -->
<link rel="stylesheet" type="text/css" href="exampagecss.css">
</head>
 <body onload="open(), startTime()" bgcolor="efeef1">
    <div id="banner">
        <div class="w">
            <h1 class="exam_name"><?php  echo $_SESSION['examname'];   ?></h1><h1 align="right">
            <a class="logout" href="logout.php"><font size="4" align="left" style="font-family: Segoe UI Symbol;">Logout</font></a>
            <font class="time" color="#FF0000" id="txt" face="Segoe UI" size="50px"></font>   
            </h1>
        </div>
    </div>

    <table width="100%" height="1346" border="0" align="left" cellpadding="0" cellspacing="2" class="bgpaper">
        <tr>
            <td height="1342">
            <form id="timesub" method="post" action="anscheck.php">
                    <table class="position" width="85%" border="0" cellspacing="3" cellpadding="4" align="right">
                        <tr class="question">
                            <td colspan="4">
                            <p>1)    
                            <?php
                $qdata=mysql_query("Select question from samplequestiontable where qno=0;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo $info['question'];
                }
                            ?>
</p>                                       <!-- page 0163.htm--> 
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                            <?php
                $qdata=mysql_query("Select uans1 from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='one' name='one' type='radio' value='A)".$info['uans1']."'>A)".$info['uans1']."</td>";  }
                            ?>
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select uans2 from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='one' name='one' type='radio' value='A)".$info['uans2']."'>A)".$info['uans2']."</td>";  }
                            ?>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select uans3 from samplequestiontable where qno=0;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='one' name='one' type='radio' value='A)".$info['uans3']."'>A)".$info['uans3']."</td>";  }
                            ?>
                            <td class="high" colspan="2">
                            <?php
                $qdata=mysql_query("Select uans4 from samplequestiontable where qno=0;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='one' name='one' type='radio' value='A)".$info['uans4']."'>A)".$info['uans4']."</td>";  }
                            ?>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <?php
                $qdata=mysql_query("Select question from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo $info['question'];
                }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select uans1 from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='two' name='two' type='radio' value='A)".$info['uans1']."'>A)".$info['uans1']."</td>";  }
                            ?>
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select uans2 from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='two' name='two' type='radio' value='A)".$info['uans2']."'>A)".$info['uans2']."</td>";  }
                            ?>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                            <?php
                $qdata=mysql_query("Select uans3 from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='two' name='two' type='radio' value='A)".$info['uans3']."'>A)".$info['uans3']."</td>";  }
                            ?>  
                            </tr>
                        <tr>                          
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select uans4 from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='two' name='two' type='radio' value='A)".$info['uans4']."'>A)".$info['uans4']."</td>";  }
                ?>  
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>3) <?php
                $qdata=mysql_query("Select question from samplequestiontable where qno=1;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo $info['question'];
                }
                            ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <?php
                $qdata=mysql_query("Select uans1 from samplequestiontable where qno=2;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='three' name='three' type='radio' value='A)".$info['uans1']."'>A)".$info['uans1']."</td>";  }
                ?>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
<?php
                $qdata=mysql_query("Select uans2 from samplequestiontable where qno=2;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='three' name='three' type='radio' value='A)".$info['uans2']."'>A)".$info['uans2']."</td>";  }
                ?>                        
                </tr>
                        <tr>
                            <td class="high" colspan="4">
<?php
                $qdata=mysql_query("Select uans3 from samplequestiontable where qno=2;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='three' name='three' type='radio' value='A)".$info['uans3']."'>A)".$info['uans3']."</td>";  }
                ?>                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                            <?php
                $qdata=mysql_query("Select uans4 from samplequestiontable where qno=2;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo "<input id='three' name='three' type='radio' value='A)".$info['uans4']."'>A)".$info['uans4']."</td>";  }
                ?>                        </tr>
                <tr class="question">
                    <td colspan="4">
                        <p>4)<?php
                $qdata=mysql_query("Select question from samplequestiontable where qno=3;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo $info['question'];
                }
                ?></p> 
                    </td>
                </tr>
                <tr>
                    <td class="high" colspan="2">
                    <?php
                $qdata=mysql_query("Select * from samplequestiontable where qno=3;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo "<input id='four' name='four' type='radio' value='A)".$info['uans1']."'>A)".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='four' name='four' type='radio' value='A)".$info['uans2']."'>A)".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo "<input id='three' name='four' type='radio' value='A)".$info['uans3']."'>A)".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='four' name='four' type='radio' value='A)".$info['uans4']."'>A)".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                    ?>                        
                        <tr class="question">
                            <td colspan="4">
                            
                                <p>4)<?php
                $qdata=mysql_query("Select question from samplequestiontable where qno=4;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo $info['question'];
                }
                            ?></p> 
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select * from samplequestiontable where qno=4;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo "<input id='five' name='five' type='radio' value='A)".$info['uans1']."'>A)".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='five' name='five' type='radio' value='A)".$info['uans2']."'>A)".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo "<input id='five' name='five' type='radio' value='A)".$info['uans3']."'>A)".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='five' name='five' type='radio' value='A)".$info['uans4']."'>A)".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                ?> 
                <tr class="question">
                            <td colspan="4">
                                <p>4)<?php
                $qdata=mysql_query("Select question from samplequestiontable where qno=5;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo $info['question'];
                }
                            ?></p> 
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <?php
                $qdata=mysql_query("Select * from samplequestiontable where qno=5;")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {
                    echo "<input id='six' name='six' type='radio' value='A)".$info['uans1']."'>A)".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='six' name='six' type='radio' value='A)".$info['uans2']."'>A)".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo "<input id='six' name='six' type='radio' value='A)".$info['uans3']."'>A)".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='six' name='six' type='radio' value='A)".$info['uans4']."'>A)".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                ?> 
                        <tr>
                            <td colspan="2" align="center">
                                <input type="button" name="Submit" value="Submit" class="subbox" onclick="ctime()"></td>
                            <td colspan="2" align="center">
                                <input type="reset" value="Clear" class="subbox"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
<?php echo"</div>";?>