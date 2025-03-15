<!DOCTYPE html>
<html>
<head>
    <title>Egyszerű Csevegő</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            function loadChat(){
                $.ajax ({
                    url: "chat.php",
                    success: function(data){
                        $("#chat").html(data);
                    }
                });
            }
            loadChat();
            setInterval(loadChat, 6000); // Frissítés 6 másodpercenként
            $("#send").click(function(){
                var message = $("#message").val();
                $.ajax({
                    url: "send.php",
                    type: "POST",
                    data: {message: message},
                    success: function(){
                        $("#message").val("");
                        loadChat();
                    }
                });
            });
        });
    </script>
</head>
<body>

<div>
        <div>
            <label>Token</label>
            <input type="text" id="titok">
        </div>
        <button id="saveButton">Tárolás</button>

    </div>
    <script>
        const saveButton = document.getElementById('saveButton');
        saveButton.addEventListener('click', function() {
            const titok = document.getElementById('titok').value;
            localStorage.setItem('token', titok);
        });
    </script>
    <hr>

    <div id="chat"></div>
    <input type="text" id="message">
    <button id="send">Küldés</button>
</body>
</html>