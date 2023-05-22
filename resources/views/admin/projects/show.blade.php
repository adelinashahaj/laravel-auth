@extends('layouts.app')
@section('page-title')

@section('content')
<img src="{{$project->cover_image}}" class="img-fluid" alt="{{$project->title}}">
<h1>{{$project->title}}</h1>



<a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Torna alla lista</a>
@endsection
