@extends('layouts.layout')

@section('content')
    <main>
        <h1> This is a temp admin page. Only admins can access this.</h1>
        <table>
        @foreach($User as $user)
            <tr>
                <td> Id </td>
                <td> Name </td>
                <td> Email </td>
                <td> Password </td>
                <td> Admin Status</td>
                <td> Change admin role</td>
            </tr>

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email }}</td>
                <td> <p> ******** </p> </td>
                <td>{{ $user->admin }}</td>
                <td>
                    <form method="post" action="{{ route('HomeController.setAdmin', [$id = $user->id]) }}" autocomplete="on">
                        @csrf
                        @method('post')
                        <button type="submit">  </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </main>
@endsection
