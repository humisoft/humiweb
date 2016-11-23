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
	  <?php 
		include("menuTop.php");
	  ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
	  <?php 
		include("menuLat.php");
	  ?>
      
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
