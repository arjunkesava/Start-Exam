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
$_SESSION['examname']="english";

#ACACAC
#404040
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
                    <table class="position" width="85%" border="0" cellspacing="3" cellpadding="6" align="right">
                        <tr class="question">
                    <td colspan="4">
                        <p>1)<?php
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
                    echo "<input id='one1' name='one' type='radio' value='".$info['uans1']."'><label for='one1'>".$info['uans1']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='one2' name='one' type='radio' value='".$info['uans2']."'><label for='one2'>".$info['uans2']."</label></td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='one3' name='one' type='radio' value='".$info['uans3']."'><label for='one3'>".$info['uans3']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='one4' name='one' type='radio' value='".$info['uans4']."'><label for='one4'>".$info['uans4']."</label></td>";  
                    echo"</tr>";
                }
                    ?>
                    <tr class="question">
                    <td colspan="4">
                        <p>2)<?php
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
                    echo "<input id='two1' name='two' type='radio' value='".$info['uans1']."'><label for='two1'>".$info['uans1']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='two2' name='two' type='radio' value='".$info['uans2']."'><label for='two2'>".$info['uans2']."</label></td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='two3' name='two' type='radio' value='".$info['uans3']."'><label for='two3'>".$info['uans3']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='two4' name='two' type='radio' value='".$info['uans4']."'><label for='two4'>".$info['uans4']."</label></td>";  
                    echo"</tr>";
                }
                    ?>
                    <tr class="question">
                    <td colspan="4">
                        <p>3)<?php
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
                    echo "<input id='three1' name='three' type='radio' value='".$info['uans1']."'><label for='three1'>".$info['uans1']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='three2' name='three' type='radio' value='".$info['uans2']."'><label for='three2'>".$info['uans2']."</label></td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='three3' name='three' type='radio' value='".$info['uans3']."'><label for='three3'>".$info['uans3']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='three4' name='three' type='radio' value='".$info['uans4']."'><label for='three4'>".$info['uans4']."</label></td>";  
                    echo"</tr>";
                }
                    ?> <tr class="question">
                    <td colspan="4">
                        <p>4)<?php
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
                    echo "<input id='four1' name='four' type='radio' value='".$info['uans1']."'><label for='four1'>".$info['uans1']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='four2' name='four' type='radio' value='".$info['uans2']."'><label for='four2'>".$info['uans2']."</label></td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='four3' name='four' type='radio' value='".$info['uans3']."'><label for='four3'>".$info['uans3']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='four4' name='four' type='radio' value='".$info['uans4']."'><label for='four4'>".$info['uans4']."</label></td>";  
                    echo"</tr>";
                }
                    ?>
                    <tr class="question">
                    <td colspan="4">
                        <p>5)<?php
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
                    echo "<input id='five1' name='five' type='radio' value='".$info['uans1']."'><label for='five1'>".$info['uans1']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='five2' name='five' type='radio' value='".$info['uans2']."'><label for='five2'>".$info['uans2']."</label></td>";  
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='five3' name='five' type='radio' value='".$info['uans3']."'><label for='five3'>".$info['uans3']."</label></td>";  
                    echo"<td class='high' colspan='2'>";
                    echo "<input id='five4' name='five' type='radio' value='".$info['uans4']."'><label for='five4'>".$info['uans4']."</label></td>";  
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