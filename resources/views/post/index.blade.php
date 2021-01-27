@extends('base')
@section('title') Inicio @endsection
@section('content')

   <table class="table">
       <thead>
           <tr>
               <th>{{"ID"}}</th>
               <th>{{"TITLE"}}</th>
               <th>{{"AUTHOR"}}</th>
               <th>{{"ACCIONES"}}</th>
           </tr>
       </thead>
       <tbody>
            @if(count($Posts)>=1)
                <tr>
                    @foreach ($POSTS as $POST)
                         <td scope="row"> {{$Post->ID}}</td>
                         <td>{{$Post->TITLE}}</td>
                         <td>{{$Post->AUTHOR}}</td>
                         <td> Editar | Borrar</td>
                    @endforeach
                   
                </tr>
            @else
                <tr>
                    <td scope="row">{{"NO ENCONTRO RESULTADOS"}}</td>
                </tr>

            @endif                

           
       </tbody>
   </table>

@endsection