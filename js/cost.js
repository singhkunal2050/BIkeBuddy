function getCost()
{
    alert("Getting Cost!");
    var locs = document.querySelectorAll(".leaflet-routing-alt");
    var distTime=locs[0].childNodes[1].innerHTML;
    console.log(distTime); 
    var dtarr=distTime.split(",",2);
    var dist=dtarr[0];
    var d2=dist.split(" ",1);  
    var cost=d2*9;
    var c="Your Cost :: " + cost + " Rs";              // 9 rs/km
    
    document.getElementById('cost').innerHTML= c + "<br>"+ locs[0].childNodes[1].innerHTML;
    if(document.getElementById('cost').innerHTML=="")
        {
            console.log("Values are null");
        }
}