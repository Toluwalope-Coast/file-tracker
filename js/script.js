/*****  The time on the nav bar code ******/
function doDate()
{
    var str = "";
    var now = new Date();
    str = now.toDateString() +' '+now.toLocaleTimeString() ;
    document.getElementById("todaysDate").innerHTML = str;
}
setInterval(doDate, 1000);

/*****  The time on the nav bar codes ends ********/

