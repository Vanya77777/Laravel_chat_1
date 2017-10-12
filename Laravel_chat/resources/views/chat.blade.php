<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        
        <title>Laravel</title>
    </head>
    <body>
        
        <ul class="chat">
        @foreach ($messages as $message)
            <li>
            <b>{{$message->author}}</b>
            <b>{{$message->content}}</b>
            <b>
            @endforeach
        </ul>
            
        <hr>
        <form action="/chat" method= "POST"> 
             <input type="text" name="author">
                    <br>
                    <br>
            {{csrf_field()}}
            <textarea name ="content" style="width:100%;height: 50px"></textarea>
            <input type="submit" value="Відправити">
        </form>
            
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
<!--       <script src="//{{ Request::getHost() }}:6002/socket.io/socket.io.js"></script>-->
        <!--       <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>-->
       <script>
           var socket = io(':6002');
           
           function appendMessage(data){
               $('.chat').append(
                   $('<li/>').append)(
                   $('<b/>').text(data.author),
                   $('<p/>').text (data.content),
                       )
           }
           
           
               socket.on('chat:message', function(data){
               console.log(data);
//            //    socket.on('message', function(data) {
              //   appendMessage(data);
                });

</script>
       
       
    </body>
</html>