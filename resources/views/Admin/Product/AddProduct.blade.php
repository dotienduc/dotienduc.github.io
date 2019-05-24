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

    <link rel="stylesheet" href="assets/css/styles.minc726.css?=140">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>


    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link rel='stylesheet' type='text/css' href='assets/plugins/form-select2/select2.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/form-multiselect/css/multi-select.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/form-daterangepicker/daterangepicker-bs3.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/form-fseditor/fseditor.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/form-tokenfield/bootstrap-tokenfield.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/js/jqueryui.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/codeprettifier/prettify.css' /> 
    <link rel='stylesheet' type='text/css' href='assets/plugins/form-toggle/toggles.css' /> 
</head>

<body class="">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44426473-2', 'auto');
      ga('send', 'pageview');

  </script>
  @include('Admin.header')

  <div id="page-container">
    @include('Admin.navigation')
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
                        <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                        <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                        <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                        <li data-stats="busy"><a href="javascript:;"><img src="assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                        <li data-stats="away"><a href="javascript:;"><img src="assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
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
        <!-- <form action="#" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-sm-3 control-label">Simplest Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Password Field</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input with Placeholder</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Placeholder">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Disabled Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Disabled Input" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Read only field</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" readonly="readonly" value="Read only text goes here">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">With pre-defined value</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="http://">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">With max length</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Popover Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Tooltip Input</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Select Box</label>
                <div class="col-sm-6">
                    <select class="form-control" id="source">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option><option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option><option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Disabled Dropdown</label>
                <div class="col-sm-6">
                    <select class="form-control" disabled placeholder="Disabled Dropdown">
                        <option>Alaska</option>
                        <option>Lorem ipsum dolor.</option>
                        <option>Amet, impedit aperiam?</option>
                        <option>Nemo, alias, quasi?</option>
                        <option>Inventore, expedita.</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Multi-select Box</label>
                <div class="col-sm-6">
                    <select class="form-control" multiple>
                        <option>Lorem ipsum dolor.</option>
                        <option>Amet, impedit aperiam?</option>
                        <option>Nemo, alias, quasi?</option>
                        <option>Inventore, expedita.</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Inline Radio</label>
                <div class="col-sm-6">
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio1" value="option1"> Option 1
                    </label>
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio2" value="option2"> Option 2
                    </label>
                    <label class="radio-inline">
                      <input type="radio" id="inlineradio3" value="option3"> Option 3
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Radio</label>
                <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else
                      </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Inline Checkbox</label>
                <div class="col-sm-6">
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox1" value="option1"> Option 1
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox2" value="option2"> Option 2
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlinecheckbox3" value="option3"> Option 3
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Checkbox</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Option one is this and that
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Option two can be something else
                      </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Autogrow Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control autosize"></textarea>
                </div>
                <div class="col-sm-3"><p class="help-block">Textbox auto grows as you type!</p></div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Fullscreen Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control fullscreen"></textarea>
                </div>
            </div>
        </form>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="btn-toolbar">
                        <button class="btn-primary btn">Submit</button>
                        <button class="btn-default btn">Cancel</button>
                    </div>
                </div>
            </div>
        </div> -->
        <form action="{{ url('admin/AddProduct') }}" method="post" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <label for="">Name Product</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Unit Price</label>
                    <input type="text" name="unit_price" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Promotion Price</label>
                    <input type="text" name="promotion_price" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="" placeholder="Input field">
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin-top: 30px;">
                <select name="category_id" id="inputCategory_id" class="form-control" required="required">
                    @foreach($category as $key => $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="inputStatus" value="1" checked="checked">
                        Hiện
                    </label>
                    <label>
                        <input type="radio" name="status" id="inputStatus" value="0">
                        Ẩn
                    </label>
                </div>
                <div class="form-group">
                    <label for="">Unit</label>
                    <input type="text" name="unit" class="form-control" id="" placeholder="Input field">
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="new" id="inputStatus" value="1" checked="checked">
                        Mới
                    </label>
                    <label>
                        <input type="radio" name="new" id="inputStatus" value="0">
                        Cũ
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

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

<script type='text/javascript' src='assets/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='assets/js/enquire.js'></script> 
<script type='text/javascript' src='assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='assets/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-multiselect/js/jquery.multi-select.min.js'></script> 
<script type='text/javascript' src='assets/plugins/quicksearch/jquery.quicksearch.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-typeahead/typeahead.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-select2/select2.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-autosize/jquery.autosize-min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js'></script> 
<script type='text/javascript' src='assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-daterangepicker/daterangepicker.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-datepicker/js/bootstrap-datepicker.js'></script> 
<script type='text/javascript' src='assets/plugins/form-daterangepicker/moment.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-fseditor/jquery.fseditor-min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-jasnyupload/fileinput.js'></script> 
<script type='text/javascript' src='assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js'></script> 
<script type='text/javascript' src='assets/demo/demo-formcomponents.js'></script> 
<script type='text/javascript' src='assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='assets/js/application.js'></script> 
<script type='text/javascript' src='assets/demo/demo.js'></script> 

</body>

<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
</html>