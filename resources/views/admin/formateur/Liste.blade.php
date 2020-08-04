@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
    <a href="{{ url('/formateurs/create') }}" class="btn btn-gradient-info">Ajouter</a>
    <a href="{{ url('/formateurs') }}" class="btn btn-gradient-info">Liste</a>

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
        @foreach($student as $formateurs)
        <tr>
            <td>{{$formateurs->id}}</td>
            <td>{{$formateurs->name}}</td>
            <td>{{$formateurs->email}}</td>
            <td>{{$formateurs->phone}}</td>
            <td>{{$formateurs->password}}</td>
            <td class="text-center">
                <a href="{{ route('formateurs.edit', $formateurs->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('formateurs.destroy', $formateurs->id)}}" method="post" style="display: inline-block">
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
