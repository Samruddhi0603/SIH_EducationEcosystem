<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text to Speech</title>
    <style>
      #text-to-speech-button{
            background-color: rgb(36, 241, 241);
            color: black;
            width: 100px;
            height: 40px ;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: 130px;
      }
    </style>
</head>
<body style="background-image: url('background.jpg');">
    <h2 style="color:brown">Assignment question</h2>
    <textarea id="text-to-speech-input" rows="4" cols="50">when was Aditya L1 launched?</textarea>
    <br>
    <button id="text-to-speech-button">Speak</button>

    <script>
        const textToSpeechInput = document.getElementById('text-to-speech-input');
        const textToSpeechButton = document.getElementById('text-to-speech-button');

        // Check if the browser supports the Web Speech API
        if ('speechSynthesis' in window) {
            const synth = window.speechSynthesis;

            textToSpeechButton.addEventListener('click', () => {
                const text = textToSpeechInput.value;
                const utterance = new SpeechSynthesisUtterance(text);
                synth.speak(utterance);
            });
        } else {
            alert('Your browser does not support the Web Speech API. Please use a different browser.');
        }
    </script>
</body>
</html>
