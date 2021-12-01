<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>

    <style>
        .calendario {
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    <br><br><br>

    <div id="calendario">
        <br><br>
        <h2>CALENDARIO DE EVENTOS</h2><br>
        <iframe src="https://calendar.google.com/calendar/embed?height=800&wkst=2&bgcolor=%23ffffff&ctz=Atlantic%2FCanary&showDate=1&showTitle=0&src=amJ1cm9qZTAzQGllc21hcnF1ZXNkZWNvbWFyZXMub3Jn&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMuc3BhaW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border-width:0" width="1900" height="600" frameborder="0" scrolling="no"></iframe><br><br>

    </div>

    <?php include("includes/footer.php"); ?>

</body>

</html>