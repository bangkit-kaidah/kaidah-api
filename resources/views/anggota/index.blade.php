@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">
            @if (session('email_success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('email_success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">Followers</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sources as $source)
                        <tr>
                            <td>{{$source->name}}</td>
                            <td>
                                <ul>
                                    @foreach ($source->users as $user)
                                        <li>{{$user->name}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <form action="{{ route('anggota.send')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$source->id}}">
                                    <input type="submit" value="Send Notification" class="btn btn-primary" {{ count($source->users) == 0 ? 'disabled':'' }}>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection