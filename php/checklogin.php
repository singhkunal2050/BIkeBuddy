<?php
session_start();
    
$variablephp = $_SESSION['username'];
?>

<script>
    var username = "<?php echo $variablephp; ?>";
    alert("category = " + variablejs);

    var a= document.getElementsByClassName('logout');        //handle  php

    a[0].style.background='#830b0b';
    //   console.log(userName)

    if(userName=="")
        a[0].style.display='none';
    else
        a[0].style.display='inline-block';

    // console.log("dsad");

</script>