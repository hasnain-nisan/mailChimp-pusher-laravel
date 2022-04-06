<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var PUSHER_APP_KEY = "73cb44cc8c970a1a5056"
    var pusher = new Pusher(PUSHER_APP_KEY, {
      cluster: 'mt1',
      forceTLS: true
    });

    var channel = pusher.subscribe('nisan-text');
    channel.bind('nisan', function(data) {
      // alert(JSON.stringify(data));
      console.log(data.data)
      const message = data.data
      var node = document.createElement("LI");
      var textnode = document.createTextNode(message.user+"=>"+message.message);
      node.appendChild(textnode);
      document.getElementById("myList").appendChild(node);

    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try posting an event to the channel <code>nisan-text</code> named event <code>nisan</code>.
  </p>

  <ul id="myList">
    <li>First message</li>
  </ul>

</body>
