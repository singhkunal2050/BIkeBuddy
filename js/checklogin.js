

function checklogin(){
  
    var a= document.getElementsByClassName('logout'); 
    var userName ='<?php  $_SESSION["username"]  ?>'         //handle  php

    a[0].style.background='#830b0b';
 //   console.log(userName)

    if(userName=="")
        a[0].style.display='none';
    else
      a[0].style.display='inline-block';

   // console.log("dsad");


}
