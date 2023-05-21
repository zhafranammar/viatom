<!DOCTYPE html>
<html>
<head>
    <title>Discussion Detail</title>
</head>
<body>
    <h1>Discussion Detail</h1>
    <h2>{{ $discussion->topic }}</h2>
    <p>{{ $discussion->body }}</p>
    <hr>
    
    <h3>Replies</h3>
    <ul>
        @if ($discussion->replies)
          @foreach ($discussion->replies as $reply)
            <ul>
                <li>{{ $reply->user->name }}</li>
                <li>{{ $reply->body }}</li>
                <li>{{ $reply->created_at}}</li>
            </ul>
          @endforeach
        @endif
    </ul>
    
    <h3>Add Reply</h3>
    <form method="POST" action="/discussions/{{ $discussion->id }}/replies">
        @csrf
        <label for="reply">Reply:</label><br>
        <textarea id="reply" name="body"></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>