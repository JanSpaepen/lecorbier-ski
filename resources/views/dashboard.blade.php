@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3 d-none d-md-block text-info">
                <h4 class="text-secondary">Bewerk</h4>
                <ul class="nav nav-list">
                    <li class="nav-header"  data-toggle="collapse" data-target="#test">
        <span>
            Pistes
            <span class="pull-right"  data-toggle="collapse"></span>
        </span>
                        <ul class="nav nav-list collapse" id="test" >
                    @foreach($pistes as $piste)
                        <li>
                            <a class="text-info" href="{{ route('pistes.edit', $piste )}}"
                               class="  ">{{$piste->naam}}</a>
                        </li>


                    @endforeach
                </ul>



                    </li>
                </ul>

                <ul class="nav nav-list">
                    <li class="nav-header"  data-toggle="collapse" data-target="#test2">
        <span>
            Units
            <span class="pull-right"  data-toggle="collapse"></span>
        </span>
                        <ul class="nav nav-list collapse" id="test2" >
                            @foreach($units as $unit)
                                <li>
                                    <a class="text-info" href="{{ route('units.edit', $unit )}}"
                                       class="  ">{{$unit->name}}</a>
                                </li>


                            @endforeach
                        </ul>



                    </li>
                </ul>
            </div>



            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Auth::check())
                        You are logged in {{Auth::user()->name}}
                            @else
                            Dit is om te laten zien als je niet ingelogd bent
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
