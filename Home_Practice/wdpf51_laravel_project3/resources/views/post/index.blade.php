<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    {{-- one to many --}}
    @foreach ($posts as $post )
      <p>{{$post->name}}</p> 
    <ul>
        {{-- akankar comments ta holo post.php modeler tabler ta --}}
        @foreach ($post->comments as $comment )
          <li>{{$comment->comment}}</li>  
        @endforeach
        
    </ul>
    @endforeach
</body>
</html>