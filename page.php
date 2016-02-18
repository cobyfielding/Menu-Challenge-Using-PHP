<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Items</title>
</head>
<body>



<?php


require 'include.php';

                $maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

switch ($maincat){
    case "Appetizer":
        $Appetizer=($Menu['Appetizer']);
//        print_r($Appetizer);
        foreach($Appetizer['items'] as $item) {
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }

        break;
    case "TwoForTwenty":
        $TwoForTwenty=($Menu['TwoForTwenty']);
        foreach($TwoForTwenty['items'] as $item) {
            echo "<h2>" . $item['title'] . "</h2>";
            echo "<img src=" . $item['image'] . ">";
        }
        break;
    case "BetterForYou":
        $Better=($Menu['BetterForYou']);
        foreach($Better['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }

        break;
    case "Drinks":
        $Drinks=($Menu['Drinks']['items']);
        foreach($Drinks as $key=>$item){
            echo "<h2>".$key."</h2>";
            echo "<a href=page.php?category=".$key.">Click for ".$key."</a>";

        }
        break;
//        $SubCat=($Drinks ['items']);
//        $beer=($SubCat['Beers']);

//        foreach($SubCat as $cat)
        {

        }

//        foreach($SubCat as $cat)
//        {
//            echo "<h2>".$item['title']."</h2>";
//            echo "<a href='page.php?category=Drinks'><img src=".$item['image']."></a>";
//        }
//        foreach($Cocktails as $item)
////        foreach($SubCat as $cat)
//        {
//            echo "<h2>".$item['title']."</h2>";
//            echo "<a href='page.php?category=Drinks'><img src=".$item['image']."></a>";
//        }


    case "Beers":
        $Beers=($Menu['Drinks']['items']['Beers']['items']);
        foreach($Beers as $item) {
            echo "<h2>" . $item['title'] . "</h2>";
            echo "<img src=" . $item['image'] . ">";
        }
            break;

    case "Sweets":
        $Sweets=($Menu['Drinks']['items']['Sweets']['items']);
        foreach($Sweets as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
            break;
    case "Cocktails":
        $Cocktails=($Menu['Drinks']['items']['Cocktails']['items']);
        foreach($Cocktails as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
            break;
    case "Burgers":
        $Burgers=($Menu['Burgers']);
        foreach($Burgers['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "Desserts":
        $Desserts=($Menu['Desserts']);
        foreach($Desserts['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "MainEntree":
        $Main=($Menu['MainEntree']['items']);
        foreach($Main as $key=>$item){
            echo "<h2>".$key."</h2>";
            echo "<a href=page.php?category=".$key.">Click for ".$key."</a>";
        }
            break;
    case "Steaks";
        $Steaks=($Menu['MainEntree']['items']['Steaks']['items']);
        foreach($Steaks as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
            break;
    case "Ribs";
        $Ribs=($Menu['MainEntree']['items']['Ribs']['items']);
        foreach($Ribs as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "Pasta";
        $Pasta=($Menu['MainEntree']['items']['Pasta']['items']);
        foreach($Pasta as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "Handhelds":
        $Handhelds=($Menu['Handhelds']);
        foreach($Handhelds['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "Kids":
        $Kids=($Menu['Kids']['items']);
        foreach($Kids as $key=>$item){
            echo "<h2>".$key."</h2>";
            echo "<a href=page.php?category=".$key.">Click for ".$key."</a>";

        }
        break;
    case "KidsMeal";
        $Meal=($Menu['Kids']['items']['KidsMeal']['items']);
        foreach($Meal as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "KidsSides";
        $Sides=($Menu['Kids']['items']['KidsSides']['items']);
        foreach($Sides as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "KidsDrinks";
        $Drink=($Menu['Kids']['items']['KidsDrinks']['items']);
        foreach($Drink as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "Combos":
        $Combos=($Menu['Combos']);
        foreach($Combos['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "PubDiet":
        $Pub=($Menu['PubDiet']);
        foreach($Pub['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
    case "Salads":
        $Salads=($Menu['Salads']);
        foreach($Salads['items'] as $item){
            echo "<h2>".$item['title']."</h2>";
            echo "<img src=".$item['image'].">";
        }
        break;
}









                ?>
</body>
</html>