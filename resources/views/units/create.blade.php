@extends ('layout')
@section('content')
    <section id="features">
        <div class="container">
            <h1>Nieuwe unit</h1>

            <form class="form-group" method="post" action="/units">
                @csrf
                <div class = "field">
                    <label class="label" for="name">Naam</label>

                    <div class="control">
                        <input
                            class=" input form-control @error('naam') alert-danger @enderror"
                            type="text"
                            name="name"
                            id="name"
                            value="{{old('name')}}">
                        @error('name')
                        <p class="text-danger">{{ $errors->first('name') }}</p>

                            @enderror
                    </div>

                </div>

                <div class = "field">
                    <label class="label" for="text">Text</label>

                    <div class="control">
                        <input class=" input form-control @error('text') alert-danger @enderror" type="text" name="text" id="text" value="{{old('text')}}">
                        @error('text')
                        <p class="text-danger">{{ $errors->first('text') }}</p>
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
