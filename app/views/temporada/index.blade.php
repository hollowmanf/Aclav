@extends('template-2.template')

@section('content')

<section  class="panel bg-none">
  <header class="panel-heading">
    <b>TEMPORADAS</b>
    <div class="btn-group pull-right">
      <a href="{{$modulo}}/new"class="btn  btn-xs" type="button"><span class="fa fa-plus-square"></span> Agregar</a>
      <a href="{{$modulo}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
    </div>
  </header>

  <div class="panel-body">
  {{--*/ $count = 1 /*--}}

    @foreach($data as $datas)

        @if($count == 1)
          {{--*/ $in = 'in' /*--}}
        @else
          {{--*/ $in = '' /*--}}
        @endif

      <div class="panel-group" id="accordion">
        <div class="panel">
          <div class="panel-heading">
       
        
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$datas->id}} ">
           {{$datas->nombre_temporada}}
          </a> 
  
          <div class="pull-right">
            <small class="text-muted">desde : {{$datas->fecha_inicio}}  </small>
            <small class="text-muted">hasta : {{$datas->fecha_final}} </small>
          </div>
          

          </div>

            <div id="collapse{{$datas->id}}" class="panel-collapse collapse {{$in}} ">
              <div class="panel-body">                
  
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Torneo</th>
                      <th>Serie</th>
                      <th>Inicio</th>
                      <th>Final</th>
                      <th></th>  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Copa Argentina</td>
                      <td>A1</td>
                      <td>20-01-2013</td>
                      <td>20-01-2013</td>
                      <td><i class="fa fa-eye"></i></td>
                    </tr>
                     <tr>
                      <td>Torneo Apertura</td>
                      <td>A2</td>
                      <td>20-01-2013</td>
                      <td>20-01-2013</td>
                     <td><i class="fa fa-eye"></i></td>
                    </tr>
                  </tbody>
                </table>
                      <a href="torneos/new" type="button" class="btn btn-info  btn-xs">Crear Torneo</a>
              </div>

            </div>
          </div>
        </div>

       {{--*/ $count++ /*--}}

    @endforeach
  
     


      

  

</div>




  </div>

</section>






@stop