<?php 
include("script/inic.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>OLT</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="script/loguot.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.php">General</a></li>
                          <li><a  href="buttons.php">Buttons</a></li>
                          <li><a  href="panels.php">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Calendar</a></li>
                          <li><a  href="gallery.php">Gallery</a></li>
                          <li><a  href="todo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="blank.php">Blank Page</a></li>
                          <li><a  href="login.php">Login</a></li>
                          <li><a  href="lock_screen.php">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.php">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.php">Basic Table</a></li>
                          <li><a  href="responsive_table.php">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.php">Morris</a></li>
                          <li><a  href="chartjs.php">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p>Place your content here.</p>
              <div id="PeopleTableContainer" style="width: 600px;"></div>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

  

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

    <!-- jTable Scripts -->
    <link href="assets/jtable/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link href="assets/jtable/scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
    <script src="assets/jtable/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="assets/jtable/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="assets/jtable/scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <!-- Fin jTable Scripts -->
  <script type="text/javascript">

        $(document).ready(function () {

            //Prepare jTable
                $('#PeopleTableContainer').jtable({
                        title: 'Olt Herrera',
                        actions: {
                                listAction: 'script/PersonActions.php?action=list',
                                createAction: 'script/PersonActions.php?action=create',
                                updateAction: 'script/PersonActions.php?action=update',
                                deleteAction: 'script/PersonActions.php?action=delete'
                        },
                        fields: {
                                 id: {
                        title: 'ID',
                        key: true,
                        create: false,
                        edit: false,
                        list: true,
                        width: '10%'
                    },
                 //Subtabla Telefonos
                 /*
                    telefono: {
                       title: 'Telf',
                       width: '5%',
                       sorting: false,
                       edit: false,
                       create: false,
                       display: function (telefonosdata) {
                        //Imagen de Telefonos
                        var $img = $('<img src="../images/phone_metro.png" title="Editar Telefono" />');
                        //Abrir listado telefonos
                        $img.click(function () {
                            $('#PeopleTableContainer').jtable('openChildTable',
                                    $img.closest('tr'),
                                    {
                                        title: telefonosdata.record.sn + ' - Datos de Telefonos',
                                        actions: {
                                            listAction: 'telefonos.php?action=list&sn=' + telefonosdata.record.sn,
                                            deleteAction: 'telefonos.php?action=delete',
                                            updateAction: 'telefonos.php?action=update',
                                            createAction: 'telefonos.php?action=create'
                                        },
                                        fields: {

                                            id: {
                                                type: 'hidden'
                                            },

                                            sn: {
                                                type: 'hidden',
                                                title: 'sn',
                                                width: '15%',
                                                defaultValue: telefonosdata.record.sn
                                            },

                                            telefono: {
                                                title: 'telefono',
                                                width: '15%'
                                            }



                                      }
                                    }, function (data) { //opened handler
                                        data.childTable.jtable('load');
                                    });
                            });
                        return $img;
                        }
                    },
                */
                //Subtabla Internet
                /*
                internet: {
                       title: 'Inter',
                       width: '5%',
                       sorting: false,
                       edit: false,
                       create: false,
                       display: function (internetdata) {
                        //Imagen de internet
                        var $img = $('<img src="../images/list_metro.png" title="Editar Internet" />');
                        //Abrir listado internet
                        $img.click(function () {
                            $('#PeopleTableContainer').jtable('openChildTable',
                                    $img.closest('tr'),
                                    {
                                        actions: {
                                            listAction: 'internet.php?action=list&ontid=' + internetdata.record.ontid  + '&fsp=' +internetdata.record.fsp,
                                            deleteAction: 'internet.php?action=delete',
                                            updateAction: 'internet.php?action=update',
                                            createAction: 'internet.php?action=create'
                                        },
                                        fields: {

                                            id: {
                                                type: 'hidden'
                                            },

                                            fsp: {
                                                type: 'hidden',
                                                title: 'fsp',
                                                width: '15%'
                                            },
                                            ontid: {
                                                type: 'hidden',
                                                title: 'ontid',
                                                width: '15%'
                                            },
                                            us: {
                                                title: 'us',
                                                width: '15%'
                                            },
                                            ds: {
                                                title: 'ds',
                                                width: '15%'
                                            },

                                            mode: {
                                                title: 'mode',
                                                width: '15%'
                                            }



                                      }
                                    }, function (data) { //opened handler
                                        data.childTable.jtable('load');
                                    });
                            });
                        return $img;
                        }
                    },
                    */
                                fsp: {
                    title: 'F/S/P',
                    width: '20%'
                        },
                                ontid: {
                                        title: 'ONTID',
                                        width: '10%'
                                },
                sn: {
                    title: 'SN',
                    width: '30%'
                },
                us: {
                    title: 'us',
                    width: '15%',
                    defaultValue: '102',
                    options: {  '101': '1M', '102': '2M', '103': '3M', '105': '5M','110': '10M', '112': '12M', '120': '20M', '150': '50M', '': '---' }
                },
                ds: {
                    title: 'ds',
                    width: '15%',
                    defaultValue: '112',
                    options: {  '101': '1M', '106': '6M', '112': '12M', '125': '25M', '150': '50M', '200': '100M', '300': '200M', '': '---' }
                },

                mode: {
                    title: 'mode',
                    width: '15%',
                    options: { 'Bridge': 'Bridge', 'Router': 'Router' }
                },
                linea1: {
                    title: 'linea1',
                    width: '15%'
                },
                                description: {
                                        title: 'DESCRIPTION',
                                        width: '20%'
                                }

                        }
                });

                //Load person list from server
                $('#PeopleTableContainer').jtable('load');

        });
  </script>

  </body>
</html>
