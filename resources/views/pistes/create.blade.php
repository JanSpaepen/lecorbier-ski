@extends ('layout')
@section('content')
    <section id="features">
        <div class="container">
            <h1>Nieuwe piste</h1>

            <form class="form-group" method="post" action="/pistes">
                @csrf
                <div class = "field">
                    <label class="label" for="naam">Naam</label>

                    <div class="control">
                        <input
                            class=" input form-control @error('naam') alert-danger @enderror"
                            type="text"
                            name="naam"
                            id="naam"
                            value="{{old('naam')}}">
                        @error('naam')
                        <p class="text-danger">{{ $errors->first('naam') }}</p>

                            @enderror
                    </div>

                </div>
                <div class = "field">
                    <label class="label" for="kleur">Kleur</label>

                    <div class="control">
                        {{--<input class=" input form-control @error('kleur') alert-danger @enderror" type="text" name="kleur" id="kleur" value="{{old('kleur')}}">
                        @error('kleur')
                        <p class="text-danger">{{ $errors->first('kleur') }}</p>
                        @enderror--}}

                        <select
                            name="kleur_id"
                            class="select form-control"
                            @foreach($kleurs as $kleur)
                                <option value="{{$kleur->id}}">{{$kleur->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class = "field">
                    <label class="label" for="lengte">Lengte</label>

                    <div class="control">
                        <input class=" input form-control @error('lengte') alert-danger @enderror" type="text" name="lengte" id="lengte" value="{{old('lengte')}}">
                        @error('lengte')
                        <p class="text-danger">{{ $errors->first('lengte') }}</p>
                        @enderror
                    </div>

                </div>
                <br>
                <div class="field-is-grouped">
                    <div class="control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
