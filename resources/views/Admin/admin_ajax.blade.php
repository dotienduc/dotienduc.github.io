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


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="admin/assets/plugins/charts-flot/excanvas.min.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

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
                        <li data-stats="online"><a href="javascript:;"><img src="../admin/assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                        <li data-stats="online"><a href="javascript:;"><img src="../admin/assets/demo/avatar/potter.png" alt=""><span>David Tennant</span></a></li>
                        <li data-stats="online"><a href="javascript:;"><img src="../admin/assets/demo/avatar/potter.png" alt=""><span>Anna Johansson</span></a></li>
                        <li data-stats="busy"><a href="javascript:;"><img src="../admin/assets/demo/avatar/potter.png" alt=""><span>Eric Jackson</span></a></li>
                        <li data-stats="away"><a href="javascript:;"><img src="../admin/assets/demo/avatar/potter.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="admin/assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="admin/assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="admin/assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="admin/assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
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
                <li>Advanced Tables</li>
                <li class="active">Products Tables</li>
            </ol>
            <h1>Products Tables</h1>
            <div class="options">

                <div class="btn-toolbar">

                    <a href="#"><button class="btn btn-success" id="create_record"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>  

                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="{{ url('admin/excel') }}">Excel File (*.xlsx)</a></li>
                            <li><a href="{{ url('admin/pdf') }}">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-sky">
                    <div class="panel-heading">
                        <h4>Data Tables</h4>
                        <div class="options"> 
                            <a href="javascript:;"><i class="fa fa-cog"></i></a>
                            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div class="panel-body collapse in">
                        <table class="table table-dark table-striped" id="admin_table">
                            <thead>
                              <tr>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->
</div> <!--wrap -->
</div> <!-- page-content -->

<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Record</h4>
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-4" >First Name : </label>
            <div class="col-md-8">
             <input type="text" name="first_name" id="first_name" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Last Name : </label>
            <div class="col-md-8">
             <input type="text" name="last_name" id="last_name" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Select Profile Image : </label>
            <div class="col-md-8">
             <input type="file" name="image" id="image" />
             <span id="store_image"></span>
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Password: </label>
            <div class="col-md-8">
             <input type="text" name="password" id="password" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Email : </label>
            <div class="col-md-8">
             <input type="text" name="email" id="email" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Role : </label>
            <div class="col-md-8">
             <select name="role" id="role" class="form-control" required="required">
                <option value="1">Admin</option>
                <option value="0">Employee</option>
            </select>
            </div>
           </div>
           <br />
           <div class="form-group" align="center">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
           </div>
         </form>
        </div>
     </div>
    </div>
</div>
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@include('Admin.footer')

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="admin/assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="admin/assets/js/jqueryui-1.10.3.min.js'))</script>
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
<script type='text/javascript' src='assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='assets/js/application.js'></script> 
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<script>
    $(document).ready(function(){
        $('#admin_table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax:{
                     url: "{{ route('ajaxAdmin.index') }}",
                 },
                 columns:[
                 {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta){
                     return "<img src={{ URL::to('/') }}/admin/assets//demo/avatar/" + data + " width='70' class='img-thumbnail' />";
                 },
                 orderable: false
             },
             {
                data: 'firstName',
                name: 'firstName'
            },
            {
                data: 'lassName',
                name: 'lassName'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'country',
                name: 'country'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
            ]
        });
    $('#create_record').click(function(){
        $('#sample_form')[0].reset();
        $('#formModal').modal('show');
        $('.modal-title').text("Add New Record");
        $('#action_button').val("Add");
        $('#action').val("Add");
    }); 

    $('#sample_form').on('submit', function(e){
        e.preventDefault();
        if($('#action').val() == 'Add'){
            $.ajax({
                url: "{{ route('ajaxAdmin.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data){
                    var html = '';
                    if(data.errors){
                        html = '<div class="alert alert-danger">';
                        for(var i=0; i< data.errors.length; i++){
                            html += '<p>' + data.errors[i] + '</p>';
                        }
                        html += '</div>';
                    }
                    if(data.success){
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#sample_form')[0].reset();
                        $('#admin_table').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                }

            })
        }
        if($('#action').val() == 'Edit'){
            $.ajax({
                url: "{{ route('ajaxAdmin.update') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data){
                    var html = '';
                    if(data.errors){
                        html = '<div class="alert alert-danger">';
                        for(var i=0; i< data.errors.length; i++){
                            html += '<p>' + data.errors[i] + '</p>';
                        }
                        html += '</div>';
                    }
                    if(data.success){
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#sample_form')[0].reset();
                        $('#store_image').html('');
                        $('#admin_table').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                }

            })
        }
    });

    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
            url:"ajaxAdmin/"+id+"/edit",
            dataType: "json",
            success:function(html){
                $('#first_name').val(html.data.firstName);
                $('#last_name').val(html.data.lassName);
                $('#store_image').html("<img src={{ URL::to('/') }}/admin/assets//demo/avatar/" + html.data.image + " width='70' class='img-thumbnail' />");
                $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
                $('#password').val(html.data.password);
                $('#email').val(html.data.email);
                $('#role').val(html.data.role);
                $('#hidden_id').val(html.data.id);
                $('.modal-title').text("Edit New Record");
                $('#action_button').val("Edit");
                $('#action').val("Edit");
                $('#formModal').modal('show');
            }
        });
    });

    var user_id;
    $(document).on('click', '.delete', function(){
        user_id = $(this).attr('id');
        $('#confirmModal').modal('show');
    });

    $('#ok_button').click(function(){
        $.ajax({
            url:"ajaxAdmin/destroy/"+user_id,
            beforeSend:function(){
                $('#ok_button').text('Deleting...');
            },
            success:function(data){
                setTimeout(function(){
                   $('#confirmModal').modal('hide');
                   $('#admin_table').DataTable().ajax.reload();
               }, 2000);
            }
        });
    });
});
</script>
</body>

<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
</html>