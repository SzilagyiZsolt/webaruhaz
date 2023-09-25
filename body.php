<body>
    <div class="container-fluid">
    <?php
    require_once("menu.php");
     switch ($menuItem) {
        case 'home':
            require_once("home.php");
            break;
        case 'kocsik':
            require_once("kocsik.php") ;
            break;
        case 'szerkeszto':
            require_once("szerkeszto.php");
            break;

        default:
            echo "Üdv az Autó eladó oldalon!";
            break;
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>