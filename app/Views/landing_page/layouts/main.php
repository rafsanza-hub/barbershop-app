<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barber Shop - Style Your Hair</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>style.css" />
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/e6b8371d90.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/fabicon.png" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet" />
</head>

<body>
   
<?= $this->renderSection('content') ?>

    <script>
        var navLink = document.getElementById("navLink");

        function showMenu() {
            navLink.style.right = "0";
        }

        function hideMenu() {
            navLink.style.right = "-600px";
        }
    </script>
</body>

</html>