@extends('layouts.layout')

@section('content')
    <main>
        <form method="post" action="{{ route('ProjectsController.store') }}" autocomplete="on">
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 6deb4e9 (aswan help)

        <br>
        <br>
        <br>

        <section>
            <table>
<<<<<<< HEAD
                @foreach($project as $projects)
=======

                @foreach($projects as $project)
>>>>>>> parent of 6deb4e9 (aswan help)
                    <tr>
                        <td>Project_id</td>
                        <td>User_id</td>
                        <td>Title</td>
                        <td>Picture URL</td>
                        <td>Description</td>
                        <td>Explanation</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->users_id}}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->picture_url }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->explanation }}</td>
                        <td> <a href="{{ route('ProjectsController.update', $project->id)  }}">Edit</a> </td>
                        <td> <form method="POST" action="{{ route('ProjectsController.delete', [$project->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <br>
                    <br>
                    <br>
                @endforeach
            </table>
        </section>
=======
>>>>>>> parent of 6cf6f19 (Large commit see description)
    </main>
@endsection


