<!DOCTYPE html>
<html lang="en">

<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
<head>
    <meta charset="utf-8">
    <title>Avant</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

    <link rel="stylesheet" href="{{ url('admin/assets/css/styles.minc726.css?=140') }}">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>


    <link href="{{ url('admin/assets/demo/variations/default.css') }}" rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
    <link href="{{ url('admin/assets/demo/variations/default.css') }}" rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="admin/assets/plugins/charts-flot/excanvas.min.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/form-select2/select2.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/form-multiselect/css/multi-select.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/form-daterangepicker/daterangepicker-bs3.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/form-fseditor/fseditor.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/form-tokenfield/bootstrap-tokenfield.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/js/jqueryui.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/codeprettifier/prettify.css') }}" /> 
    <link rel='stylesheet' type='text/css' href="{{ url('admin/assets/plugins/form-toggle/toggles.css') }}" /> 
</head>

<body class="">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script',"{{ url('admin/www.google-analytics.com/analytics.js') }}",'ga');

      ga('create', 'UA-44426473-2', 'auto');
      ga('send', 'pageview');

  </script>
  <div id="headerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-brown">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-pencil"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Create Post
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-grape">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tiles-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-primary">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tiles-footer">
                            Messages
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-inverse">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tiles-footer">
                            Gallery
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-midnightblue">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-orange">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-wrench"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Plugins
                        </div>
                    </a>
                </div>
                            
            </div>
        </div>
    </div>

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
        <a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.html">Avant</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">John McCartney <i class="fa fa-caret-down"></i></span><img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img src="assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
                            <div class="pull-right"><h5>Howdy, John!</h5><small>Logged in as <span>john275</span></small></div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
                            <li><a href="#">Account <i class="pull-right fa fa-cog"></i></a></li>
                            <li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="text-right">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-envelope"></i><span class="badge">1</span></a>
                <ul class="dropdown-menu messages arrow">
                    <li class="dd-header">
                        <span>You have 1 new message(s)</span>
                        <span><a href="#">Mark all Read</a></span>
                    </li>
                    <div class="scrollthis">
                        <li><a href="#" class="active">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">9 hrs</span>
                            <img src="assets/demo/avatar/corbett.png" alt="avatar" />
                            <div><span class="name">Simon Corbett</span><span class="msg">I am signing off for today.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">2 days</span>
                            <img src="assets/demo/avatar/tennant.png" alt="avatar" />
                            <div><span class="name">David Tennant</span><span class="msg">How are you doing?</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                    </div>
                    <li class="dd-footer"><a href="#">View All Messages</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-bell"></i><span class="badge">3</span></a>
                <ul class="dropdown-menu notifications arrow">
                    <li class="dd-header">
                        <span>You have 3 new notification(s)</span>
                        <span><a href="#">Mark all Seen</a></span>
                    </li>
                    <div class="scrollthis">
                        <li>
                            <a href="#" class="notification-user active">
                                <span class="time">4 mins</span>
                                <i class="fa fa-user"></i>
                                <span class="msg">New user Registered. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-danger active">
                                <span class="time">20 mins</span>
                                <i class="fa fa-bolt"></i>
                                <span class="msg">CPU at 92% on server#3! </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-success active">
                                <span class="time">1 hr</span>
                                <i class="fa fa-check"></i> 
                                <span class="msg">Server#1 is live. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-warning">
                                <span class="time">2 hrs</span>
                                <i class="fa fa-exclamation-triangle"></i> 
                                <span class="msg">Database overloaded. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-order">
                                <span class="time">10 hrs</span>
                                <i class="fa fa-shopping-cart"></i> 
                                <span class="msg">New order received. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-failure">
                                <span class="time">12 hrs</span>
                                <i class="fa fa-times-circle"></i>
                                <span class="msg">Application error!</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-fix">
                                <span class="time">12 hrs</span>
                                <i class="fa fa-wrench"></i>
                                <span class="msg">Installation Succeeded.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-success">
                                <span class="time">18 hrs</span>
                                <i class="fa fa-check"></i>
                                <span class="msg">Account Created. </span>
                            </a>
                        </li>
                    </div>
                    <li class="dd-footer"><a href="#">View All Notifications</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="headerbardropdown"><span><i class="fa fa-level-down"></i></span></a>
            </li>
            <li class="dropdown demodrop">
                <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><i class="fa fa-magic"></i></a>

                <ul class="dropdown-menu arrow dropdown-menu-form" id="demo-dropdown">
                    <li>
                        <label for="demo-header-variations" class="control-label">Header Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-header-variations">
                            <li><a class="color-black" href="javascript:;"  data-headertheme="header-black.html"></a></li>
                            <li><a class="color-dark" href="javascript:;"  data-headertheme="default.html"></a></li>
                            <li><a class="color-red" href="javascript:;" data-headertheme="header-red.html"></a></li>
                            <li><a class="color-blue" href="javascript:;" data-headertheme="header-blue.html"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="demo-color-variations" class="control-label">Sidebar Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-color-variations">
                            <li><a class="color-lite" href="javascript:;"  data-theme="default.html"></a></li>
                            <li><a class="color-steel" href="javascript:;" data-theme="sidebar-steel.html"></a></li>
                            <li><a class="color-lavender" href="javascript:;" data-theme="sidebar-lavender.html"></a></li>
                            <li><a class="color-green" href="javascript:;" data-theme="sidebar-green.html"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="fixedheader">Fixed Header</label>
                        <div id="fixedheader" style="margin-top:5px;"></div> 
                    </li>
                </ul>
            </li>
        </ul>
    </header>

  <div id="page-container">
    <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">
                    <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
                     <form>
                        <input type="text" class="search-query" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Advanced Tables</span></a>
                    <ul class="acc-menu">
                        <li><a href="{{ route('products') }}">Products Tables</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Advanced Forms</span><span class="badge badge-primary">5</span></a>
                    <ul class="acc-menu">
                        <li><a href="{{ route('products.add') }}">Form Add Products</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="acc-menu">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="acc-menu">
                        <li><a href="charts-flot.html">Extensible</a></li>
                        <li><a href="charts-svg.html">Interactive</a></li>
                        <li><a href="charts-canvas.html">Lightweight</a></li>
                        <li><a href="charts-inline.html">Inline</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                <li><a href="gallery.html"><i class="fa fa-camera"></i> <span> Gallery</span> </a></li>
                <li><a href="javascript:;"><i class="fa fa-flag"></i> <span>Icons</span> <span class="badge badge-orange">2</span></a>
                    <ul class="acc-menu">
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="javascript:;"><i class="fa fa-briefcase"></i> <span>Extras</span> <span class="badge badge-danger">1</span></a>
                    <ul class="acc-menu">
                        <li><a href="extras-timeline.html">Timeline</a></li>
                        <li><a href="extras-profile.html">Profile</a></li>
                        <li><a href="extras-inbox.html">Inbox</a></li>
                        <li><a href="extras-search.html">Search Page</a></li>
                        <li><a href="extras-chatroom.html">Chat Room</a></li>
                        <li><a href="extras-invoice.html">Invoice</a></li>
                        <li><a href="extras-registration.html">Registration</a></li>
                        <li><a href="extras-signupform.html">Sign Up</a></li>
                        <li><a href="extras-forgotpassword.html">Password Reset</a></li>
                        <li><a href="extras-login.html">Login 1</a></li>
                        <li><a href="extras-login2.html">Login 2</a></li>
                        <li><a href="extras-404.html">404 Page</a></li>
                        <li><a href="extras-500.html">500 Page</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-sitemap"></i> <span>Unlimited Level Menu</span></a>
                    <ul class="acc-menu">
                        <li><a href="javascript:;">Menu Item 1</a></li>
                        <li><a href="javascript:;">Menu Item 2</a>
                            <ul class="acc-menu">
                                <li><a href="javascript:;">Menu Item 2.1</a></li>
                                <li><a href="javascript:;">Menu Item 2.2</a>
                                    <ul class="acc-menu">
                                        <li><a href="javascript:;">Menu Item 2.2.1</a></li>
                                        <li><a href="javascript:;">Menu Item 2.2.2</a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">And deeper yet!</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR -->
    <div id="page-rightbar">

        <div id="chatarea">
            <div class="chatuser">
                <span class="pull-right">Jane Smith</span>
                <a id="hidechatbtn" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div class="chathistory">
                <div class="chatmsg">
                    <p>Hey! How's it going?</p>
                    <span class="timestamp">1:20:42 PM</span>
                </div>
                <div class="chatmsg sent">
                    <p>Not bad... i guess. What about you? Haven't gotten any updates from you in a long time.</p>
                    <span class="timestamp">1:20:46 PM</span>
                </div>
                <div class="chatmsg">
                    <p>Yeah! I've been a bit busy lately. I'll get back to you soon enough.</p>
                    <span class="timestamp">1:20:54 PM</span>
                </div>
                <div class="chatmsg sent">
                    <p>Alright, take care then.</p>
                    <span class="timestamp">1:21:01 PM</span>
                </div>
            </div>
            <div class="chatinput">
                <textarea name="" rows="2"></textarea>
            </div>
        </div>

        <div id="widgetarea">
            <div class="widget">
                <div class="widget-heading">
                    <a href="javascript:;" data-toggle="collapse" data-target="#accsummary"><h4>Account Summary</h4></a>
                </div>
                <div class="widget-body collapse in" id="accsummary">
                    <div class="widget-block" style="background: #7ccc2e; margin-top:10px;">
                        <div class="pull-left">
                            <small>Current Balance</small>
                            <h5>$71,182</h5>
                        </div>
                        <div class="pull-right"><div id="currentbalance"></div></div>
                    </div>
                    <div class="widget-block" style="background: #595f69;">
                        <div class="pull-left">
                            <small>Account Type</small>
                            <h5>Business Plan A</h5>
                        </div>
                        <div class="pull-right">
                            <small class="text-right">Monthly</small>
                            <h5>$19<small>.99</small></h5>
                        </div>
                    </div>
                    <span class="more"><a href="#">Upgrade Account</a></span>
                </div>
            </div>


            <div id="chatbar" class="widget">
                <div class="widget-heading">
                    <a href="javascript:;" data-toggle="collapse" data-target="#chatbody"><h4>Online Contacts <small>(5)</small></h4></a>
                </div>
                <div class="widget-body collapse in" id="chatbody">
                    <ul class="chat-users">
                        <li data-stats="online"><a href="javascript:;"><img src="{{ url('admin/assets/demo/avatar/potter.png') }}" alt=""><span>Jeremy Potter</span></a></li>
                        <li data-stats="online"><a href="javascript:;"><img src="{{ url('admin/assets/demo/avatar/tennant.png') }}" alt=""><span>David Tennant</span></a></li>
                        <li data-stats="online"><a href="javascript:;"><img src="{{ url('admin/assets/demo/avatar/johansson.png') }}" alt=""><span>Anna Johansson</span></a></li>
                        <li data-stats="busy"><a href="javascript:;"><img src="{{ url('admin/assets/demo/avatar/jackson.png') }}" alt=""><span>Eric Jackson</span></a></li>
                        <li data-stats="away"><a href="javascript:;"><img src="{{ url('admin/assets/demo/avatar/jobs.png') }}" alt=""><span>Howard Jobs</span></a></li>
                            
                            </ul>
                            <span class="more"><a href="#">See all</a></span>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <a href="javascript:;" data-toggle="collapse" data-target="#taskbody"><h4>Pending Tasks <small>(5)</small></h4></a>
                        </div>
                        <div class="widget-body collapse in" id="taskbody">
                            <div class="contextual-progress" style="margin-top:10px;">
                                <div class="clearfix">
                                    <div class="progress-title">Backend Development</div>
                                    <div class="progress-percentage"><span class="label label-info">Today</span> 25%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="contextual-progress">
                                <div class="clearfix">
                                    <div class="progress-title">Bug Fix</div>
                                    <div class="progress-percentage"><span class="label label-primary">Tomorrow</span> 17%</div>
                                </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-primary" style="width: 17%"></div>
                              </div>
                          </div>
                          <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Javascript Code</div>
                                <div class="progress-percentage">70%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                          </div>
                      </div>
                      <div class="contextual-progress">
                        <div class="clearfix">
                            <div class="progress-title">Preparing Documentation</div>
                            <div class="progress-percentage">6%</div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger" style="width: 6%"></div>
                      </div>
                  </div>
                  <div class="contextual-progress">
                    <div class="clearfix">
                        <div class="progress-title">App Development</div>
                        <div class="progress-percentage">20%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-orange" style="width: 20%"></div>
                  </div>
              </div>

              <span class="more"><a href="ui-progressbars.html">View all Pending</a></span>
          </div>
      </div>



      <div class="widget">
        <div class="widget-heading">
            <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
        </div>
        <div class="widget-body collapse in" id="storagespace">
            <div class="clearfix" style="margin-bottom: 5px;margin-top:10px;">
                <div class="progress-title pull-left">1.31 GB of 1.50 GB used</div>
                <div class="progress-percentage pull-right">87.3%</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
            </div>
        </div>
    </div>

    <div class="widget">
        <div class="widget-heading">
            <a href="javascript:;" data-toggle="collapse" data-target="#serverstatus"><h4>Server Status</h4></a>
        </div>
        <div class="widget-body collapse in" id="serverstatus">
            <div class="clearfix" style="padding: 10px 24px;">
                <div class="pull-left">
                    <div class="easypiechart" id="serverload" data-percent="67">
                        <span class="percent"></span>
                    </div>
                    <label for="serverload">Load</label>
                </div>
                <div class="pull-right">
                    <div class="easypiechart" id="ramusage" data-percent="20.6">
                        <span class="percent"></span>
                    </div>
                    <label for="ramusage">RAM: 422MB</label>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- END RIGHTBAR -->
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li>Form</li>
                <li class="active">Form Components</li>
            </ol>

            <h1>Form Components</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Basic Form Elements</h4>
                    <div class="options">   
                        <a href="javascript:;"><i class="fa fa-cog"></i></a>
                        <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                        <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
                <div class="panel-body collapse in">
        <form action="{{ url('admin/EditSlide', ['id' => $slide->id]) }}" method="post" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <label for="">Name Slide</label>
                    <input type="text" name="name" value="{{ $slide->name }}" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <img src="{{ url('img/product/'.$slide->image.'') }}" width="100" height="100">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="" placeholder="Input field">
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin-top: 70px;">
                
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputStatus" value="1" 
                        @if($slide->status == 1) checked  @endif>
                        Hiện
                    </label>
                    <label>
                        <input type="radio" name="status" id="inputStatus" value="0"
                        @if($slide->status == 0) checked  @endif>
                        Ẩn
                    </label>
                </div>
                <button type="submit" name="btnSave" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
</div>  


<!-- Colorpicker Modal -->
<div class="modal fade modals" id="cpicker_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Colorpickers</h4>
      </div>
      <div class="modal-body">
        <form action="#" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">Default</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="hex" value="#fff">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">RGBA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="rgba" value="rgba(255, 146, 180,0.9)">
                    <p class="help-block">RGBA format specified via data-tag</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input Group</label>
                <div class="col-sm-6">
                    <div class="input-group color cpicker" data-color="rgb(255, 146, 180)" data-color-format="rgb">
                        <input type="text" readonly class="form-control" value="">
                        <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180); margin-left: 8px;"></i></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->





</div> <!-- container -->

</div> <!--wrap -->

</div> <!-- page-content -->


<footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li>AVANT &copy; 2014</li>
        </ul>
        <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
    </div>
</footer>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="admin/assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="admin/assets/js/jqueryui-1.10.3.min.js') }}"))</script>
-->

<script type='text/javascript' src="{{ url('admin/assets/js/jquery-1.10.2.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/jqueryui-1.10.3.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/bootstrap.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/enquire.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/jquery.cookie.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/jquery.nicescroll.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/codeprettifier/prettify.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/easypiechart/jquery.easypiechart.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/sparklines/jquery.sparklines.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-toggle/toggle.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-multiselect/js/jquery.multi-select.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/quicksearch/jquery.quicksearch.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-typeahead/typeahead.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-select2/select2.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-autosize/jquery.autosize-min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-daterangepicker/daterangepicker.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-datepicker/js/bootstrap-datepicker.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-daterangepicker/moment.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-fseditor/jquery.fseditor-min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-jasnyupload/fileinput.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/demo/demo-formcomponents.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/placeholdr.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/js/application.js') }}"></script> 
<script type='text/javascript' src="{{ url('admin/assets/demo/demo.js') }}"></script> 

</body>

<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
</html>