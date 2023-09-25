@extends('layouts.layout')

@section('content')
        <main>
            <h1 class="h1_main"> Who are we? </h1>
            <section  class="container">
                <div class="flexbox"> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, enim fugiat hic neque pariatur repudiandae voluptatum? Blanditiis debitis dolorem ea esse ipsa iusto nulla pariatur, provident saepe sapiente sequi tempore.</p></div>
                <div class="flexbox"> <img src="{{ asset('pic/pants.jpg') }}" alt="Logo of Sewables"> </div>
            </section>

            <h1 class="h1_main"> Latest Updates </h1>
            <section class="container">
                <div class="flexbox"> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis cumque dolor ea eaque esse expedita explicabo fuga labore laboriosam laudantium magnam odit, officia, quas recusandae, repudiandae sunt? Et, repudiandae!</p></div>
                <div class="flexbox"> <img src="{{ asset('pic/pants.jpg') }}" alt="Picture fitting for the update"> </div>
            </section>
        </main>
@endsection
