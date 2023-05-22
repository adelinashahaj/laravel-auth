@extends('layouts.app')

@section('content')


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Img</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->cover_image}}</td>
                <td class="d-flex">
                    <a class="btn btn-primary me-2" href="{{route('admin.projects.show', ['project' => $project->id])}}">Vedi</a>
                    <a class="btn btn-warning me-2" href="{{route('admin.projects.edit', ['project' => $project->id])}}">Modifica</a>
                    <form class="form_delete_comic" action="{{route('admin.projects.destroy', ['project' => $project->id])}}" method="POST">
                        @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>

                     </form>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
