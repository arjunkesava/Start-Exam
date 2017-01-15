var m=00;
var s=00;
var ms=00;
var mtime;
var stime;
var mstime;

function startTime()
{
    /*if(s=10)
    {
        alert("happy new year");
        newitime();
    } */
    document.getElementById('txt').innerHTML=m+" :"+s+" :"+ms;
    // add a zero in front of numbers<10
    //ms=checkTime(ms);
	//if(m==1&&s==0&&ms==0)
	//{
    //    redirectURL="http://localhost:8080/file:/H:/singlework/NewPHP/Start%20Exam/anscheck.php";
    //    setTimeout("location.href=redirectURL;");
    //}
    ms=ms+1;
    if(s=5)
    {
        newtime();
    }
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
    
    var mtime=m;
    var stime=s;
    var mstime=ms;
    
    setTimeout(function(){startTime()},100);
    
    }
 
function sure()
{
    //alert("thank u for using me.");
}
function checktime()
{
var today=new Date();
            window.location.href = "http://localhost:8080/file:/H:/singlework/NewPHP/Start%20Exam/anscheck.php?DBGSESSID=-1&date=" + today;
alert("curent date= " +today);
}
function time()
{ <!--


   alert("Warning Message");
//-->

}function newitime()
{
    var currentTime = new Date ( );
var intime = currentTime.getMinutes ( );
var examtime= 1;
var outtime=intime+examtime;
    alert("Lets Start" + intime);
    while(outtime!=intime)
    {
        currentTime = new Date ( );
        intime = currentTime.getMinutes ( );
    }
    if(outtime=intime)
    {
        alert("time out;");
    }
    //document.getElementById('time').innerhtml= date;
}