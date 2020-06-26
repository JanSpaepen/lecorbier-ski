@extends ('layout')
@section('content')
    <section id="features">
        <div class="container">
            <h1>Update piste</h1>

            <form method="post" action="/pistes/{{$piste->id}}">
                @csrf
                @method('PUT')
                <div class = "field">
                    <label class="label" for="name">Naam</label>

                    <div class="control">
                        <input class=" input form-control @error('naam') alert-danger @enderror" type="text" name="naam" id="naam" value="{{$piste->naam}} ">
                        @error('naam')
                        <p class="text-danger">{{ $errors->first('naam') }}</p>
                        @enderror
                    </div>

                </div>
                <div class = "field">
                    <label class="label" for="kleur">Kleur</label>

                    <div class="control">

                        <select
                            name="kleur_id"
                            class="select form-control"
                        @foreach($kleurs as $kleur)
                            <option value="{{$kleur->id}}">{{$kleur->name}}</option>
                            @endforeach
                            </select>


                       {{-- <input class=" input form-control @error('kleur') alert-danger @enderror" type="text" name="kleur" id="kleur" value="{{$piste->kleur}} ">
                        @error('kleur')
                        <p class="text-danger">{{ $errors->first('kleur') }}</p>
                        @enderror--}}
                    </div>

                </div>
                <div class = "field">
                    <label class="label" for="lengte">Lengte</label>

                    <div class="control">
                        <input class=" input form-control @error('lengte') alert-danger @enderror" type="text" name="lengte" id="lengte" value="{{$piste->lengte}} ">
                        @error('lengte')
                        <p class="text-danger">{{ $errors->first('lengte') }}</p>
                        @enderror
                    </div>

                </div>
                <br>
                <div class="field-is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
