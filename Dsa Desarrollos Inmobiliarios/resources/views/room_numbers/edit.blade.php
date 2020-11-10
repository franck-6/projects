@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Room Number
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roomNumber, ['route' => ['roomNumbers.update', $roomNumber->id], 'method' => 'patch']) !!}

                        @include('room_numbers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection