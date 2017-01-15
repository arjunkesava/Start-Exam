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
$_SESSION['examname']="GK";


//$sql=mysql_query("SELECT * from $tbl_name;");
//$count=mysql_num_rows($sql);
//$count=mysql_num_rows("SELECT count(*) from $tbl_name")
//echo"Total rows = ".$count."";
      $qnoarr=$_SESSION['qnoarr'];
    echo"<div>";
    $q=0;
    echo"<script>alert('q array= ".$qnoarr[$q]."');</script>";
    ?>
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
                        <p>1)<?php
                        $uansarray= array();
                        $uansno=0;
                $qdata=mysql_query("Select question from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo $info['question']; }?></p> 
                    </td>
                    </tr>
                    <?php
                $qdata=mysql_query("Select * from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {        
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[0]."' name='".$uansarray[0]."'' type='radio' value='".$info['uans1']."'>".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[0]."'' name='".$uansarray[0]."'' type='radio' value='".$info['uans2']."'>".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[0]."'' name='".$uansarray[0]."'' type='radio' value='".$info['uans3']."'>".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[0]."'' name='".$uansarray[0]."'' type='radio' value='".$info['uans4']."'>".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                    ?>
                    <tr class="question">
                    <td colspan="4">
                        <p>2)<?php
                        $uansno++;
                        $q++;
                $qdata=mysql_query("Select question from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo $info['question']; }?></p> 
                    </td>
                    </tr>
                    <?php
                $qdata=mysql_query("Select * from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {        
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[1]."'' name='".$uansarray[1]."'' type='radio' value='".$info['uans1']."'>".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[1]."'' type='radio' value='".$info['uans2']."'>".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[1]."'' name='".$uansarray[1]."'' type='radio' value='".$info['uans3']."'>".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[1]."'' name='".$uansarray[1]."'' type='radio' value='".$info['uans4']."'>".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                    ?>
                    <tr class="question">
                    <td colspan="4">
                        <p>3)<?php
                        $uansno++;
                        $q++;
                $qdata=mysql_query("Select question from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo $info['question']; }?></p> 
                    </td>
                    </tr>
                    <?php
                $qdata=mysql_query("Select * from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {        
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans1']."'>".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans2']."'>".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans3']."'>".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans4']."'>".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                    ?> <tr class="question">
                    <td colspan="4">
                        <p>4)<?php
                        $uansno++;
                        $q++;
                $qdata=mysql_query("Select question from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo $info['question']; }?></p> 
                    </td>
                    </tr>
                    <?php
                $qdata=mysql_query("Select * from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {        
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans1']."'>".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans2']."'>".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans3']."'>".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans4']."'>".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                    ?>
                    <tr class="question">
                    <td colspan="4">
                        <p>5)<?php
                        $uansno++;
                        $q++;
                $qdata=mysql_query("Select question from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {   echo $info['question']; }?></p> 
                    </td>
                    </tr>
                    <?php
                $qdata=mysql_query("Select * from ".$_SESSION['examname']."_que where qno=".$qnoarr[$q].";")or die(mysql_error());
                while($info=mysql_fetch_array($qdata))
                {        
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans1']."'>".$info['uans1']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans2']."'>".$info['uans2']."</td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans3']."'>".$info['uans3']."</td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='".$uansarray[$uansno]."'' name='".$uansarray[$uansno]."'' type='radio' value='".$info['uans4']."'>".$info['uans4']."</td>";  
                    echo"</tr>";
                }
                    ?>
                        
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