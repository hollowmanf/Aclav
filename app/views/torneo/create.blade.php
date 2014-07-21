@extends('template-2.template')

@section('extraCss')

    <link rel="stylesheet" href="assets/multiSelect/css/multi-select.css">

@endsection


@section('content')
<section class="panel ">
    <div class="panel-body">

        <div class="col-lg-6" >
            <form  action="torneos/edit">
                <label>Nombre del Torneo</label>
               <input class="form-control" type="text" >

                 <label>Inicio</label>
                <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy" >
                    <input class="form-control" type="text" ></input>
                    <span class="input-group-btn">
                         <button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>

                <label>Final</label>
                <div class="input-group mg-b-md input-append date datepicker" data-date-format="dd-mm-yyyy" >
                    <input class="form-control" type="text" ></input>
                    <span class="input-group-btn">
                         <button class="btn btn-white add-on" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>


                <br>

                    <select  multiple="multiple" id="my-select" name="my-select[]">
                        <optgroup label='Liga Masculina'>
                            @foreach($equipos as $equipo)      
                                <option value='{{$equipo->id}}'>{{$equipo->nombre}}</option>
                            @endforeach                                      
                        </optgroup>
                    </select>
                    <br>

                <button class="btn btn-default" type="submit">Aceptar</button>
            </from>
        </div>

   </div>
</section>
@endsection 


@section('extraJs')

    <script src="assets/multiSelect/js/jquery.multi-select.js"></script>
    <script src="assets/quickSearch/jquery.quicksearch.js"></script>

@endsection
