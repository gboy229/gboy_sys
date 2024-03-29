@extends('admin::layouts.master')

@section('js')
    <script src="{{statics('js/jquery.js')}}"></script>
    <script src="{{statics('js/bootstrap.min.js')}}"></script>
    <script src="{{statics('js/jquery.scrollUp.js')}}}"></script>

    <!-- jQuery UI JS -->
    <script src="{{statics('js/jquery-ui-v1.10.3.js')}}"></script>

    <!-- Just Gage -->
    <script src="{{statics('js/justgage/justgage.js')}}"></script>
    <script src="{{statics('js/justgage/raphael.2.1.0.min.js')}}"></script>

    <!-- Flot Charts -->
    <script src="{{statics('js/flot/jquery.flot.js')}}"></script>
    <script src="{{statics('js/flot/jquery.flot.orderBar.min.js')}}"></script>
    <script src="{{statics('js/flot/jquery.flot.stack.min.js')}}"></script>
    <script src="{{statics('js/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{statics('js/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{statics('js/flot/jquery.flot.resize.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{statics('js/menu.js')}}"></script>
    <script src="{{statics('js/custom-index2.js')}}"></script>

    <script type="text/javascript">
        //ScrollUp
        $(function () {
            $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                topDistance: '300', // Distance from top before showing element (px)
                topSpeed: 300, // Speed back to top (ms)
                animation: 'fade', // Fade, slide, none
                animationInSpeed: 400, // Animation in speed (ms)
                animationOutSpeed: 400, // Animation out speed (ms)
                scrollText: 'Top', // Text for element
                activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
        });
    </script>
@stop
@section('content')
    <div class="dashboard-wrapper-lg">

        <!-- Row starts -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="mini-widget">
                    <div class="mini-widget-heading clearfix">
                        <div class="pull-left">Visitors</div>
                        <div class="pull-right"><i class="fa fa-angle-up"></i> 12.2<sup>%</sup></div>
                    </div>
                    <div class="mini-widget-body clearfix">
                        <div class="pull-left">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="pull-right number">8757</div>
                    </div>
                    <!--                 <div class="mini-widget-footer center-align-text">
                                      <span>Better than last week</span>
                                    </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="mini-widget">
                    <div class="mini-widget-heading clearfix">
                        <div class="pull-left">Shares</div>
                        <div class="pull-right"><i class="fa fa-angle-up"></i> 18.3<sup>%</sup></div>
                    </div>
                    <div class="mini-widget-body clearfix">
                        <div class="pull-left">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="pull-right number">3780</div>
                    </div>
                    <!--                 <div class="mini-widget-footer center-align-text">
                                      <span>Better than last week</span>
                                    </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="mini-widget">
                    <div class="mini-widget-heading clearfix">
                        <div class="pull-left">Downloads</div>
                        <div class="pull-right"><i class="fa fa-angle-down"></i> 21.9<sup>%</sup></div>
                    </div>
                    <div class="mini-widget-body clearfix">
                        <div class="pull-left">
                            <i class="fa fa-upload"></i>
                        </div>
                        <div class="pull-right number">12658</div>
                    </div>
                    <!--                 <div class="mini-widget-footer center-align-text">
                                      <span>Better than last week</span>
                                    </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="mini-widget mini-widget-grey">
                    <div class="mini-widget-heading clearfix">
                        <div class="pull-left">Signups</div>
                        <div class="pull-right"><i class="fa fa-angle-up"></i> 67.1<sup>%</sup></div>
                    </div>
                    <div class="mini-widget-body clearfix">
                        <div class="pull-left">
                            <i class="fa fa-coffee"></i>
                        </div>
                        <div class="pull-right number">1135</div>
                    </div>
                    <!--                 <div class="mini-widget-footer center-align-text">
                                      <span>Better than last week</span>
                                    </div> -->
                </div>
            </div>
        </div>
        <!-- Row ends -->

        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Sessions
                            <span class="mini-title">
                      Right now
                    </span>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div id="area-chart" class="chart-height-md"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Mobile vs Desktop
                        </div>
                    </div>
                    <div class="widget-body">
                        <div id="mobVsDesk" class="chart-height-md"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Demography
                        </div>
                    </div>
                    <div class="widget-body">
                        <div id="mob-desktop" class="chart-height-md"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->

        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Social Statistics
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="social-stats">
                            <!-- Row Starts -->
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="social-icon facebook-bg">
                                        <i class="fa fa-facebook fa-2x"></i>
                                    </div>
                                    <div class="stats-details">
                                        <h3>8985</h3>
                                        <h6 class="text-success">+ 21%</h6>
                                        <h5>Likes</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="social-icon twitter-bg">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </div>
                                    <div class="stats-details">
                                        <h3>4927</h3>
                                        <h6 class="text-success">+ 15%</h6>
                                        <h5>Tweets</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="social-icon linkedin-bg">
                                        <i class="fa fa-linkedin fa-2x"></i>
                                    </div>
                                    <div class="stats-details">
                                        <h3>764</h3>
                                        <h6 class="text-success">+ 11%</h6>
                                        <h5>Connections</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="social-icon gplus-bg">
                                        <i class="fa fa-google-plus fa-2x"></i>
                                    </div>
                                    <div class="stats-details">
                                        <h3>1278</h3>
                                        <h6 class="text-warning">- 8%</h6>
                                        <h5>Shares</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Row Ends -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Downloads
                        </div>
                    </div>
                    <div class="widget-body">
                        <div id="gg1" class="gauge chart-height-md"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->

        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Monthly Revenue &amp; Growth
                            <span class="mini-title">
                      Sub title
                    </span>
                        </div>
                        <span class="tools">
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fa fa-cog"></i>
                    </a>
                  </span>
                    </div>
                    <div class="widget-body">
                        <div id="monthlyRevenueGrowth" class="chart-height-md"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Monthly Expenses &amp; Cancellations
                        </div>
                        <span class="tools">
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fa fa-cog"></i>
                    </a>
                  </span>
                    </div>
                    <div class="widget-body">
                        <div id="monthlyExpensesCancellations" class="chart-height-md"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->

        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Project Activity
                        </div>
                    </div>
                    <div class="widget-body">
                        <ul class="project-activity">
                            <li class="activity-list warning">
                                <div class="detail-info">
                                    <small class="text-muted">
                                        9:30
                                    </small>
                                    <p class="message">
                                        Meeting with Jason
                                    </p>
                                </div>
                            </li>
                            <li class="activity-list info">
                                <div class="detail-info">
                                    <small class="text-muted">
                                        Mon, 9 Feb
                                    </small>
                                    <p class="message">
                                        Created
                                        <a class="text-info" href="" data-original-title="" title="">
                                            Task
                                        </a>
                                        for Willams.
                                    </p>
                                </div>
                            </li>
                            <li class="activity-list success">
                                <div class="detail-info">
                                    <small class="text-muted">
                                        Fri, 13 Feb
                                    </small>
                                    <p class="message">
                                        Show demo to team
                                    </p>
                                </div>
                            </li>
                            <li class="activity-list">
                                <div class="detail-info">
                                    <small class="text-muted">
                                        Sun, 21 Feb
                                    </small>
                                    <p class="message">
                                        Watch football
                                        <a class="text-info" href="" data-original-title="" title="">
                                            Match
                                        </a>
                                        with Xoimi.
                                    </p>
                                </div>
                            </li>
                            <li class="activity-list warning">
                                <div class="detail-info">
                                    <small class="text-muted">
                                        Wed, 25 Feb
                                    </small>
                                    <p class="message">
                                        Launch new mobile <a class="text-warning" href="" data-original-title="" title="">App</a>.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Chats
                        </div>
                    </div>
                    <div class="widget-body">
                        <ul class="messages-list clearfix">
                            <li>Are we meeting today?</li>
                            <li>Yes, what time suits you?</li>
                            <li>I was thinking after lunch, I have a meeting in the morning</li>
                            <li>Are we meeting today?</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Appointments
                        </div>
                    </div>
                    <div class="widget-body">
                        <!-- Row starts -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="bg-primary-light">
                                    <div class="spacer-xs">
                                        <h5 class="text-primary no-margin">Today</h5>
                                        <h3 class="text-primary no-margin">Friday</h3>
                                        <ul class="appointments">
                                            <li>Meet Mr. John @ 9:30 AM</li>
                                            <li>Interview call @ 11:00 PM</li>
                                            <li>Send greetings to Sandy by 3:00 PM</li>
                                            <li>Dinner with Sndy @ 8:00 PM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div id="datepicker"></div>
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->

    </div>
@stop


