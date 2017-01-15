<?php
 include 'header.inc';
    $newtime=mysql_query("SELECT CURTIME() as time;"); 
   $time=mysql_fetch_assoc($newtime);
        $starttime=$time['time'];
    $newdate=mysql_query("SELECT CURDATE() as date;");
    $date=mysql_fetch_assoc($newdate);
       $examdate=$date['date'];
echo"Ur name is".$_SESSION['username'];
$_SESSION['starttime']=$starttime;
$_SESSION['examdate']=$examdate;
$_SESSION['examname']="Aptitude";


//$sql=mysql_query("SELECT * from $tbl_name;");
//$count=mysql_num_rows($sql);
//$count=mysql_num_rows("SELECT count(*) from $tbl_name")
//echo"Total rows = ".$count."";
  
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
                                <p>1) A man takes 5 hours 45 min. in walking to a certain place and riding back. He would have gained 2 hours by riding both ways. The time he would take to walk both ways is :
</p>                                       <!-- page realapt1.htm--> 
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="A)11 hrs 45 min">A) 11 hrs 45 min</td>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="B)3 hrs 45 min">B)3 hrs 45 min</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="C)4 hrs 55 min">C)4 hrs 55 min</td>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>2) Two trains start from P and Q respectively and travel towards each other at a speed of 50 km/hr and 40 km/hr respectively. By the time they meet, the first train has travelled 100 km more than the second. The distance between P and Q is :</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="A)500 km">A)500 km</td>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="B)630 km">B)630 km</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="C)900km">C)900km</td>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="D)660">D)660km</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>3) Two trains starting at the same time from two stations 200 km apart and going in opposite directions cross each other at a distance of 110 km from one of the stations. What is the ratio of their speeds ?</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="A)11:9">A)11:9</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="B)11:20">B)11:20</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="C)09:20">C)09:20</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="D)15:25)">D)15:25</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>4) A and B walk around a circular track. They start at 9 a.m. from the same point in the opposite directions. A and B walk at a speed of 2 rounds per hour and 3 rounds per hour respectively. How many times shall they cross each other before 9.30 a.m.?</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="A)8">A)8</td>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="B)7">B)7</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="C)6">C)6</td>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>5)Two guns were fired from the same place at an interval of 10 minutes and 30 seconds, but a person in the train approaching the place hears the second shot 10 minutes after the first. The speed of the trian (in km/hr), supposing that speed travels at 330 metres per second, is: </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="A)50.4">A)50.4</td>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="B)111.80">B)111.80</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="C)19.88">C)19.88</td>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="D)59.4">D)59.4</td>
                        </tr>
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