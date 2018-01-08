<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AEACADEMIA | sistema</title>
    {!! Html::style('admin/css/bootstrap.min.css') !!}
    {!! Html::style('admin/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('admin/css/plugins/toastr/toastr.min.css') !!}
    {!! Html::style('admin/js/plugins/gritter/jquery.gritter.css') !!}
    {!! Html::style('admin/css/animate.css') !!}
    {!! Html::style('admin/css/style.css') !!}

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Sara Marlene</strong>
                             </span> <span class="text-muted text-xs block">Docente <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Perfil</a></li>
                                <li><a href="login.html">Salir</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Mantenimiento</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Semestre Academico</a></li>
                            <li><a href="#">Modalidad Acaedmica</a></li>
                            <li><a href="#">Carrera</a></li>
                            <li><a href="#">Turno</a></li>
                            <li><a href="#">Colegio</a></li>
                            <li><a href="#">Distrito</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Inscripciones</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Alumno</a></li>
                            <li><a href="#">Incripcion</a></li>
                            <li><a href="#">Pago de Cuotas</a></li>
                            <li><a href="#">Examen</a></li>
                            <li><a href="#">Registro de Examen</a></li>
                        </ul>
                    </li>
                   <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Seguridad</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Usuarios</a></li>
                            <li><a href="#">Perfiles</a></li>
                            <li><a href="#">Permisos</a></li>
                            <li><a href="#">Modulos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Estudiantes</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Notas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Control de Pagos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Proximos a Pagar</a></li>
                            <li><a href="#">Deudores</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido a  Academia ALBERT EINSTEIN</span>
                </li>

                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>

            </ul>
        </nav>
        </div>
        @yield('titulo')

            <div class="wrapper wrapper-content">
                @yield('contenido')
            </div>
            <div class="footer">
                <div class="pull-right">
                    Academia <strong>Albert Einstein</strong>.
                </div>
                <div>
                    <strong>Copyright</strong> Academia Albert Einstein &copy; 2017-2018
                </div>
            </div>

        </div>
        </div>
 

    <!-- Mainly scripts -->
    {!! Html::script('admin/js/jquery-3.1.1.min.js') !!}
    {!! Html::script('admin/js/bootstrap.min.js') !!}
    {!! Html::script('admin/js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! Html::script('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    {!! Html::script('admin/js/plugins/flot/jquery.flot.js') !!}
    {!! Html::script('admin/js/plugins/flot/jquery.flot.tooltip.min.js') !!}
    {!! Html::script('admin/js/plugins/flot/jquery.flot.spline.js') !!}
    {!! Html::script('admin/js/plugins/flot/jquery.flot.resize.js') !!}
    {!! Html::script('admin/js/plugins/flot/jquery.flot.pie.js') !!}
    {!! Html::script('admin/js/plugins/peity/jquery.peity.min.js') !!}
    {!! Html::script('admin/js/demo/peity-demo.js') !!}
    {!! Html::script('admin/js/inspinia.js') !!}
    {!! Html::script('admin/js/plugins/pace/pace.min.js') !!}
    {!! Html::script('admin/js/plugins/jquery-ui/jquery-ui.min.js') !!}
    {!! Html::script('admin/js/plugins/gritter/jquery.gritter.min.js') !!}
    {!! Html::script('admin/js/plugins/sparkline/jquery.sparkline.min.js') !!}
    {!! Html::script('admin/js/demo/sparkline-demo.js') !!}
    {!! Html::script('admin/js/plugins/chartJs/Chart.min.js') !!}
    {!! Html::script('admin/js/plugins/toastr/toastr.min.js') !!}

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>
</body>
</html>
