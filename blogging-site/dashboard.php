<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging Site</title>
    <!-- hover CSS -->
    <link rel="stylesheet" href="hover-min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- User CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navigation -->
    <nav class="navigation">
        <div class="site-logo">
            <img class="" src="../assets/arrow.gif" alt="">
            <h2 class="">TechGuru</h2>
        </div>
        <ion-icon size="large" id="hamburger-btn" onclick="showMenu()" name="menu-outline" class=""></ion-icon>
        <ul id="menu-items">
            <li class="hvr-right"><a href="#">Downloads</a></li>
            <li class="hvr-right"><a href="#">Gallery</a></li>
            <li class="hvr-right"><a href="#">Contacts</a></li>
            <li class="hvr-right"><a href="explore.html">Explore</a></li>
            <li class="hvr-right"><a class="active" href="#">Home</a></li>
        </ul>

    </nav>

    <section>
        <div class="display-1">Welcome
            <?php
            // echo $_GET['user_email'];
            // if (isset($_GET['user_email'])){
            //     $username = $_GET['user_email'];
            //     echo $username;
            // }

            if (isset($_POST['user_email'])){
                $username = $_POST['user_email'];
                echo $username;
            }


            ?>!
        </div>
    </section>





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        var menuitems = document.getElementById("menu-items");
        // console.log(menuitems);
        var isClicked = false;
        function showMenu() {
            if (isClicked == false) {
                menuitems.style.display = "block";
                isClicked = true
                console.log(isClicked);
            }
            else {
                menuitems.style.display = "none";
                isClicked = false;
                console.log(isClicked);

            }
        }

        // detect changes in screen size
        window.addEventListener("resize", function () {
            if (window.innerWidth > 768) {
                // if screen size is larger than 768px, show menu items
                menuitems.style.display = "block";
            } else {
                // if screen size is smaller than or equal to 768px, call the showMenu function
                showMenu();
            }
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>