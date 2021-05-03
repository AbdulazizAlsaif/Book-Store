<?php
include_once "config.php";
$id = intval($_GET['id']);
$query = mysqli_query($con,'select * from books where id='.$id);
if(mysqli_num_rows($query)==0){
    header("location: index.php");
    die;
}
$book = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>


        .grid-book {
            display: grid;
            position: relative;
            margin-left: 1%;
        }
        .boook-img {
            float: left;
            width: auto;
            height: auto;
        }
        .info{
            float: left;
            margin-left: 1%;
        }

    </style>
    <title>Results</title>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <div>
                <a href="index.php">
                    <!-- IMAGE FROM https://www.svgrepo.com/svg/89864/open-book-->
                    <img src="images/logo.svg" alt="Logo" />
                </a>
            </div>

        </div>
        <ul class="nav">
            <li><a class="active" href="#">home</a></li>
            <li><a href="Books.php">Books</a></li>
            <li><a  href="Search.php">Search</a></li>
            <li><a  href="Help.html">help</a></li>
            <li><a href="About-us.html">About us</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</header>

<section class="home">
    <div class="overlay">
        <div class="overlay">

            <div class="index-content">

                <div class="grid-book">
                        <div class="boook-img">
                            <a href="#">
                                <img id="book_img" class="boook-img" src="<?=$book['image']?>" alt="book" >
                            </a>
                            <div class="info">
                                <p id="bookName" style="font-weight: bold "><?=$book['name']?></p>
                                <br>
                                <p id="isbn">ISBN-13: <?=$book['isbn']?> </p> <br>
                                <p id="author">Author :<?=$book['author']?></p> <br>
                                <p id="price">Price : $<?=$book['price']?></p>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>