<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

    <title>Nzuri Trust</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        @include('partials._main_navigation')

        <div class="main">

            @include('partials._user_navigation')

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">@yield('title', 'Nzuri Trust')</h1>

                    <div class="row">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Agent Transactions Over The Past 7 Days</h5>
                                        {{-- <h6 class="card-subtitle text-muted">Doughnut charts are excellent at showing
                                            the relational proportions between data.</h6> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="chart chart-sm">
                                            <canvas id="agent-transactions-1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Agent Transactions Over The Past 30 Days</h5>
                                        {{-- <h6 class="card-subtitle text-muted">Pie charts are excellent at showing the
                                            relational proportions between data.</h6> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="chart chart-sm">
                                            <canvas id="agent-transactions-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Agent Transactions Over The Past 90 Days</h5>
                                        {{-- <h6 class="card-subtitle text-muted">Pie charts are excellent at showing the
                                            relational proportions between data.</h6> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="chart chart-sm">
                                            <canvas id="agent-transactions-3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Top 5 Accounts Over The Past 7 Days</h5>
                                        {{-- <h6 class="card-subtitle text-muted">Doughnut charts are excellent at showing
                                            the relational proportions between data.</h6> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="chart chart-sm">
                                            <canvas id="account-transactions-1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Top 5 Accounts Over The Past 30 Days</h5>
                                        {{-- <h6 class="card-subtitle text-muted">Pie charts are excellent at showing the
                                            relational proportions between data.</h6> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="chart chart-sm">
                                            <canvas id="account-transactions-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Top 5 Accounts Over The Past 90 Days</h5>
                                        {{-- <h6 class="card-subtitle text-muted">Pie charts are excellent at showing the
                                            relational proportions between data.</h6> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="chart chart-sm">
                                            <canvas id="account-transactions-3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </main>

            @include('partials._footer')

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js'
        integrity='sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=='
        crossorigin='anonymou' referrerpolicy='no-referrer'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js'
        integrity='sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>";

    @include('dashboard.chart_config')
</body>

</html>
