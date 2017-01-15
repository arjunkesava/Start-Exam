<?php
    mysql_connect("localhost","root","tiger") or die(mysql_error());
    mysql_selectdb("exam");
    session_start();
    $data=mysql_query("select * from anssheet");
    while($info=mysql_fetch_array($data))
    {
        echo"<script type='text/javascript'>alert('U hout of IF tten this exam.');</script>";
        if($info['nooftimes']==0)
        {
            echo"<script>alert('U have already written this exam.');</script>";
        }
    }
?>
<html>
<head>
<script type="text/javascript">
alert("U hout fghghjdtgj exam.");
        function goalert()
        {
            check = confirm('Are you Ready to write exam...!');
            if (check == true)
            {
                check = confirm('Click OK to Start the Exam');
                if (check == true)
                {
                    document.getElementById('start').innerHTML="Start Exam";
                } else if (check == false)
                {
                    window.location = history.go(-1);
                    return false;
                }
            } else
                return;
        }
    </script>
</head>
<body >
  <a href="exampage.php" id="start"></a>
</body>
</html>
