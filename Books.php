<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Books</title>
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
          <li><a href="index.php">home</a></li>
          <li><a class="active" href="Books.php">Books</a></li>
          <li><a  href="Search.php">Search</a></li>
          <li><a  href="Help.html">help</a></li>
          <li><a href="About-us.html">About us</a></li>
      
        </ul>
        <div class="clear"></div>
      </div>
    </header>

    <section class="home">
        <div class="overlay">
            <div class="index-content">
                <h2 class="title">All books</h2>
                <div class="grid">
                    <?php
                    include_once "config.php";
                    $query = mysqli_query($con,"select id,image from books order by id desc ");
                    while($book=mysqli_fetch_assoc($query)){
                        ?>
                        <div class="grid-item">
                            <div class="book1">
                                <a href="Results.php?id=<?=$book['id'];?>">
                                    <img class="book-img" src="<?=$book['image'];?>" alt="Book Cover" >
                                </a>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

  </body>
</html>
