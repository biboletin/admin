<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include 'partials/header.php'; ?>
    <link rel="stylesheet" href="css/dashboard.css" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php include 'partials/sidebar.php'; ?>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <?php include 'partials/navbar.php'; ?>

            <!-- Page content-->
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <div class="monitor">
                        <!-- Animated SVG Gauges -->
                        <!-- Gauge: > Network Load -->
                        <svg id="gaugeLoad" percent="0">
                            <circle cx="120" cy="120" r="64"></circle>
                            <circle cx="120" cy="120" r="64"></circle>

                            <text class="value" x="120" y="130" text-anchor="middle">
                                <tspan>0%</tspan>
                            </text>
                            <text class="caption" x="120" y="220" text-anchor="middle">
                                <tspan>Network Load</tspan>
                            </text>
                        </svg>
                        <!-- Gauge: > CPU Usage -->
                        <svg id="gaugeCPU" percent="0">
                            <circle cx="120" cy="120" r="64"></circle>
                            <circle cx="120" cy="120" r="64"></circle>
                            <text class="value" x="120" y="130" text-anchor="middle">
                                <tspan>0%</tspan>
                            </text>
                            <text class="caption" x="120" y="220" text-anchor="middle">
                                <tspan>CPU Usage</tspan>
                            </text>
                        </svg>
                        <!-- Gauge: > RAM Usage -->
                        <svg id="gaugeRAM" percent="0">
                            <circle cx="120" cy="120" r="64"></circle>
                            <circle cx="120" cy="120" r="64"></circle>
                            <text class="value" x="120" y="130" text-anchor="middle">
                                <tspan>0%</tspan>
                            </text>
                            <text class="caption" x="120" y="220" text-anchor="middle">
                                <tspan>RAM Usage</tspan>
                            </text>
                        </svg>
                        <!-- Gauge: > Flash Usage -->
                        <svg id="gaugeFlash" percent="0">
                            <circle cx="120" cy="120" r="64"></circle>
                            <circle cx="120" cy="120" r="64"></circle>
                            <text class="value" x="120" y="130" text-anchor="middle">
                                <tspan>0%</tspan>
                            </text>
                            <text class="caption" x="120" y="220" text-anchor="middle">
                                <tspan>Flash Usage</tspan>
                            </text>
                        </svg>
                        <!-- Gauge: > Storage -->
                        <svg id="gaugeStorage" percent="0">
                            <circle cx="120" cy="120" r="64"></circle>
                            <circle cx="120" cy="120" r="64"></circle>
                            <text class="value" x="120" y="130" text-anchor="middle">
                                <tspan>0%</tspan>
                            </text>
                            <text class="caption" x="120" y="220" text-anchor="middle">
                                <tspan>Storage Usage</tspan>
                            </text>
                        </svg>
                        <!--/ Animated SVG Gauges -->
                    </div>

                    <h3>Info</h3>
                    <div class="row">
                        <div class="col-md">
                            <p class="fw-bold">Hostname: <span class="fw-light">biboletin.eu</span></p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold">OS: <span class="fw-light">Linux, Ubuntu server 20.04</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p class="fw-bold">System datetime: <span class="fw-light">Wednesday, May 18, 2022 11:34
                                    PM</span></p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold">Running processes: <span class="fw-light">15</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p class="fw-bold">System uptime: <span class="fw-light">4 days, 17 hours, 23 minutes</span>
                            </p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold">Local disk space: <span class="fw-light">5 Gb used / 25 Gb free / 30 Gb
                                    total</span></p>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>
    <script>
        $(function () {
            setInterval(function () {
                percent = Math.floor(Math.random() * 100);
                $("#gaugeLoad").attr("percent", percent);
                $("#gaugeLoad text.value tspan").text(percent + "%");
            }, 1000);

            setInterval(function () {
                percent = Math.floor(Math.random() * 100);
                $("#gaugeCPU").attr("percent", percent);
                $("#gaugeCPU text.value tspan").text(percent + "%");
            }, 1000);

            setInterval(function () {
                percent = Math.floor(Math.random() * 100);
                $("#gaugeRAM").attr("percent", percent);
                $("#gaugeRAM text.value tspan").text(percent + "%");
            }, 1000);

            setInterval(function () {
                percent = Math.floor(Math.random() * 100);
                $("#gaugeFlash").attr("percent", percent);
                $("#gaugeFlash text.value tspan").text(percent + "%");
            }, 1000);

            setInterval(function () {
                percent = Math.floor(Math.random() * 100);
                $("#gaugeStorage").attr("percent", percent);
                $("#gaugeStorage text.value tspan").text(percent + "%");
            }, 1000);

        });
    </script>
</body>

</html>