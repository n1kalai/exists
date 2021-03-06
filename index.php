<?php
session_start();
$_SESSION['user'] = null;
const DB_NAME = 'localhost';
const DB_USER = 'root';
const DB_PASS = '123456';
const DB_BASE = 'mine';
$conn = mysqli_connect(DB_NAME,DB_USER,DB_PASS,DB_BASE);
if(!$conn) {
    die('DB_CONNECTION_PROB:' . mysqli_error(DB_BASE));
}

mysqli_query($conn,'set character set utf8');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">

</head>


<body>
    <header class="mainHeader">


        <!-- Header boxes-->
        <a href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
        <!-- Navigation Bar -->
        <nav>
            <ul class="headerMenu">


                <?php 
                
                $query = 'SELECT * FROM header_nav ';
                $query .= 'WHERE ';
                if(isset($_SESSION['user'])){
                    $query .= 'isuser = 1';
                } else {
                    $query .= 'visible = 1';
                }
                
                $result = mysqli_query($conn,$query);
//                 echo $query;
                if (!$result) {
                die('No Result');
                }
                while ($row = mysqli_fetch_assoc($result)){
                echo "<li class=\"nav-item\"><a href=\"pages/{$row['href']}\" class=\"nav-link\">{$row['menu_name']}</a></li>";
                }
                ?>
                <!--
                <li class="nav-item"><a href="#" class="nav-link"> მთავარი</a></li>


                <li class="nav-item"><a href="#" class="nav-link"> აქციები</a></li>


                <li class="nav-item"> <a href="pages/reg.html" class="nav-link">პროფილი </a></li>
-->
                <?php 
                if (!isset($_SESSION['user'])) {
                    echo "<li class=\"nav-item regist\"><a href=\"#\" class=\"nav-link\">რეგისტრაცია</a></li>";
                }
                ?>
            </ul>
        </nav>
        <!-- Search bar and i -->
        <form action="index.php" class="Search">
            <label for="sss" class="searchbb">
                <input type="search" id="sss" class="searchbg" placeholder=" ძებნა...">
                <button type="submit" class="ser">
                    <i class="fas fa-search"></i></button>
            </label>


        </form>


    </header>

    <section class="profile">

        <section class="profLay">
            <p class="closeLay">&#10006;</p>
            <p class="prevLay">&#x2794;</p>
            <header>
                <a href="#" class="forReg">შესვლა</a>
                <a href="#" class="forReg">რეგისტრაცია</a>
                <div class="back"></div>
            </header>

            <form action="" class="logInForm">
                <div class="first">
                    <input type="text">
                    <span>ელ- ფოსტა</span>
                    <div class="divs"></div>
                </div>
                <div class="first">
                    <input type="text">
                    <span>პაროლი</span>
                    <div class="diva"></div>
                </div>
                <input type="submit" value="შესვლა">
                <button>FACEBOOK</button>
            </form>

            <section class="whichOne hide">
                <a href="#" class="iAmPers">ფიზიკური პირი</a>
                <a href="#" class="iAmComp">იურიდიული პირი</a>
            </section>


            <form action="" class="fizPi hide">
                <div class="first">
                    <input type="text">
                    <span>სახელი</span>
                    <div class="divs"></div>
                </div>
                <div class="first">
                    <input type="text">
                    <span>გვარი</span>
                    <div class="divs"></div>
                </div>
                <div class="first">
                    <input type="password">
                    <span>პაროლი</span>
                    <div class="diva"></div>
                </div>
                <div class="first">
                    <input type="password">
                    <span>გაიმეორეთ პაროლი</span>
                    <div class="diva"></div>
                </div>

                <div class="first">
                    <input type="password">
                    <span>ელ - ფოსტა</span>
                    <div class="diva"></div>
                </div>
                <div class="first">
                    <input type="password">
                    <span>მობ. ნომერი</span>
                    <div class="diva"></div>
                </div>
                <div class="first">
                    <input type="password">
                    <span>მომხმარებლის სახელი</span>
                    <div class="diva"></div>
                </div>
                <label for="rules" class="container">
                    <input type="checkbox" id="rules" checked> მე ვეთანხმები საიტზე განთავსებულ კლიენტის ინფორმაციისა და კონფიდენციალობის დაცვის პირობებს და ინფორმაციის დაცვის პოლიტიკას
                    <span class="checkmark"></span>
                </label> <br><br>

                <label for="emmail" class="container">
                    <input type="checkbox" id="emmail" checked> მე მსურს მივიღო ფასდაკლებების შესახებ ელ. ფოსტით
                    <span class="checkmark"></span>
                </label>



                <input type="submit" value="რეგისტრაცია">


            </form>

        </section>
        <script src="javascript/reg.js"></script>
    </section>
    <section class="head">
        <h2 style="display: none">astala</h2>
        <div class="burgerMenu" onclick="openMenu()" id="burgerMenu">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <i class="fas fa-arrow-left" id="undo" onclick="clearUndo()"></i>

        <form action="index.php" class="Search2">


            <input type="search" class="searchbg2" placeholder="ძებნა...">
            <button type="submit" class="ser">
                <i class="fas fa-search"></i></button>

        </form>

    </section>
    <!-- Slider start -->
    <div id="slider">

        <figure class="slider"><img src="img/sliderImages/bech2.jpg" alt=""></figure>
    </div>

    <!-- Meore Navbar Meniu, Kategoriebis -->

    <nav class="secNav">

        <i class="fas fa-angle-double-left arrowsIcons"></i>
        <!--           <img src="img/arrows/arrowLeft.png" alt="">-->
        <ul class="navbar" id="forBurg">
            <li class="nav-item" onclick="showUndo()"><a class="nav-link" href="#"><i class="fas fa-power-off"></i> ტექნიკა</a>
                <ul class="subs">
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-desktop"></i> ტელევიზორები</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-video"></i> ციფრული ტექნიკა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-gamepad"></i> კომპიუტერული ტექნიკა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-tablet-alt"></i> ტელეფონი-ტაბლეტი</a></li>

                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-blender"></i> წვრილი ტექნიკა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-door-closed"></i> მსხვილი ტექნიკა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-house-damage"></i> ჩასაშენებელი ტექნიკა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-balance-scale"></i> საყოფ. ტექნიკა</a></li>

                </ul>

            </li>
            <li class="nav-item" onclick="showUndo()"><a class="nav-link" href="#"><i class="fas fa-couch"></i> ავეჯი</a>

                <ul class="subs furniture">
                    <li class="nav-item"><a href="" class="nav-link"> <i class="fas fa-couch"></i> რბილი ავეჯი</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-chair"></i> სკამი</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-ring"></i> მაგიდა</a></li>

                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-x-ray"></i>კარადა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-bed"></i> საძინებელის ავეჯი</a></li>
                    <li class="nav-item"><a href="" class="nav-link">მისაღების ავეჯი</a></li>
                    <li class="nav-item"><a href="" class="nav-link">კაბინეტის ავეჯი</a></li>

                </ul>

            </li>


            <li class="nav-item"><a class="nav-link" href="pages/shopping.html"><i class="fas fa-shopping-bag"></i> შოპინგი</a></li>


            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-child"></i> საბავშვო</a></li>


            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-heartbeat"></i> ფარმაცია</a></li>

            <li class="nav-item" onclick="showUndo()"><a class="nav-link" href="#"><i class="fas fa-running"></i> სპორტი</a>
                <ul class="subs sport">
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-running"></i> აერობიკა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"> <i class="fas fa-swimmer"></i> ცურვა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-dumbbell"></i> სავარჯიშო დარბაზი</a></li>


                    <!--
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-skating"></i>კარადა</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-bed"></i> საძინებელის ავეჯი</a></li>
                    <li class="nav-item"><a href="" class="nav-link">მისაღების ავეჯი</a></li>
                    <li class="nav-item"><a href="" class="nav-link">კაბინეტის ავეჯი</a></li>
-->

                </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> საყოფაცხოვრებო</a></li>

            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-briefcase"></i> კომპანია</a>
                <ul class="subs">

                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-running"></i> სამშენებლო</a></li>
                    <li class="nav-item"><a href="" class="nav-link"> <i class="fas fa-swimmer"></i> ტურისტული</a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-dumbbell"></i> ავია</a>

                </ul>
            </li>



        </ul>
        <i class="fas fa-angle-double-right arrowsIcons"></i>
    </nav>




    <!-- dayoff -->
    <h1>დღის აქციები</h1>




    <!-- kategoriis Asarchevi seqcia -->

    <section class="firstSection">
        <h2 style="display: none;">astala</h2>
        <nav>
            <ul class="detailed_list">
                <li><a href="">ტექნიკა </a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">ავეჯი</a>
                    <ul class="barb">
                        <li><a href="#">რბილი ავეჯი</a></li>
                        <li><a href="#">სკამი</a></li>
                        <li><a href="#">მაგიდა</a></li>
                        <li><a href="#">კარადა</a></li>
                    </ul>
                </li>
                <li><a href="#">საბავშვო</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">შოპინგი</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">ფარმაცია</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">საყოფაცხოვრებო</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">სპორტი</a>
                    <ul class="barb">
                        <li><a href="#">აერობიკა</a></li>
                        <li><a href="#">ცურვა</a></li>
                        <li><a href="#">სავარჯიშო დარბაზი</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">კომპანია</a>
                    <ul class="barb">
                        <li><a href="#">სამშენებლო</a></li>
                        <li><a href="#">ტურისტული</a></li>
                        <li><a href="#">ავია</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>

            </ul>
        </nav>



        <!-- Aqciiis artiklebi -->
        <section class="sectionFooter">
            <h2 style="display: none;">astala</h2>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">2სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
        </section>

    </section>

    <h1 data-aos="fade-down-right">მიმდინარე აქციები</h1>

    <section class="firstSection" data-aos="fade-down-right">
        <h2 style="display: none;">astala</h2>
        <nav>
            <ul class="detailed_list">
                <li><a href="">ტექნიკა </a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">ავეჯი</a>
                    <ul class="barb">
                        <li><a href="#">რბილი ავეჯი</a></li>
                        <li><a href="#">სკამი</a></li>
                        <li><a href="#">მაგიდა</a></li>
                        <li><a href="#">კარადა</a></li>
                    </ul>
                </li>
                <li><a href="#">საბავშვო</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">შოპინგი</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">ფარმაცია</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">საყოფაცხოვრებო</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">სპორტი</a>
                    <ul class="barb">
                        <li><a href="#">აერობიკა</a></li>
                        <li><a href="#">ცურვა</a></li>
                        <li><a href="#">სავარჯიშო დარბაზი</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">კომპანია</a>
                    <ul class="barb">
                        <li><a href="#">სამშენებლო</a></li>
                        <li><a href="#">ტურისტული</a></li>
                        <li><a href="#">ავია</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Aqciiis artiklebi -->
        <section class="sectionFooter" data-aos="fade-up" data-aos-delay="300">
            <h2 style="display: none;">astala</h2>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
        </section>

    </section>

    <h1 data-aos="fade-down-right">პოპულარული აქციები</h1>

    <section class="firstSection" data-aos="fade-down-right">
        <h2 style="display: none;">astala</h2>
        <nav>
            <ul class="detailed_list">
                <li><a href="">ტექნიკა </a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">ავეჯი</a>
                    <ul class="barb">
                        <li><a href="#">რბილი ავეჯი</a></li>
                        <li><a href="#">სკამი</a></li>
                        <li><a href="#">მაგიდა</a></li>
                        <li><a href="#">კარადა</a></li>
                    </ul>
                </li>
                <li><a href="#">საბავშვო</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">შოპინგი</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">ფარმაცია</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">საყოფაცხოვრებო</a>
                    <ul class="barb">
                        <li><a href="#">ტელევიზორები</a></li>
                        <li><a href="#">ციფრული ტექნიკა</a></li>
                        <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">სპორტი</a>
                    <ul class="barb">
                        <li><a href="#">აერობიკა</a></li>
                        <li><a href="#">ცურვა</a></li>
                        <li><a href="#">სავარჯიშო დარბაზი</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>
                <li><a href="#">კომპანია</a>
                    <ul class="barb">
                        <li><a href="#">სამშენებლო</a></li>
                        <li><a href="#">ტურისტული</a></li>
                        <li><a href="#">ავია</a></li>
                        <li><a href="#">ტელეფონი-ტაბლეტი</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Aqciiis artiklebi -->
        <section class="sectionFooter" data-aos="fade-up" data-aos-delay="300">
            <h2 style="display: none;">astala</h2>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
            <article>


                <figure> <img src="img/newsImages/box_back.jpg" alt="">

                </figure>
                <h2 class="title"><a href="#">პროდუქტის სახელი</a></h2>

                <section class="hPrices">

                    <h5 class="price">ფასი:</h5>
                    <h5 class="oldPrice">100</h5>

                    <h5 class="newPrice">50</h5>
                </section>
                <hr class="style-two">
                <div class="time">
                    <span class="span1">7დღე</span> <span class="span2">20სთ</span>
                </div>

                <figure class="socials">

                    <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fas fa-heart"></i></a>

                    <a href="#"><i class="fas fa-star"></i></a>

                </figure>

            </article>
        </section>

    </section>



    <script src="javascript/burger.js" async></script>
    <script src="javascript/timer.js"></script>
    <script src="javascript/listing.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>

</body>

</html>
