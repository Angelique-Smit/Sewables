@extends('layouts.layout')

@section('content')
    <main>
        <h1> Change your project info here. Please fill in all the fields before submitting </h1>
        <section>
            <form method="post" action="{{ route('ProjectsController.edit',['id' => $project->id ]) }}" autocomplete="on">
                @csrf
                @method('POST')
                <label class="form_label" for="title"> Project title </label> <br>
                <input type="text" id="title" name="title"> <br>

                <label class="form_label" for="picture_url"> Upload your picture </label> <br>
                <input type="text" id="picture_url" name="picture_url"> <br>

                <label class="form_label" for="description"> Description </label> <br>
                <input type="text" id="description" name="description"> <br>

                <label class="form_label" for="explanation"> How to make: </label> <br>
                <input type="text" id="explanation" name="explanation"> <br>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
@endsection
