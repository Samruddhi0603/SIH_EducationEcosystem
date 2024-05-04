<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <!-- <title>Speech to Text</title> -->
    <style>
      #start-listening{
            background-color: rgb(36, 241, 241);
            color: black;
            width: 150px;
            height: 40px ;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: 130px;
      }
    </style>
</head>
<body style="background-image: url('background.jpg');">
    <h1 style="color: brown;">Speech to Text</h1>
    <button id="start-listening">Start Listening</button>
    <div id="output-text"></div>

    <script>
        const startListeningButton = document.getElementById('start-listening');
        const outputText = document.getElementById('output-text');

        // Check if the browser supports the Web Speech API
        if ('webkitSpeechRecognition' in window) {
            const recognition = new webkitSpeechRecognition();

            recognition.onstart = () => {
                startListeningButton.textContent = 'Listening...';
            };

            recognition.onresult = (event) => {
                const transcript = event.results[0][0].transcript;
                outputText.textContent = transcript;
            };

            recognition.onend = () => {
                startListeningButton.textContent = 'Start Listening';
            };

            startListeningButton.addEventListener('click', () => {
                recognition.start();
            });
        } else {
            alert('Your browser does not support the Web Speech API. Please use a different browser.');
        }
    </script>
</body>
</html>
