<!DOCTYPE html>
<html>
<head>
    <title>后台管理</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="{{statics('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{statics('css/new.css')}}" rel="stylesheet">
    <link href="{{statics('css/charts-graphs.css')}}" rel="stylesheet">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" type="text/css" href="{{statics('css/datepicker.css')}}">

    <link href="{{statics('fonts/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{statics('js/html5shiv.js')}}"></script>
    <script src="{{statics('js/respond.min.js')}}"></script>
    <![endif]-->
    @yield('css')
    @yield('js')
</head>
<body>

<!-- Header Start -->
<header>
    <a href="index.html" class="logo">
        <img src="{{statics('img/logo.png')}}" alt="Logo"/>
    </a>
    <div class="pull-right">
        <ul id="mini-nav" class="clearfix">
            <li class="list-box hidden-xs">
                <a href="#" data-toggle="modal" data-target="#modalMd">
                    <span class="text-white">Code</span> <i class="fa fa-code"></i>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-danger" id="myModalLabel5">Coding Style </h4>
                            </div>
                            <div class="modal-body">
                                <img src="{{statics('img/documentation.png')}}" alt="Esquare Admin">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-box dropdown">
                <a id="drop5" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-film"></i>
                </a>
                <span class="info-label info-bg">9+</span>
                <ul class="dropdown-menu stats-widget clearfix">
                    <li>
                        <h5 class="text-success">$37895</h5>
                        <p>Revenue <span class="text-success">+2%</span></p>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h5 class="text-warning">47,892</h5>
                        <p>Downloads <span class="text-warning">+39%</span></p>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (warning)</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h5 class="text-danger">28214</h5>
                        <p>Uploads <span class="text-danger">-7%</span></p>
                        <div class="progress progress-mini">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (danger)</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="list-box dropdown">
                <a id="drop5" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-calendar"></i>
                </a>
                <span class="info-label success-bg">6</span>
                <ul class="dropdown-menu server-activity">
                    <li>
                        <p><i class="fa fa-flag text-info"></i> Pending request<span class="time">3 hrs</span></p>
                    </li>
                    <li>
                        <p><i class="fa fa-fire text-warning"></i> Server Crashed<span class="time">3mins</span></p>
                    </li>
                    <li>
                        <p><i class="fa fa-user text-success"></i> 3 New users<span class="time">1 min</span></p>
                    </li>
                    <li>
                        <p><i class="fa fa-bell text-danger"></i>9 pending requests<span class="time">5 min</span></p>
                    </li>
                    <li>
                        <p><i class="fa fa-plane text-info"></i> Performance<span class="time">25 min</span></p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope text-warning"></i>12 new emails<span class="time">25 min</span></p>
                    </li>
                    <li>
                        <p><i class="fa fa-cog icon-spin text-success"></i> Location settings<span class="time">4 hrs</span></p>
                    </li>
                </ul>
            </li>
            <li class="list-box user-profile">
                <a id="drop7" href="#" role="button" class="dropdown-toggle user-avtar" data-toggle="dropdown">
                    <img src="{{statics('img/user5.png')}}" alt="Bluemoon User">
                </a>
                <ul class="dropdown-menu server-activity">
                    <li>
                        <p><i class="fa fa-cog text-info"></i> Account Settings</p>
                    </li>
                    <li>
                        <p><i class="fa fa-fire text-warning"></i> Payment Details</p>
                    </li>
                    <li>
                        <div class="demo-btn-group clearfix">
                            <a href="#" data-original-title="" title="">
                                <i class="fa fa-facebook fa-lg icon-rounded info-bg"></i>
                            </a>
                            <a href="#" data-original-title="" title="">
                                <i class="fa fa-twitter fa-lg icon-rounded twitter-bg"></i>
                            </a>
                            <a href="#" data-original-title="" title="">
                                <i class="fa fa-linkedin fa-lg icon-rounded linkedin-bg"></i>
                            </a>
                            <a href="#" data-original-title="" title="">
                                <i class="fa fa-pinterest fa-lg icon-rounded danger-bg"></i>
                            </a>
                            <a href="#" data-original-title="" title="">
                                <i class="fa fa-google-plus fa-lg icon-rounded success-bg"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="demo-btn-group clearfix">
                            <button href="#" class="btn btn-danger">
                                Logout
                            </button>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<!-- Header End -->



<div class="dashboard-container">

    <div class="container">
        <!-- Top Nav Start -->
        <div id='cssmenu'>
            <ul>
                <li class='active'>
                    <a href='#'>
                        <i class="fa fa-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="forms.html">
                        <i class="fa fa-align-justify"></i>
                        Forms
                    </a>
                </li>
                <li class=''>
                    <a href='#'><i class="fa fa-bar-chart-o"></i>Graphs</a>
                    <ul>
                        <li><a href='flot.html'>Flot Graphs</a></li>
                        <li><a href='graphs.html'>Google Graph</a></li>
                        <li><a href='vector-maps.html'>Vector Maps</a></li>
                    </ul>
                </li>
                <li class=''>
                    <a href='#'><i class="fa fa-flask"></i>UI Elements</a>
                    <ul>
                        <li><a href='ui-elements.html'>UI Elements</a></li>
                        <li><a href='panels.html'>Panels</a></li>
                        <li><a href='notifications.html'>Notifications</a></li>
                        <li><a href='icons.html'>Icons</a></li>
                    </ul>
                </li>
                <li class=''>
                    <a href='#'><i class="fa fa-dashboard"></i>Extras</a>
                    <ul>
                        <li><a href='#'>Blog</a>
                            <ul>
                                <li><a href='blog.html'>Blog</a></li>
                                <li><a href='blog-full-page.html'>Blog Full Page</a></li>
                            </ul>
                        </li>
                        <li><a href='edit-profile.html'>Edit Profile</a></li>
                        <li><a href='invoice.html'>Invoice</a></li>
                        <li><a href='default.html'>default</a></li>
                        <li><a href='#'>Submenu</a>
                            <ul>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                            </ul>
                        </li>
                        <li><a href='login.html'>Login</a></li>
                        <li><a href='help.html'>Help</a></li>
                        <li><a href='404.html'>404</a></li>
                        <li><a href='500.html'>500</a></li>
                    </ul>
                </li>
                <li class=''>
                    <a href='#'><i class="fa fa-table"></i>Tables</a>
                    <ul>
                        <li><a href='tables.html'>Tables</a></li>
                        <li><a href='pricing.html'>Pricing Plan</a></li>
                        <li><a href='timeline.html'>Timeline</a></li>
                    </ul>
                </li>
                <li>
                    <a href="media.html">
                        <i class="fa fa-picture-o"></i>
                        Media
                    </a>
                </li>
                <li class="hidden-sm">
                    <a href="calendar.html">
                        <i class="fa fa-calendar"></i>
                        Calendar
                    </a>
                </li>
                <li class="hidden-sm">
                    <a href="typography.html">
                        <i class="fa fa-font"></i>
                        Typography
                    </a>
                </li>
            </ul>
        </div>
        <!-- Top Nav End -->

        <!-- Sub Nav End -->
        <div class="sub-nav hidden-sm hidden-xs hidden" >
            <ul>
                <li><a href="" class="heading">子分类</a></li>
                <li class="hidden-sm hidden-xs">
                    <a href="" class="">分子类</a>
                </li>
            </ul>
            <div class="custom-search hidden-sm hidden-xs">
                <input type="text" class="search-query" placeholder="Search here ...">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <!-- Sub Nav End -->

        <!-- Dashboard Wrapper Start -->
        @yield('content')
        <!-- Dashboard Wrapper End -->

        <footer>
            <p>© BlueMoon 2013-15</p>
        </footer>

    </div>
</div>