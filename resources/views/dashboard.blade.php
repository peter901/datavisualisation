<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://d3js.org/d3.v4.js"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <style>
        .ribbon_4 {
            fill-opacity: 0.7;
        }

        .ribbon_4:hover {
            fill-opacity: 1;
        }

        .group-tick_4 line {
            stroke: #000;
        }

        #chart_5 {
            width: 500px;
            height: 500px;
            font-family: Arial, sans-serif;
        }

        .axis line,
        .axis path {
            stroke: #ccc;
        }

        .radarArea {
            fill-opacity: 0.7;
        }

        #chart_6 {
            width: 500px;
            height: 500px;
        }

        .ribbon {
            fill-opacity: 0.7;
        }

        .group text {
            font-size: 12px;
        }

        .color-key {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .color-key span {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-right: 5px;
        }

        .tooltip {
            position: absolute;
            pointer-events: none;
            padding: 8px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        .node {
            cursor: pointer;
        }

        .node circle {
            fill: steelblue;
            stroke: #fff;
        }

        .node text {
            font-size: 12px;
            text-anchor: middle;
        }

        .node_3 circle {
            fill: steelblue;
            stroke: #000;
        }

        .node_3 text {
            font-size: 10px;
            text-anchor: middle;
        }

        svg {
            width: 100%;
            height: auto;
            font-family: sans-serif;
        }

        #chart_7 {
            width: 600px;
            height: 600px;
        }

        .link {
            fill: none;
            stroke-opacity: 0.6;
        }

        .node {
            font-size: 12px;
            font-family: Arial, sans-serif;
        }

        #chart_8 {
            width: 600px;
            height: 400px;
        }

        #chart_9 {
            width: 600px;
            height: 400px;
        }

        #chart_10 {
            width: 600px;
            height: 400px;
            background-color: #f0f0f0;
        }

        .label {
            font-family: Arial, sans-serif;
            font-size: 12px;
            fill: #333;
            text-anchor: middle;
            pointer-vents: none;
        }

        #sunburst-chart_15 {
            margin-top: 10;
            margin-left: 120px;
        }

        #horizontal-graph_17 {
            margin-left: 120px;
        }

        .radar-chart_40 {
            width: 500px;
            height: 500px;
        }
    </style>



    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block"> Water Quality </span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
                    <!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>
                    <!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul>
                    <!-- End Messages Dropdown Items -->

                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <!--<li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>-->
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"> Average {{ $filter_param }} Per District
                                        ({{ $dognut_units }})<br /></h5>
                                    <form method="POST" action="/">
                                        @csrf
                                        Select Parameter to filter:
                                        <select id="parameter" name="filter">
                                            @foreach ($parameters as $p)
                                                <option {{ $p->name == $filter_param ? 'selected' : '' }}
                                                    value="{{ $p->name }}">
                                                    {{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                        <input type="submit" value="Filter" />
                                    </form>
                                    <div id="my_dataviz_dougnut"></div>

                                    {{-- dougnut graph --}}
                                    <script>
                                        // set the dimensions and margins of the graph
                                        var width_d = 850,
                                            height_d = 550,
                                            margin_d = 40;

                                        // The radius of the pieplot is half the width or half the height (smallest one). I subtract a bit of margin_d.
                                        var radius = Math.min(width_d, height_d) / 2 - margin_d;

                                        // append the svg object to the div called 'my_dataviz_dougnut'
                                        var svg_d = d3.select("#my_dataviz_dougnut")
                                            .append("svg")
                                            .attr("width", width_d)
                                            .attr("height", height_d)
                                            .append("g")
                                            .attr("transform", "translate(" + width_d / 2 + "," + height_d / 2 + ")");

                                        // Create dummy data
                                        var data = @php echo $dognut_data @endphp;

                                        // set the color scale
                                        var color = d3.scaleOrdinal()
                                            .domain(Object.keys(data)) // Use Object.keys() to get the keys of the data object
                                            .range(['blue', 'orange', 'green', 'brown', 'Indigo', 'red', 'black', 'Gold', 'Coral', 'pink',
                                                'Maroon', 'Magenta', 'Green', 'Rust', 'blue', 'Amber', 'blue', 'orange', 'green', 'brown', 'Indigo',
                                                'red'
                                            ]);

                                        // Compute the position of each group on the pie:
                                        var pie = d3.pie()
                                            .value(function(d) {
                                                return d.value;
                                            });
                                        var data_ready = pie(d3.entries(data));

                                        // Build the pie chart: Basically, each part of the pie is a path that we build using the arc function.
                                        var paths = svg_d.selectAll('whatever')
                                            .data(data_ready)
                                            .enter()
                                            .append('path')
                                            .attr('d', d3.arc()
                                                .innerRadius(100) // This is the size of the donut hole
                                                .outerRadius(radius)
                                            )
                                            .attr('fill', function(d) {
                                                return color(d.data.key);
                                            })
                                            .attr("stroke", "black")
                                            .style("stroke-width", "2px")
                                            .style("opacity", 0.7);

                                        // Add legend
                                        var legend = svg_d.selectAll(".legend")
                                            .data(data_ready)
                                            .enter()
                                            .append("g")
                                            .attr("class", "legend")
                                            .attr("transform", function(d, i) {
                                                return "translate(0," + (i * 20 - height_d / 4) + ")";
                                            });

                                        legend.append("rect")
                                            .attr("x", width_d / 2 - 18)
                                            .attr("width", 18)
                                            .attr("height", 18)
                                            .style("fill", function(d) {
                                                return color(d.data.key);
                                            });

                                        legend.append("text")
                                            .attr("x", width_d / 2 - 24)
                                            .attr("y", 9)
                                            .attr("dy", "0.35em")
                                            .style("text-anchor", "end")
                                            .text(function(d) {
                                                return d.data.key + ": " + d.data.value;;
                                            });
                                    </script>


                                    <!-- End Line Chart -->

                                </div>


                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <!--<li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>-->
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"> Average {{ $filter_param }} Per District
                                        ({{ $dognut_units }})<br /></h5>
                                    <form method="POST" action="/">
                                        @csrf
                                        Select Parameter to filter:
                                        <select id="parameter" name="filter">
                                            @foreach ($parameters as $p)
                                                <option {{ $p->name == $filter_param ? 'selected' : '' }}
                                                    value="{{ $p->name }}">
                                                    {{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                        <input type="submit" value="Filter" />
                                    </form>
                                    <div id="my_dataviz"></div>

                                    {{-- circular barchart  --}}
                                    <script>
                                        // set the dimensions and margin_ds of the graph
                                        const margin = {
                                                top: 100,
                                                right: 0,
                                                bottom: 0,
                                                left: 0
                                            },
                                            width = 960 - margin.left - margin.right,
                                            height = 560 - margin.top - margin.bottom,
                                            innerRadius = 90,
                                            outerRadius = Math.min(width, height) / 2; // the outerRadius goes from the middle of the SVG area to the border

                                        // append the svg object
                                        const svg = d3.select("#my_dataviz")
                                            .append("svg")
                                            .attr("width", width + margin.left + margin.right)
                                            .attr("height", height + margin.top + margin.bottom)
                                            .append("g")
                                            .attr("transform", `translate(${width/2+margin.left}, ${height/2+margin.top})`);

                                        //d3.csv("https://raw.githubusercontent.com/holtzy/data_to_viz/master/Example_dataset/7_OneCatOneNum.csv").then(
                                        //  function(data) {
                                        data = @php echo $circular_barchart @endphp;

                                        // Scales
                                        const x = d3.scaleBand()
                                            .range([0, 2 * Math
                                                .PI
                                            ]) // X axis goes from 0 to 2pi = all around the circle. If I stop at 1Pi, it will be around a half circle
                                            .align(0) // This does nothing
                                            .domain(data.map(d => d.district)); // The domain of the X axis is the list of states.
                                        const y = d3.scaleRadial()
                                            .range([innerRadius, outerRadius]) // Domain will be define later.
                                            .domain([0, 14000]); // Domain of Y is from 0 to the max seen in the data

                                        // Add the bars
                                        svg.append("g")
                                            .selectAll("path")
                                            .data(data)
                                            .join("path")
                                            .attr("fill", "#69b3a2")
                                            .attr("d", d3.arc() // imagine your doing a part of a donut plot
                                                .innerRadius(innerRadius)
                                                .outerRadius(d => y(d['Value']))
                                                .startAngle(d => x(d.district))
                                                .endAngle(d => x(d.district) + x.bandwidth())
                                                .padAngle(0.01)
                                                .padRadius(innerRadius))

                                        // Add the labels
                                        svg.append("g")
                                            .selectAll("g")
                                            .data(data)
                                            .join("g")
                                            .attr("text-anchor", function(d) {
                                                return (x(d.district) + x.bandwidth() / 2 + Math.PI) % (2 * Math.PI) < Math.PI ? "end" :
                                                    "start";
                                            })
                                            .attr("transform", function(d) {
                                                return "rotate(" + ((x(d.district) + x.bandwidth() / 2) * 180 / Math.PI - 90) + ")" +
                                                    "translate(" + (y(d['Value']) + 10) + ",0)";
                                            })
                                            .append("text")
                                            .text(function(d) {
                                                return (d.district)
                                            })
                                            .attr("transform", function(d) {
                                                return (x(d.district) + x.bandwidth() / 2 + Math.PI) % (2 * Math.PI) < Math.PI ?
                                                    "rotate(180)" : "rotate(0)";
                                            })
                                            .style("font-size", "11px")
                                            .attr("alignment-baseline", "middle")

                                        //});
                                    </script>

                                    <!-- End Line Chart -->

                                </div>


                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <!--<li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>-->
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"> Distribution of pH, Turbidity and Electrical Conductivity
                                        Per District<br /></h5>

                                    <div id="circle_packing"></div>

                                    {{-- circle_packing --}}
                                    <script>
                                        // Define the chart function
                                        const chart_3 = () => {
                                            // Define the root and focus variables
                                            const root_3 = pack_3(data_3);
                                            let focus_3 = root_3;
                                            let view_3;

                                            // Create the SVG element
                                            const svg_3 = d3.create("svg")
                                                .attr("viewBox", `-${width_3 / 2} -${height_3 / 2} ${width_3} ${height_3}`)
                                                .style("display", "block")
                                                .style("margin_d", "0 -14px")
                                                .style("background", color_3(2))
                                                .style("cursor", "pointer")
                                                .on("click", (event) => zoom_3(event, root_3));

                                            // Create the circles
                                            const node_3 = svg_3.append("g")
                                                .selectAll("circle")
                                                .data(root_3.descendants().slice(1))
                                                .join("circle")
                                                .attr("fill", d => {
                                                    if (d.data.name.includes("Electricity Conductivity")) {
                                                        return colorScale(d.value - industryStandard);
                                                    } else if (d.data.name.includes("pH")) {
                                                        return colorScale(d.value - industryStandardIron);
                                                    } else if (d.data.name.includes("Turbidity")) {
                                                        return colorScale(d.value - industryStandardTurbidity);
                                                    } else {
                                                        return "white";
                                                    }
                                                })
                                                .attr("pointer-events", d => !d.children ? "none" : null)
                                                .on("mouseover", function() {
                                                    d3.select(this).attr("stroke", "#000");
                                                })
                                                .on("mouseout", function() {
                                                    d3.select(this).attr("stroke", null);
                                                })
                                                .on("click", (event, d) => focus_3 !== d && (zoom_3(event, d), event.stopPropagation()));

                                            // Create the labels
                                            const label_3 = svg_3.append("g")
                                                .style("font", "10px sans-serif")
                                                .attr("pointer-events", "none")
                                                .attr("text-anchor", "middle")
                                                .selectAll("text")
                                                .data(root_3.descendants())
                                                .join("text")
                                                .style("fill-opacity", d => d.parent === root_3 ? 1 : 0)
                                                .style("display", d => d.parent === root_3 ? "inline" : "none")
                                                .text(d => d.data.name);

                                            // Call the zoomTo function to initialize the zoom
                                            zoomTo_3([root_3.x, root_3.y, root_3.r * 2]);

                                            // Function to zoom to a specific view
                                            function zoomTo_3(v) {
                                                const k_3 = width_3 / v[2];
                                                view_3 = v;
                                                label_3.attr("transform", d => `translate(${(d.x - v[0]) * k_3},${(d.y - v[1]) * k_3})`);
                                                node_3.attr("transform", d => `translate(${(d.x - v[0]) * k_3},${(d.y - v[1]) * k_3})`);
                                                node_3.attr("r", d => d.r * k_3);
                                            }

                                            // Function to handle zooming
                                            function zoom_3(event, d) {
                                                const focus0_3 = focus_3;
                                                focus_3 = d;

                                                const transition_3 = svg_3.transition()
                                                    .duration(event.altKey ? 7500 : 750)
                                                    .tween("zoom", d => {
                                                        const i_3 = d3.interpolateZoom(view_3, [focus_3.x, focus_3.y, focus_3.r * 2]);
                                                        return t => zoomTo_3(i_3(t));
                                                    });

                                                label_3.filter(function(d) {
                                                        return d.parent === focus_3 || this.style.display === "inline";
                                                    })
                                                    .transition(transition_3)
                                                    .style("fill-opacity", d => d.parent === focus_3 ? 1 : 0)
                                                    .on("start", function(d) {
                                                        if (d.parent === focus_3) this.style.display = "inline";
                                                    })
                                                    .on("end", function(d) {
                                                        if (d.parent !== focus_3) this.style.display = "none";
                                                    });
                                            }

                                            return svg_3.node();
                                        };

                                        // Set the width and height of the SVG
                                        const width_3 = 800;
                                        const height_3 = 800;

                                        // Define the color scale
                                        const color_3 = d3.scaleSequential([8, 0], d3.interpolateMagma);

                                        // Define the pack function
                                        const pack_3 = (data) => d3.pack()
                                            .size([width_3 - 2, height_3 - 2])
                                            .padding(3)
                                            (d3.hierarchy(data)
                                                .sum(d => d.value)
                                                .sort((a, b) => b.value - a.value));

                                        let circle_data = @php echo $circle_parking @endphp;

                                        // Define the data
                                        const data_3 = {
                                            name: "root",
                                            value: 100,
                                            children: circle_data
                                        };

                                        // Define industry standards for the variables
                                        const industryStandard = 5;
                                        const industryStandardIron = 5.5;
                                        const industryStandardTurbidity = 25;

                                        // Define the color scale for the circles
                                        const colorScale = d3.scaleSequential()
                                            .domain([-4, 4])
                                            .interpolator(d3.interpolateRgb("green", "red"));

                                        // Select the container and append the chart
                                        const container_3 = d3.select("#circle_packing");
                                        container_3.append(() => chart_3());
                                    </script>
                                    <!-- End Line Chart -->
                                </div>
                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <!--<li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>-->
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"> Distribution of Total Alkalinity and Total hardness Per
                                        District<br /></h5>

                                    <div id="circle_alkalinity_hardness_parking"></div>

                                    {{-- Total Alkalinity and Total hardness --}}
                                    <script>
                                        // Define the chart function
                                        const chart_4 = () => {
                                            // Define the root and focus variables
                                            const root_4 = pack_4(data_4);
                                            let focus_4 = root_4;
                                            let view_4;

                                            // Create the SVG element
                                            const svg_4 = d3.create("svg")
                                                .attr("viewBox", `-${width_4 / 2} -${height_4 / 2} ${width_4} ${height_4}`)
                                                .style("display", "block")
                                                .style("margin", "0 -14px")
                                                .style("background", color_4(2))
                                                .style("cursor", "pointer")
                                                .on("click", (event) => zoom_4(event, root_4));

                                            // Create the circles
                                            const node_4 = svg_4.append("g")
                                                .selectAll("circle")
                                                .data(root_4.descendants().slice(1))
                                                .join("circle")
                                                .attr("fill", d => {
                                                    if (d.data.name.includes("Total Alkalinity")) {
                                                        return colorScale(1);
                                                    } else if (d.data.name.includes("Total hardness")) {
                                                        return colorScale(9);
                                                    } else {
                                                        return "white";
                                                    }
                                                })
                                                .attr("pointer-events", d => !d.children ? "none" : null)
                                                .on("mouseover", function() {
                                                    d3.select(this).attr("stroke", "#000");
                                                })
                                                .on("mouseout", function() {
                                                    d3.select(this).attr("stroke", null);
                                                })
                                                .on("click", (event, d) => focus_4 !== d && (zoom_4(event, d), event.stopPropagation()));

                                            // Create the labels
                                            const label_4 = svg_4.append("g")
                                                .style("font", "10px sans-serif")
                                                .attr("pointer-events", "none")
                                                .attr("text-anchor", "middle")
                                                .selectAll("text")
                                                .data(root_4.descendants())
                                                .join("text")
                                                .style("fill-opacity", d => d.parent === root_4 ? 1 : 0)
                                                .style("display", d => d.parent === root_4 ? "inline" : "none")
                                                .text(d => d.data.name);

                                            // Call the zoomTo function to initialize the zoom
                                            zoomTo_4([root_4.x, root_4.y, root_4.r * 2]);

                                            // Function to zoom to a specific view
                                            function zoomTo_4(v) {
                                                const k_4 = width_4 / v[2];
                                                view_4 = v;
                                                label_4.attr("transform", d => `translate(${(d.x - v[0]) * k_4},${(d.y - v[1]) * k_4})`);
                                                node_4.attr("transform", d => `translate(${(d.x - v[0]) * k_4},${(d.y - v[1]) * k_4})`);
                                                node_4.attr("r", d => d.r * k_4);
                                            }

                                            // Function to handle zooming
                                            function zoom_4(event, d) {
                                                const focus0_4 = focus_4;
                                                focus_4 = d;

                                                const transition_4 = svg_4.transition()
                                                    .duration(event.altKey ? 7500 : 750)
                                                    .tween("zoom", d => {
                                                        const i_4 = d3.interpolateZoom(view_4, [focus_4.x, focus_4.y, focus_4.r * 2]);
                                                        return t => zoomTo_4(i_4(t));
                                                    });

                                                label_4.filter(function(d) {
                                                        return d.parent === focus_4 || this.style.display === "inline";
                                                    })
                                                    .transition(transition_4)
                                                    .style("fill-opacity", d => d.parent === focus_4 ? 1 : 0)
                                                    .on("start", function(d) {
                                                        if (d.parent === focus_4) this.style.display = "inline";
                                                    })
                                                    .on("end", function(d) {
                                                        if (d.parent !== focus_4) this.style.display = "none";
                                                    });
                                            }

                                            return svg_4.node();
                                        };

                                        // Set the width and height of the SVG
                                        const width_4 = 800;
                                        const height_4 = 800;

                                        // Define the color scale
                                        const color_4 = d3.scaleSequential([8, 0], d3.interpolateMagma);

                                        // Define the pack function
                                        const pack_4 = (data) => d3.pack()
                                            .size([width_4 - 2, height_4 - 2])
                                            .padding(3)
                                            (d3.hierarchy(data)
                                                .sum(d => d.value)
                                                .sort((a, b) => b.value - a.value));

                                        let circle_alkalinity_hardness_parking = @php echo $circle_alkalinity_hardness_parking @endphp;

                                        // Define the data
                                        const data_4 = {
                                            name: "root",
                                            value: 100,
                                            children: circle_alkalinity_hardness_parking
                                        };

                                        // Define industry standards for the variables
                                        //const industryStandard = 5;
                                        //const industryStandardIron = 5.5;
                                        //const industryStandardTurbidity = 25;

                                        // Define the color scale for the circles
                                        const colorScale_4 = d3.scaleSequential()
                                            .domain([-4, 4])
                                            .interpolator(d3.interpolateRgb("green", "red"));

                                        // Select the container and append the chart
                                        const container_4 = d3.select("#circle_alkalinity_hardness_parking");
                                        container_4.append(() => chart_4());
                                    </script>

                                    <!-- End Line Chart -->

                                </div>


                            </div>
                        </div>
                        <!-- End Reports -->


                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->

            </div>
            <!-- End Recent Activity -->

            <!-- Budget Report -->

            <!-- End Budget Report -->

            <!-- Website Traffic -->

            <!-- End Website Traffic -->

            <!-- News & Updates Traffic -->

            <!-- End News & Updates -->

            <div></div>
            <!-- End Right side columns -->

            <div></div>

        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span> Water Quality </span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

</html>
