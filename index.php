<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAS | Portofolio</title>

    <!--  CSS  -->
    <link rel="stylesheet" href="./style.css">

    <!--  Responsive CSS  -->
    <link rel="stylesheet" href="./responsive.css">

    <!--  Font Awesome  -->
    <script src="https://kit.fontawesome.com/e837a94a5d.js" crossorigin="anonymous"></script>

    <?php
    #Get Database
    $server = "localhost";
    $usr = "root";
    $pswd = "";
    $db = "pokemon_db";

    $connect = mysqli_connect($server, $usr, $pswd, $db);

    if(!$connect){
        die(("Gagal konek : " . mysqli_connect_error()));
    }


    $sql = "SELECT * FROM poke_db";

    $result = mysqli_query($connect, $sql);

    ?>

</head>
<body>

<header>

    <nav>
        <div class="nav-logo">
            <div class="nav-img">
                <a href="#">
                    MAS
                </a>
            </div>
        </div>

        <ul id="float-nav">
            <div class="nav-item">
                <a href="#about-me"><li>About Me</li></a>
            </div>
            <div class="nav-item">
                <a href="#skills"><li>Skills</li></a>
            </div>

            <div class="nav-item">
                <a href="#techs"><li>Techs</li></a>
            </div>

            <div class="nav-item">
                <a href="#get-poke-list"><li>Poke App</li></a>
            </div>
        </ul>
    </nav>

    <nav id="mobile-nav">
        <ul>
            <div class="nav-item">
                <a href="#about-me"><li>About Me</li></a>
            </div>
            <div class="nav-item">
                <a href="#skills"><li>Skills</li></a>
            </div>

            <div class="nav-item">
                <a href="#techs"><li>Techs</li></a>
            </div>

            <div class="nav-item">
                <a href="#get-poke-list"><li>Poke App</li></a>
            </div>

            <h1 onclick="toggleMobNav()" class="nav-item" style="width: 100%; padding: 0; cursor: pointer">
                <li style="text-align: center; margin: 1em auto;">X</li>
            </h1>
        </ul>
    </nav>

    <div id="mobile-hamburger" onclick="toggleMobNav()">
        <div class="hamburger-icon">
            <div class="garis"></div>
            <div class="garis"></div>
            <div class="garis"></div>
        </div>
    </div>

</header>

<main>
    <div id="content">
        <div class="cta-container">
            <h1 class="cta-text">
                Hello, there!<br/>
                I'm Adam, a Programmer.
            </h1>
            <p class="cta-desc">
                I do web development, mobile-app, and UI-UX design.
            </p>
            <div class="cta-btn">
                <a href="#contact-me">Contact Me</a>
            </div>
        </div>

        <article id="about-me">

            <div class="about-me-img">
                <img alt="programmer illustartion"
                     src="https://image.freepik.com/free-vector/programmer-concept-illustration_114360-2217.jpg"
                >
            </div>


            <h1>I'm a Programmer</h1>
            <p>
                I'm currently attending my third year in Computer and Information System at Vocational College of UGM.
                And I have learned and know many programming languages, tools, and technologies.
            </p>
            <p>
                But recently I'm focusing in web development and interested in machine learning.
            </p>

        </article>

        <article id="skills">

            <h1>Software Development <br/> Tools & Skills</h1>
            <div class="article-sec">

                <div class="skills-container">

                    <div class="skill-item html5">
                        <i class="fab fa-html5"></i>
                        HTML 5
                    </div>

                    <div class="skill-item css3">
                        <i class="fab fa-css3-alt"></i>
                        CSS 3
                    </div>

                    <div class="skill-item js-es6">
                        <i class="fab fa-js-square"></i>
                        JavaScript ES6
                    </div>

                    <div class="skill-item bootstrap">
                        <i class="fab fa-bootstrap"></i>
                        Bootstrap
                    </div>

                    <div class="skill-item php">
                        <i class="fab fa-php"></i>
                        PHP
                    </div>

                    <div class="skill-item MySQL">
                        <i class="fas fa-database"></i>
                        MySQL
                    </div>

                    <div class="skill-item MongoDB">
                        <i class="fas fa-server"></i>
                        MongoDB
                    </div>

                    <div class="skill-item NodeJS">
                        <i class="fab fa-node-js"></i>
                        Node.JS
                    </div>

                    <div class="skill-item npm">
                        <i class="fab fa-npm"></i>
                        NPM
                    </div>

                    <div class="skill-item yarn">
                        <i class="fab fa-yarn"></i>
                        Yarn
                    </div>

                    <div class="skill-item react">
                        <i class="fab fa-react"></i>
                        React JS
                    </div>

                    <div class="skill-item AWS">
                        <i class="fab fa-aws"></i>
                        AWS Cloud
                    </div>

                    <div class="skill-item python">
                        <i class="fab fa-python"></i>
                        Python
                    </div>

                    <div class="skill-item java">
                        <i class="fab fa-java"></i>
                        Java
                    </div>

                    <div class="skill-item android">
                        <i class="fab fa-android"></i>
                        Android Studio
                    </div>

                    <div class="skill-item ar-vr">
                        <i class="fas fa-vr-cardboard"></i>
                        AR-VR
                    </div>

                    <div class="skill-item unity">
                        <i class="fab fa-unity"></i>
                        Unity
                    </div>

                </div>

            </div>

        </article>

        <article id="techs">
            <h1>Techs Used in This Page</h1>

            <div class="cards-container">
                <div class="card">
                    <div class="card-illustration">
                        <i class="fab fa-html5"></i>
                    </div>
                    <div class="card-text">
                        <p>HTML is the standard markup language for Web pages.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-illustration">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <div class="card-text">
                        <p>CSS is the language we use to style an HTML document.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-illustration">
                        <i class="fab fa-js"></i>
                    </div>
                    <div class="card-text">
                        <p>JavaScript is the world's most popular programming language.</p>
                    </div>
                </div>

            </div>

        </article>

        <article id="get-poke-list">

            <h1>
                Pokemon List
            </h1>

            <p>Tampilkan sebanyak
                <span id="banyak-pokemon">
                    <?php
                    if (!isset($_GET['poke-number'])){
                        echo 0;
                    }else{
                        echo  $_GET['poke-number'];
                    }
                    ?>
                </span> pokemon.
            </p>

            <form action="index.php" method="get" id="poke-form">
                <input id="poke-num"
                       type="range"
                       name="poke-number"
                       min="0" max="1000"
                       value="<?php
                       if (!isset($_GET['poke-number'])){
                           echo 0;
                       }else{
                           echo  $_GET['poke-number'];
                       }
                       ?>"
                       onchange="inputPoke()"
                >
                <div id="tampilkan-btn-wrapper">
                    <input type="submit" class="btn-default" value="Tampilkan"/>
                </div>
            </form>

            <table>

                <thead>
                    <tr>
                        <th>POKE ID</th>
                        <th>Gambar Pokemon</th>
                        <th>Nama Pokemon</th>
                        <th>Type 1</th>
                        <th>Type 2</th>
                        <th>Power</th>
                    </tr>
                </thead>

                <tbody id="poke-table">
                <?php
                if(mysqli_num_rows($result) > 0){

                    while ($row=mysqli_fetch_assoc($result)){
                        echo "<tr>";

                        echo "<td> ".

                            $row['ID'] . "</td> <td>".
                            "<img src='./assets/pokemon db/poke_images/images/". $row['Name'] . ".png' /> </td><td>".
                            $row['Name'] . "</td> <td>".
                            $row['Type1'] . "</td> <td>".
                            $row['Type2'] . "</td> <td>".
                            $row['Power'] . "</td>";

                        echo "</tr>";
                    }

                }else{
                    echo "Pokedex Database Ga ketemu";
                }
                ?>
                </tbody>

            </table>

        </article>

    </div>

    <aside id="contact-me">
        <img class="aside-avatar" alt="avatar" src="https://media-exp1.licdn.com/dms/image/C5603AQE2-ox_80I8Yg/profile-displayphoto-shrink_800_800/0/1619930750668?e=1628726400&v=beta&t=3wGbU4yzgG5XM5W2uBQNrYVQXZqLK2_4TJYpp-ovTh4">
        <div class="aside-info">

            <h4>Maulana Adam Sahid</h4>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br/> <br/>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="socmed" >
                <a href="https://www.linkedin.com/in/masadamsahid/" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.linkedin.com/in/masadamsahid/" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/masadamsahid/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

        </div>
    </aside>
</main>

<footer>
    <div class="nav-logo">
        <div class="nav-img">
            <a href="#">
                MAS
            </a>
        </div>
    </div>

    <ul>
        <div class="nav-item">
            <a href="#about-me"><li>About Me</li></a>
        </div>
        <div class="nav-item">
            <a href="#skills"><li>Skills</li></a>
        </div>

        <div class="nav-item">
            <a href="#techs"><li>Techs</li></a>
        </div>

        <div class="nav-item">
            <a href="#get-poke-list"><li>Poke App</li></a>
        </div>
    </ul>

    <div class="copyright">
        <p>This webpage is developed by Maulana Adam Sahid &copy; 2021</p>
    </div>
</footer>

<!--  Poke JS  -->
<script src="poke.js"></script>

</body>
</html>