@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Slug</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>g bgf</td>
                <td>fgbf</td>
                <td>gfbg</td>
                <td>
                    <a class="btn btn-primary" href="">VEDI</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection
