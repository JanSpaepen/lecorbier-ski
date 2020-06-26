@extends ('layout')
@section('content')
    <section id="features">
        <div class="container">



            <div class="row">
                <div class="col-md-3 mt-3 d-none d-md-block text-info" >
                    <h4 class="text-secondary">Overzicht </h4>
                    <ul class="list-group">
                        @foreach($pistes as $piste1)
                            <li class="list-group-item">
                                <a  class="text-info" href="{{ route('pistes.show', $piste1 )}}" class="  ">{{$piste1->naam}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col md-9 ">
                    <h2> {{ $piste->naam}}</h2>
                    <p>{{ $piste->kleur->name}}</p>
                    <p>{{ $piste->lengte}}</p>


                </div>

            </div>


        </div>
    </section>
@endsection
