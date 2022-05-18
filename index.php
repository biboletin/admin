<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include 'partials/header.php'; ?>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php include 'partials/sidebar.php'; ?>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <?php include 'partials/navbar.php'; ?>


            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4">Home</h1>
                <p>
                    The starting state of the menu will appear collapsed on
                    smaller screens, and will appear non-collapsed on larger
                    screens. When toggled using the button below, the menu will change.
                </p>
                <p>
                    Make sure to keep all page content within the
                    <code>#page-content-wrapper</code>
                    . The top navbar is optional, and just for demonstration.
                    Just create an element with the
                    <code>#sidebarToggle</code>
                    ID which will toggle the menu when clicked.
                </p>
            </div>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>