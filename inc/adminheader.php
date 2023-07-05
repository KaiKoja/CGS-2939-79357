<!DOCTYPE html>
<html lang="en-us">

<head>

<!--Active Nav Bar Script https://stackoverflow.com/questions/26819675/navbar-highlight-for-current-page-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>

   <title>Sales</title>
   <link rel="stylesheet" type="text/css" href="./bootstrap.min.css">
</head>
<body> 
<?php include('inc/adminnavbar.php'); ?>