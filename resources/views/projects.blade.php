@extends('layouts.layout')

@section('content')
    <main>
        <form method="post" action="{{ route('ProjectsController.create') }}" autocomplete="on">
            @csrf
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
    </main>
@endsection
?>


