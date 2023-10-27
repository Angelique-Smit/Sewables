@extends('layouts.layout')

@section('content')

    <main>
        <h1>On this page you can see, edit and change your account details.</h1>

        <section>
            <table>
                <tr>
                    <td>User_id</td>
                    <td>Name</td>
                    <td>EmailL</td>
                    <td>Password</td>
                    <td>Explanation</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>{{ $User->id }}</td>
                    <td>{{ $User->name }}</td>
                    <td>{{ $User->email }}</td>
                    <td> <p> *********** </p></td>
                    <td> <a href="{{ route('HomeController.edit', $User->id)  }}">Edit</a> </td>
                    <td> <form method="POST" action="{{ route('HomeController.delete', [$User->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            </table>
        </section>
    </main>
@endsection
