<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Live Chat</title>
    <link rel="icon" type="image/icon" href="images/chat.png">
    <link rel="stylesheet" type="text/css" href="css/livechat.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>

    <script>
        $(document).ready(function(e){

            function chatDisplay() {

                $.ajax({

                    url: 'displayMessage.php',
                    type: 'POST',
                    success: function (data, status) {
                        $("#chatDisplay").html(data);
                    }
                });
            }
            setInterval(function(){chatDisplay()}, 1000);

            $('#sendBtn').click(function(e){
                var name = $("#user_name").val();
                var message = $("#message").val();
                $("#myForm")[0].reset();

                $(".form-message").load("send.php", { 
                        uname:name, umessage:message 
                });
            });

            $("#message").emojioneArea({
              pickerPosition: "top",
              placeholder: "Type something here.....",
              search: false
            });

        });
    </script> 
</head>
<body>
   <div class="container-fluid">
       <h2 class="text-center mainHeading">Live Chat</h2>
       <div class="well row" id="chatBox">
           <div class="well col-xl-10 text-container" id="chatDisplay">

           </div>
           <div class="formBox col-xl-10">
               <form id="myForm">
                   <div class="form-group">
                       <input class="form-control" type="text" name="name" id="user_name" placeholder="Enter your name" required>
                   </div>
                   <div class="form-group message-box">
                       <textarea class="form-control" name="message" id="message" cols="30" rows="2" required></textarea>
                       <p class="form-message"></p>
                   </div>
                   <div class="form-group">
                       <button type="button" class="btn btn-success btn-block" id="sendBtn">Send Message</button>
                   </div>
               </form>
           </div>
       </div>

   </div>
</body>
</html>