<!doctype html>
<html>
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

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bass Odyssey</title>
<link href="./bo.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon" href="./favicon.ico">

</head>
<body>
<?php include('navbar.php'); ?>