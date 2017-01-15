<?php
    include 'header.inc';
    $theme=$_GET['i'];
    $userid=$_SESSION['userid'];
    $check=mysql_query("SELECT themename FROM themes WHERE userid = '$userid';") or die(mysql_error());
    $info=mysql_fetch_assoc($check);
    $_SESSION['themename']=$info['themename'];
    echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>";
    if($theme!=NULL){
        mysql_query("update themes set themename='".$theme."'  WHERE userid = '$userid'") or die(mysql_error());
    }

?><html><head>
        <link href="allcss.css" type="text/css" rel="stylesheet">
        <link href="tabs.css" type="text/css" rel="stylesheet">
        <style>
            .inbox{
                width: 70%;
                height: 350px;
                left: 15%;
                font-size: 26px;
                position: absolute;
                top: 25%;
                padding: 9px 11px;
                background: rgba(255, 255, 255, 1.0);
                border: 3px solid #000040;
                border-radius: 3px;
            }
            
            .i > input[type=radio]{
                display:none;
            }
            input[type=radio] + img{
                cursor:pointer;
                border:2px solid transparent;
            }
            input[type=radio]:checked + img{
                border:2px solid #00ff00;
            }
        </style>
        <script>
            function img()
            {
                //alert("image selected;");
            }
        </script>
    </head>
    <?php

    ?>
    <div class="centerbox">
        <div class="topbox">
            <h1 align='center' style="color: #FF3300;">Select Your Style</h1>
        </div>
        <hr>
        <div class="rightbox">
            <div class="tabs">
                <div class="tab">
                    <input type="radio" id="tab-1" name="tab-group-1"  align="right">
                    <label for="tab-1"><img src="power.png" alt="\|/" width="25px" height="25px"  align="right"></label>
                    <div class="tab close-tab">
                        <input type="radio" id="tab-close" name="tab-group-1"  align="right">
                        <label for="tab-close"><img src="power.png" alt="\|/" width="25px" height="25px"  align="right"></label>
                    </div>

                    <div class="content">
                        <ul>
                            <a href="userhomepage.php">Home</a></li>
                            <a href="about.php">About</a></li>
                            <a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="leftbox">
            <h5 align="left">Select a theme that suits you best </h5><br/>
            <div class="inbox">


                <form action="themes.php" method="get">
                    <div>
                        <label class="i" for="i1">
                            <input id="i1" type="radio" name="i" value="bgpat001" />
                            <img src="bgpat001.jpg" style="width:20%; height:40%;">
                        </label>

                        <label class="i" for="i2">
                            <input id="i2" type="radio" name="i" value="bgpat002"/>
                            <img src="bgpat002.jpg" style="width:20%; height:40%;">
                        </label>

                        <label class="i" for="i3">
                            <input id="i3" type="radio" name="i" value="bgpat003" />
                            <img src="bgpat003.jpg" style="width:20%; height:40%;">
                        </label>

                        <label class="i" for="i4">
                            <input id="i4" type="radio" name="i" value="bgpat004" />
                            <img src="bgpat004.jpg" style="width:20%; height:40%;">
                        </label>
                        <br />
                        <label class="i" for="i5">
                            <input id="i5" type="radio" name="i" value="bgpat005" />
                            <img src="bgpat005.jpg" style="width:20%; height:40%;">
                        </label>

                        <label class="i" for="i6">
                            <input id="i6" type="radio" name="i" value="bgpat006"/>
                            <img src="bgpat006.jpg" style="width:20%; height:40%;">
                        </label>

                        <label class="i" for="i7">
                            <input id="i7" type="radio" name="i" value="bgpat007" />
                            <img src="bgpat007.jpg" style="width:20%; height:40%;">
                        </label>

                        <label class="i" for="i8">
                            <input id="i8" type="radio" name="i" value="bgpat008" />
                            <img src="bgpat008.jpg" style="width:20%; height:40%;">
                        </label>            <br />
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>