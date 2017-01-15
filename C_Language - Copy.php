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
$_SESSION['examname']="C_Language";

//$sql=mysql_query("SELECT * from $tbl_name;");
//$count=mysql_num_rows($sql);
//$count=mysql_num_rows("SELECT count(*) from $tbl_name")
//echo"Total rows = ".$count."<br/>";
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
<link rel="stylesheet" type="text/css" href="exampagecss.css">
<style>
        div.rambox {
            position:fixed;
            top:50%;
            width:100%;
            height:20%;
            background-color:oldlace;
            opacity:0.9;
        }
    </style>
</head>

<body onLoad="open(), startTime()" bgcolor="efeef1">
<div id="banner">
    <div class="w">
        <h1 class="exam_name"><?php  echo $_SESSION['examname'];   ?></h1><h1 align="right">
        <a class="logout" href="logout.php"><font size="4" align="left" style="font-family: Segoe UI Symbol;">Logout</font></a>
        <font class="time" color="#FF0000" id="txt" face="Segoe UI" size="50px"></font>   
        </h1>
    </div>
</div> 
    <table width="100%" height="1346" border="0" align="left" cellpadding="0" cellspacing="2"  class="bgpaper">
<tr>
            <td height="1342">
              <form method="post" action="anscheck.php" id="timesub">
                    <table class="position" width="85%" border="0" cellspacing="3" cellpadding="4" align="right">
                        <tr class="question">
                            <td colspan="4"><p>1) In C Language, can we write a loop program without using loop statements?</p></td>
                        </tr>
                        <tr>    
                            <td class="high" colspan="2"><input name="one" type="radio" id="one" value="A)Yes"> A)Yes</td>
                            <td class="high" colspan="2"><input name="one" type="radio" id="one" value="B)No">B)No</td>
                            </tr>
                            <tr>
                            <td class="high" colspan="2"><input name="one" type="radio" id="one" value="C)May be">C)May be</td>
                            <td class="high" colspan="2"><input name="one" type="radio" id="one" value="D)Error">D)Error</td>
                        </tr>
                        <tr  class="question">
                            <td colspan="4"><p>2) An Instruction Pipeline is called when the following</p></td>
                        </tr>
                        <tr>    
                            <td class="high" colspan="2"><input name="two" type="radio" id="two" value="A)Register Transfer">A)Register Transfer</td>
                            <td class="high" colspan="2"><input name="two" type="radio" id="two" value="B)Branch">B)Branch</td>
                            </tr>
                            <tr>
                            <td class="high" colspan="2"><input name="two" type="radio" id="two" value="C)Stack Operations">C)Stack Operations</td>
                            <td class="high" colspan="2"><input name="two" type="radio" id="two" value="D)Arthimetic Operations">D)Arthimetic Operations</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4"><p>3) TCP/IP stands for?</p></td>
                        </tr>
                        <tr>    
                            <td class="high" colspan="4"><input name="three" type="radio" id="three" value="A)Transition Control Protocol/Internet Protocol">A)Transition Control Protocol/Internet Protocol</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4"><input name="three" type="radio" id="three" value="B)Transmission Control Protocol/Internet Protocol">B)Transmission Control Protocol/Internet Protocol</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4"><input name="three" type="radio" id="three" value="C)Transfer Control Protocol/Internet Protocol">C)Transfer Control Protocol/Internet Protocol</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="4"><input name="three" type="radio" id="three" value="D)None of the above">D)None of the above</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4"><p>4) C++ was originally Developed by</p></td>
                        </tr>
                        <tr>    
                            <td class="high" colspan="2"><input name="four" type="radio" id="four" value="A)Nicolas Writh">A)Nicolas Writh</td>
                            <td class="high" colspan="2"><input name="four" type="radio" id="four" value="B)Donald Knuth">B)Donaled Knuth</td>
                        </tr>
                        <tr>
                            <td class="high" colspan="2"><input name="four" type="radio" id="four" value="C)Bjarne Stroustrup">C)Bjarne Stroustrup</td>
                            <td class="high" colspan="2"><input name="four" type="radio" id="four" value="D)Ken Thompson">D)Ken Thompson</td>
                        </tr>
                        <tr class="question">
                            <td colspan="4"><p>5) SQL stands for</p></td>
                        </tr>
                        <tr>    
                            <td class="high" colspan="2"><input name="five" type="radio" id="five" value="A)Structured Query Language">A)Structured Query Language</td>
                            <td class="high" colspan="2"><input name="five" type="radio" id="five" value="B)Standarad Query Language">B)Standarad Query Language</td>
                        </tr>
                        <tr>
                        <td class="high" colspan="2"><input name="five" type="radio" id="five" value="C)None of these">C)None of these</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                            
                        <!--<?php /*
                            $todaymin=date("i");
                            $intime="$todaymin";
                            $examtime="01";
                            $outtime=$intime+$examtime;
                            $nowmin=date("i");
                            while($outtime!=$intime)
                            {
                            $todaymin=date("i");
                            $intime="$todaymin";
                            }
                            if($outtime==$intime)
                            {   echo"<script>alert('Wanna have this');</script>";
                            */
                            ?>
            <div class="rambox">
            <form method="post" action="anscheck.php">
            wann have this.<br />
            <input type="submit" name="Submit" value="Submit" class="subbox">
            <input type="reset" value="Clear"  class="subbox">
            </form>
            </div>
                            <?php // }
?>-->
                                <input type="button" name="Submit" value="Submit" class="subbox" onclick="ctime()"></td>
                            <td colspan="2" align="center">
                                <input type="reset" value="Clear"  class="subbox"></td>
                        </tr>
                    </table>
              </form>
            </td>
      </tr>
    </table>
    <img src="\unused\upweb.jpg" alt="not found">
</body>
</html>
<?php echo"</div>";?>