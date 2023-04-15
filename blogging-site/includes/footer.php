
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
</body>

</html>