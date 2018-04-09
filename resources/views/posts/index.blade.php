@extends('home')




        @section('content')
`<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>iD</th>
        <th>Title</th>
        <th>Post</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['body']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

        @endsection
