<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other</title>
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
                <h1 class="mt-4">Other</h1>
                <div class="container network_wrapper col-sm p-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Other settings</h5>
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#dhcp">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#static">New</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#static">Remove</a>
                                </li>
                            </ul>
                        </div>
                        <form class="card-body tab-content">
                            <div class="tab-pane active" id="dhcp">
                                <p class="card-text">Change DHCP Network settings.</p>
                            </div>
                            <div class="tab-pane" id="static">
                                <p class=" card-text">Change Static Network settings.</p>
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>