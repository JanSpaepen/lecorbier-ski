@extends ('layout')
@section('content')

    <div class="container  my-4">
        <div class="row">
            <div class="col-md-3 mt-3 d-none d-md-block text-info">
                <h4 class="text-secondary">Overzicht</h4>
                <ul class="list-group">
                    @foreach($units as $unit1)
                        <li class="list-group-item">
                            <a class="text-info" href="{{ route('units.show', $unit1 )}}"
                               class="  ">{{$unit1->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>


            <div class="col md-9 text-secondary ">
                <h3 class="">{{$unit->name}}</h3>
                <hr>

                <div class="row ">
                    <div id="demo" class=" col-md carousel slide m-10" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0"class="active"> </li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url('/img/pic08.jpg')}}" alt="{{$unit->name}}" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('/img/pic08.jpg')}}" alt="{{$unit->name}}" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('/img/pic08.jpg')}}" alt="{{$unit->name}}" width="1100" height="500">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

                <h5>{{ $unit->text}}</h5>
                <h6>Hier komt meer uitleg over de unit</h6>
                <hr>
                <div class="row ">
                    @foreach( $unit->agencies as $agency)
                        <div class="card col-md-3 d-none d-sm-block">
                            <img class="card-img-top" src="{{url('/img/pic08.jpg')}}" alt="{{$agency->name}}">
                            <h4 class="card-title">{{$agency->name}}</h4>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>













@endsection

