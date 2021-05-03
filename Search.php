  <?php
  include_once "config.php";
  $q = $_GET['q'];
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="stylesheet" href="css/style.css" />

    <title>Search</title>
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
          <li><a href="Books.php">Books</a></li>
          <li><a class="active" href="#">Search</a></li>
          <li><a href="Help.html">help</a></li>
          <li><a href="About-us.php">About us</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </header>

    <section class="home">
      <div class="overlay">
        <div class="home-content">
          <div>
          <label class="search-bar-label" for="">Search</label>
          <br>
        </div>
            <form>
                <input class="search-bar" name="q" type="text" value="<?=$q;?>"  placeholder="Search">
                <br />
                <button class="btn btn-blue opacity-hover">Search</button>
            </form>
            <div class="grid">

                <?php
                if(isset($q)){
                $query = mysqli_query($con,"select id,image from books where name like '%".$q."%'");
                $count = mysqli_num_rows($query);
                if($count == 0){
                ?>
                    <p style="font-size: 20px; text-align: center ; font-weight: bold"; > Not Found</p>
                    <?php
                }else{
                    while($book=mysqli_fetch_assoc($query)){
                    ?>

                    <div class="grid-item">
                        <div class="book1">
                            <a href="Results.php?id=<?=$book['id'];?>">
                                <img class="book-img" src="<?=$book['image'];?>" alt="book" >
                            </a>
                        </div>

                    </div>
                    <?php
                }
                }
                }
                ?>




            </div>
        </div>
      </div>
      
    </section>

    
    
  </body>
</html>
