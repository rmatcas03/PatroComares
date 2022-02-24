<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>

    <style>
        h2 {
            text-align: center;
        }

        @media (max-width: 550px) {
            .big-container {
                display: none;
            }
        }

        @media (min-width: 550px) {
            .small-container {
                display: none;
            }
        }

        /* Responsive iFrame */
        .responsive-iframe-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .responsive-iframe-container iframe,
        .vresponsive-iframe-container object,
        .vresponsive-iframe-container embed {
            position: absolute;
            top: auto;
            left: auto;
            width: 100%;
            height: 80%;
        }
    </style>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    

    <div class="responsive-iframe-container big-container">
        <br><br><br>
        <h2>CALENDARIO DE EVENTOS</h2>
        <iframe src="https://calendar.google.com/calendar/embed?height=800&wkst=2&bgcolor=%23ffffff&ctz=Atlantic%2FCanary&showDate=1&showTitle=0&src=amJ1cm9qZTAzQGllc21hcnF1ZXNkZWNvbWFyZXMub3Jn&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMuc3BhaW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border-width:0" width="100%" height="650" frameborder="0" scrolling="no"></iframe>
    </div>

    <div class="responsive-iframe-container small-container">
        <br><br><br>
        <h2>CALENDARIO DE EVENTOS</h2>
        <iframe src="https://calendar.google.com/calendar/embed?height=800&wkst=2&bgcolor=%23ffffff&ctz=Atlantic%2FCanary&showDate=1&showTitle=0&src=amJ1cm9qZTAzQGllc21hcnF1ZXNkZWNvbWFyZXMub3Jn&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMuc3BhaW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border-width:0" width="100%" height="650" frameborder="0" scrolling="no"></iframe>
    </div>

    <?php include("includes/footer.php"); ?>

</body>

</html>