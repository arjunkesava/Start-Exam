<?php
mysql_connect("localhost", "root", "tiger") or die(mysql_error());
mysql_select_db ("exam") or die(mysql_error());

$x=0;
$qiddata=mysql_query("select qid from shuque;") or die(mysql_error());
 while(($x<8)&&($info=mysql_fetch_array($qiddata)))
{   
    $tempqid=$info['qid'];
    echo"<br/>".$tempqid;
    $newarr[$x]=$tempqid;
    $x++;    
}
?><form method='post' action='anscheck.php'>
<table class="position" width="85%" border="2" cellspacing="3" cellpadding="4" align="right">
<?
shuffle($newarr);                            
  $x=0;                 
  //echo "<script>alert('u enterd ".$newarr[$x]."');</script>";
while($x<5)
{
    $data=mysql_query("Select * from shuque where qid='$newarr[$x]';") or die(mysql_error());
    while($maininfo=mysql_fetch_array($data))
    {
    ?>             
     
                    
                        <tr class="question">
                            <td colspan="4"><p><?php echo $maininfo['question']; ?></p></td>
                        </tr>
                        <tr>    
                            <td class="high" colspan="2">
                            <?php echo  "<input name='$newarr[$x]' type='radio' id='$newarr[$x]' value='$maininfo[ans1]'>".$maininfo['ans1']; ?> 
                            </td>
                            <td class="high" colspan="2">
                            <?php echo  "<input name='$newarr[$x]' type='radio' id='$newarr[$x]' value='$maininfo[ans2]'>".$maininfo['ans2']; ?>
                            </td>
                                </tr>
                                <tr>
                            <td class="high" colspan="2">
                            <?php echo  "<input name='$newarr[$x]' type='radio' id='$newarr[$x]' value='$maininfo[ans3]'>".$maininfo['ans3']; ?>
                            </td>
                            <td class="high" colspan="2">
                            <?php echo  "<input name='$newarr[$x]' type='radio' id='$newarr[$x]' value='$maininfo[ans4]'>".$maininfo['ans4']; ?>
                            </td>
                                </tr>
<?php                   
    }          
$x++;
}
?>
    <tr>
    <td colspan="2" align="center"><input type="button" name="Submit" value="Submit" class="subbox" onclick="ctime()"></td>
    <td colspan="2" align="center"><input type="reset" value="Clear"  class="subbox"></td>
                        
                    </table>
              </form>
    
                 <?
   /* main logic of this program \\
      shuffle($newarr);
     $x=0;                 
  
while($x<8)
{
    echo "[".$x."]".$newarr[$x]."<br />";
    $x++;
}   */
?>
