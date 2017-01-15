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
$_SESSION['examname']="English";


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
                                <p>1) The insects are a great nuisance ------- us.
</p>                                       <!-- page English Prepositions.htm--> 
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="A)for">A)for</td>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="B)with">B)with</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="C)at">C)at</td>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>2) He had to repent -------- what he had done.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="A)of">A)of</td>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="B)over">B)over</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="C)for">C)for</td>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="D)at">D)at</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>3) The mother was anxious -------- the safety of her son.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="A)upon">A)upon</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="B)about">B)about</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="C)for">C)for</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="D)at">D)at</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>4) The reward was not commensurate ---------- the work done by us.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="A)on">A)on</td>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="B)for">B)for</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="C)with">C)with</td>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>5) My cousin has invested a lot of money ---------- farming.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="A)in">A)in</td>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="B)for">B)for</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="C)on">C)on</td>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="D)into">D)into</td>
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