
<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <base href="{{ asset('')}}">
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>ACLAV</title>



        <!-- page styles -->
        <link rel="stylesheet" href="assets/template-2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/template-2/min/main.min.css">
        <!--<link rel="stylesheet" href="assets/template-2/vendor/bootstrap-select/bootstrap-select.css">-->
        <link rel="stylesheet" href="assets/template-2/vendor/dropzone/dropzone.css">
        <link rel="stylesheet" href="assets/template-2/vendor/slider/slider.css">
        <link rel="stylesheet" href="assets/template-2/vendor/bootstrap-datepicker/datepicker.css">
        <link rel="stylesheet" href="assets/template-2/vendor/toastr/toastr.css">
        
        @yield('extraCss')

        <!-- 
        <link rel="stylesheet" href="assets/template-2/vendor/datatables/jquery.dataTables.css">
        <link rel="stylesheet" href="assets/template-2/bootstrap/css/menu.css">        
        <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">
        -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="assets/template-2/vendor/modernizr.js"></script>

</head>


<!-- body -->

<body >
 <div class="app">


     <section class="layout">

        <header class="header header-fixed navbar bg-white"><p class="navbar-text">

            <div class="brand bg-white">
                <a class="navbar-brand " href="#">
                <img src="assets/estilosweb/images/logo.png" width="120px" >
                </a>
            </div>
            
            <ul class="nav navbar-nav navbar-right ">

                
                <li class="">
                    <a href="logout" title="salir">
                        <i class="fa fa-user "></i>  {{Auth::user()->usuario}}                    
                    </a>
                </li>
                <li>

                <a href="logout">
                    <i class="fa fa-power-off fa-lg"></i>
                </a>

                </li>
           
            </ul>


        </header>

        <section class="main-content">

            <header class="header header-fixed navbar bg-dark">

             @include('template-2.menu')
            
            </header>

    
            <div class="content-wrap">
               <div class="row">


                <div class="col-sm-12">

                        @include('template-2.bread')

                       
                        @include('partials.msgs')

                         @yield('content')
                </div>
               </div>
          
            </div>
            
                <div class="site-overlay"></div>
        </section>

            
            

         

     </section>

 </div>


    <!-- page scripts -->
     <!-- 
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    -->

    <script src="assets/template-2/min/main.min.js"></script>

    <script src="assets/template-2/vendor/dropzone/dropzone.js"></script>
    <script src="assets/template-2/vendor/parsley.js"></script>
    <script src="assets/template-2/vendor/jquery.maskedinput.min.js"></script>
    <script src="assets/template-2/vendor/fuelux/checkbox.js"></script>
    <script src="assets/template-2/vendor/fuelux/radio.js"></script>
    <script src="assets/template-2/vendor/fuelux/wizard.js"></script>
    <script src="assets/template-2/vendor/fuelux/pillbox.js"></script>
    <script src="assets/template-2/vendor/fuelux/spinner.js"></script>
    <script src="assets/template-2/vendor/slider/bootstrap-slider.js"></script>
    <script src="assets/template-2/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="assets/template-2/vendor/wysiwyg/jquery.hotkeys.js"></script>
    <script src="assets/template-2/vendor/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="assets/template-2/vendor/switchery/switchery.js"></script>
   
   <!-- <script src="assets/template-2/vendor/bootstrap-select/bootstrap-select.js"></script>-->
   
    @yield('extraJs')

    <!--
    <script src="assets/template-2/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/template-2/vendor/jquery.nestable.js"></script>
    <script src="assets/template-2/js/datatables.js"></script>


   <script src="assets/multiSelect/js/jquery.multi-select.js"></script>
   --> 
    <script src="assets/template-2/js/forms.js"></script>

    <script src="assets/template-2/vendor/toastr/toastr.min.js"></script>


    <script type="text/javascript">
        
        $(document).ready(function(){


           $('#modal').on('hidden.bs.modal', function () {
                $(this).removeData();
            });

            $('#my-select').multiSelect({
                //agrega los buscadores en el header del select
                selectableHeader: "<input type='text' class='form-control' autocomplete='off' placeholder='buscar...'>&nbsp;",
                selectionHeader:  "<input type='text' class='form-control' autocomplete='off' placeholder='buscar...'>&nbsp;",
                
             afterInit: function(ms){
                
                var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e){
                  if (e.which === 40){
                    that.$selectableUl.focus();
                    return false;
                  }
                });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e){
                  if (e.which == 40){
                    that.$selectionUl.focus();
                    return false;
                  }
                });
                },
                afterSelect: function(){
                this.qs1.cache();
                this.qs2.cache();
                },
                afterDeselect: function(){
                this.qs1.cache();
                this.qs2.cache();
                }

            });        
        });

        /*$(document).ready(function()
        {            
            //no filtra la ultima columna de las tabla    
            /*$('#datatable').dataTable({       
                "aoColumnDefs" : [ {
                "bSortable" : false,
                "aTargets" : [ "no-sort" ]
                }]
            });*/

        // });

    </script>



        <div class="modal" id="modal">
            <div class="modal-dialog">     
                <div class="modal-content">
                </div>
            </div>
        </div>


</body>
<!-- /body -->

</html>
