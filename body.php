<body>
    
    <?php
    require_once("menu.php");
     switch ($menuItem) {
        case 'kocsik':
            require_once("kocsik.php") ;
            break;
        case 'szerkeszto':
            require_once("szerkeszto.php");
        default:
            # code...
            break;
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>