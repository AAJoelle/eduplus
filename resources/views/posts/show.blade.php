<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    @foreach ($posts as $post)

      <h1>{{ $post->title}}</h1>

      <p>{{$post->body}}</p>

    <p>posted by: {{$post->lecturer}}</p>

  @endforeach

  </body>
</html> --}}
