<?php
 include 'header.inc';

$userid=$_SESSION['id'];
$examno=$_SESSION['examno'];

$data = mysql_query("SELECT * FROM $tbl_name where userid='$userid' AND examno='$examno';")or die(mysql_error());
print"<table cellpadding='5' cellspacing='5' border='4' align='center'>";    
    while($info=mysql_fetch_array($data))   
    {
    print"<tr><td><font size='5'>Q:".$info['question']."</font></tr></td>";
        //if($info['userans']==$info['orians']) //correct answer
        //{
            Print "<tr><td>Your Answer:<font color='#00ff00' size='3'>".$info['userans']."</font></td></tr>";    // user answer in green color
     //   }else                                 //wrong answer
       // {
            Print "<tr><td>Your Answer:<font color='#ff0000' size='3'>".$info['userans']."</font></td>";    // user answer in red color
            Print "<td>Correct Answer:<font color='#00ff00' size='3'>".$info['orians']."</font></td></tr>"; // user answer in green color
       // }

    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }   
    print"</table>";
    $data = mysql_query("SELECT * FROM $tbl_name where userid='$userid' AND examno='$examno';")   or die(mysql_error());    
    echo"<table border='2' cellspacing='5' cellpadding='5' align='center'>"; 
    while($info = mysql_fetch_array( $data ))   
    {
    print"<tr><td><font size='5'><strong>Q:".$qno.$info['question']."</strong></font><br/></td></tr>";
    Print"<tr><td>Your Answer:<font size='3'>".$info['userans']."</font></td></tr>"; 
    //Print "<th>original answer:</th><br/><td>".$info['orians'] . "</td> ";
    }
    print"</table>";
echo"<br/><a href='userhomepage.php'>Click here to fuck back to the exam...!</a><br/>";
echo"<br/><a href='logout.php' onclick='phplogout()'><font size='5' align='left'>Logout</font></a>";   
    ?>
