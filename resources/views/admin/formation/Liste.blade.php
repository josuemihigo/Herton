@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
    <a href="{{ url('/formations/create') }}" class="btn btn-gradient-info">Ajouter</a>
    <a href="{{ url('/formations') }}" class="btn btn-gradient-info">Liste</a>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Password</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $formations)
        <tr>
            <td>{{$formations->id}}</td>
            <td>{{$formations->name}}</td>
            <td>{{$formations->email}}</td>
            <td>{{$formations->phone}}</td>
            <td>{{$formations->password}}</td>
            <td class="text-center">
                <a href="{{ route('formations.edit', $formations->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('formations.destroy', $formations->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
