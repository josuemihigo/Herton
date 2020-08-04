@extends('layoutadmin')

@section('content')


         
    <div class="container">

                 <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                                   
                    <div class="push-top">
                        <a href="{{ url('/articles/create') }}" class="btn btn-gradient-info">Ajouter</a>
                        <a href="{{ url('/articles') }}" class="btn btn-gradient-info">Liste</a>
                    </div>
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif
            


                
                    <div class="table-wrap">
                    <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                    
                        <thead>
                            <tr class="table-warning">
                                <td>ID</td>
                                <td>IMAGE</td>
                                <td>TITRE</td>
                                <td>CONTENU</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $articles)
                            <tr>
                                <td>{{$articles->id}}</td>
                                <td><img src="{{ asset('storage').'/'.$articles->img }}" style="width: 75px; height: 41.25px"></td>
                                <td>{{$articles->titre}}</td>
                                <td>{{$articles->content}}</td>
                                <td class="text-center">
                                    <a href="articles/{{ $articles->id }}/edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <form action="articles/delete/{{ $articles->id }}"  style="display: inline-block">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-remove" ></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-warning">
                                <td>ID</td>
                                <td>IMAGE</td>
                                <td>TITRE</td>
                                <td>CONTENU</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </tfoot>
                    </table>

                </section>
            </div>
        </div>
    </div>
$endsection
