@extends('layouts.layout')

@section('content')
    <main>
        <section>
            <h1> Change your account info here. Please fill in all the fields before submitting </h1>
            <form method="post" action="{{ route('HomeController.update',['id' => $User->id ]) }}" autocomplete="on">
                @csrf
                @method('POST')
                <label class="form_label" for="name"> New name </label> <br>
                <input type="text" id="name" name="name"> <br>

                <label class="form_label" for="email"> New Email </label> <br>
                <input type="text" id="email" name="email"> <br>

                <label class="form_label" for="password"> New password </label> <br>
                <input type="password" id="password" name="password"> <br>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
@endsection
