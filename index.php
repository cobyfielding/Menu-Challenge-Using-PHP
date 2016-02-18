<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applebee's Menu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    <link rel="stylesheet" href="css/main.css">
</head>
<?php
session_start();


?>
<body>
<h1>Applebee's Menu</h1>

<div class="container">
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=TwoForTwenty">
                <?php
                require 'include.php';
                $maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
                if($_REQUEST['category']=='2for'){
                    echo $Menu['TwoForTwenty[]'];
                }

                ?>
                <img class="img-responsive" src="images/2for20.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=TwoForTwenty">2 for $20</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Appetizer">
                <img class="img-responsive" src="images/barSnacks.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Appetizer">Apps and Bar Snacks</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=BetterForYou">
                <img class="img-responsive" src="images/betterforyou.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=BetterForYou">Better For You</a>
            </h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Drinks">
                <img class="img-responsive" src="images/beverages.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Drinks">Get Drunk</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Burgers">
                <img class="img-responsive" src="images/burgers.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Burgers">Burgers</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Desserts">
                <img class="img-responsive" src="images/desserts.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Desserts">Desserts</a>
            </h3>
        </div>
    </div>

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=MainEntree">
                <img class="img-responsive" src="images/entree_main_dishes.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=MainEntree">Main Entrees</a>
            </h3>

        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Handhelds">
                <img class="img-responsive" src="images/handhelds.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Handhelds">Handhelds</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Kids">
                <img class="img-responsive" src="images/kids.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Kids">Kids</a>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Combos">
                <img class="img-responsive" src="images/lunch_combos.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Combos">Combos</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=PubDiet">
                <img class="img-responsive" src="images/pubdiet.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=PubDiet">Pub Diet</a>
            </h3>
        </div>
        <div class="col-md-4 portfolio-item">
            <a href="page.php?category=Salads">
                <img class="img-responsive" src="images/salads.jpg" alt="">
            </a>
            <h3>
                <a href="page.php?category=Salads">Salads</a>
            </h3>
        </div>
    </div>
</div>
<!-- /.row -->


</body>
</html>