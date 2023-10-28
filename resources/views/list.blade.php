@extends('layouts.layout')

@section('content')
    <main>
        <section>
            <table>
                @foreach($query_result as $result)
                    <tr>
                        <td>Project_id</td>
                        <td>User_id</td>
                        <td>Title</td>
                        <td>Picture URL</td>
                        <td>Description</td>
                        <td>Explanation</td>
                    </tr>

                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->users_id}}</td>
                        <td>{{ $result->title }}</td>
                        <td>{{ $result->picture_url }}</td>
                        <td>{{ $result->description }}</td>
                        <td>{{ $result->explanation }}</td>
                    </tr>
                @endforeach
            </table>
        </section>
    </main>
@endsection
