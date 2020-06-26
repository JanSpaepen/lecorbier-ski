@extends ('layout')
@section('content')
    <section id="features">
        <div class="container">

            <h3 class="text-info text-center">Overzicht van alle units in Le Corbier</h3>

            <div class="row aln-center">
                @foreach($units as $unit)
                    <div class="card border-0 col-md">

                        <img class="card-img-top  rounded-lg" src="/img/pic08.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-info ">{{ $unit->name}}</h5>
                            <p class="card-text">{{ $unit->text}}</p>
                            <a href="{{ route('units.show', $unit )}}" class="btn  text-white bg-info">Verken</a>
                        </div>
                    </div>
                    <br class="hidden-lg">
                @endforeach
            </div>

            <br>


        </div>
    </section>
@endsection
aa
