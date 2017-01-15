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
$_SESSION['examname']="Computer_GK";


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
                                <p>1) BCD stands for
</p>                                       <!-- page 0163.htm--> 
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="A)bits coded decimal">A)bits coded decimal</td>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="B)binary coded decimal">B)binary coded decimal</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="C)binary coded data">C)binary coded data</td>
                            <td class="high" colspan="2">
                                <input id="one" name="one" type="radio" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>2) Punched cards were first introduced by</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="A)Jacquard">A)Jacquard</td>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="B)Pascal">B)Pascal</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="C)Hollerith">C)Hollerith</td>
                            <td class="high" colspan="2">
                                <input id="two" name="two" type="radio" value="D)Powers">D)Powers</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>3) One byte is equivalent to</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="A)8 bit">A)8 bit</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="B)16 bit">B)16 bit</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="C)32 bit">C)32 bit</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4">
                                <input id="three" name="three" type="radio" value="D)64 bit">D)64 bit</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>4) The number of bits in a word is known as</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="A)word count">A)word count</td>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="B)buffer">B)buffer</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="C)bytes">C)bytes</td>
                            <td class="high" colspan="2">
                                <input id="four" name="four" type="radio" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4">
                                <p>5) To move forward through the tabs</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="A)SHIFT+TAB">A)SHIFT+TAB</td>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="B)CTRL+SHIFT+TAB">B)CTRL+SHIFT+TAB</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="C)CTRL+TAB">C)CTRL+TAB</td>
                            <td class="high" colspan="2">
                                <input id="five" name="five" type="radio" value="D)None of these">D)None of these</td>
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