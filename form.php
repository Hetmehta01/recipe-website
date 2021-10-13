<!DOCTYPE html>
<html>
<meta name = "viewport" content="width = device-width initial-scale = 1.0">
<head>
        <title>EngineersKitchenette</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://kit.fontawesome.com/c740819ad3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Header section -->
        <section class="sub-header">
            <nav>
                <a href="index.html"> <img src="images/logo.png"></a> 
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="recipe.html">RECIPES</a></li>
                        <li><a href="contact1.php">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Add Recipe</h1>
        </section>

        <!-- Add recipe -->
        <div class="form-wrapper">
            <form action="form.php" method="post">
                <div class="row">
                    <div class="form-col">
                        <div class="form__item">
                            <label class="recipe__name" for="recipe-name">Recipe Name</label>
                            <input type="text" name="rname" placeholder="Enter Recipe Name"/>
                        </div>
                        <div class="row1">
                            <div class="form__item">
                                <label class="recipe__time" for="prep_time">Prep Time</label>
                                <input type="text" class="time__input" name="ptime" placeholder="in hr" />
                            </div>
                            <div class="form__item">
                                <label class="recipe__time">Cooking Time</label>
                                <input type="text" class="time__input" name="ctime" placeholder="in hr" />
                            </div>
                            <div class="form__item">
                                <label class="recipe__time" for="servings">Servings</label>
                                <input type="text" class="time__input" for="servings" name="serving" placeholder="0" />
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="ing-list">Ingredients</label>
                            <textarea name="ing-list" cols="30" rows="12" placeholder="List of Ingredients"></textarea>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form__item">
                            <label for="direction">Directions</label
                                ><textarea name="direction" rows="10" placeholder="Steps to-do"></textarea>
                            </div>
                        <div class="form__item">
                            <label for="cook-tips">Cooking Tips</label>
                            <textarea name="cook-tips" rows="7" placeholder="Enter Cooking Tips"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="sub-btn">Submit</button>
            </form>
        </div>

        <!-- Footer -->
        <section class="footer">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sunt velit consequatur odit aliquid
                 magnam quod? <br>Explicabo ipsam animi earum at doloribus nam, cumque reiciendis fugiat quidem assumenda dolor aspernatur vel.</p>
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <p>Made with <i class="fas fa-heart"></i> & <i class="fas fa-coffee"></i> by Het Mehta</p>
            </section>

        <!-- Javascript for toggle menu -->
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.width = "200px";
            }
            function hideMenu(){
                navLinks.style.width= "0px";
            }
        </script>
    </body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe-website";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "Connection OK";
}
else
{
    echo "Connection Failed ".mysqli_connect_error();
}

$rname =  $_REQUEST['rname'];
$preptime =  $_REQUEST['ptime'];
$cooktime = $_REQUEST['ctime'];
$serving = $_REQUEST['serving'];
$ingrdients = $_REQUEST['ing-list'];
$directions = $_REQUEST['direction'];
$cooktips = $_REQUEST['cook-tips'];


$sql = "INSERT INTO addrecipe  VALUES ('$rname', '$preptime','$cooktime','$serving','$ingrdients','$directions','$cooktips')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." ;

    // echo nl2br("\n$name\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);

?>