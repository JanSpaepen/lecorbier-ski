
@extends ('layout')
@section('content')
    <section id="features">
        <div class="container">
            <h1>Update unit</h1>

            <form method="post" action="/units/{{$unit->id}}">
                @csrf
                @method('PUT')
                <div class = "field">
                    <label class="label" for="name">Naam</label>

                    <div class="control">
                        <input class=" input form-control @error('name') alert-danger @enderror" type="text" name="name" id="name" value="{{$unit->name}} ">
                        @error('name')
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>

                </div>

                <div class = "field">
                    <label class="label" for="text">Text</label>

                    <div class="control">
                        <input class=" input form-control @error('text') alert-danger @enderror" type="text" name="text" id="text" value="{{$unit->text}} ">
                        @error('text')
                        <p class="text-danger">{{ $errors->first('text') }}</p>
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
