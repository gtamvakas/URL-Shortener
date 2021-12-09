<x-layout>
    <script>
        new ClipboardJS('.btn')
        function displayMsg(){
            document.getElementById('copied-msg').hidden = false;
        }
    </script>
    <div id="box">
        <h1>Your shortened URL</h1>
        <input type="text" id="short-url" value="{{ $shortURL }}">
        <button class="btn" data-clipboard-target="#short-url" onclick="displayMsg()">Copy URL</button>
        <p id="copied-msg" hidden>Copied!</p>
        <br><br><br><br>
        <a href="/" id="shorten-another">Shorten another URL</a>

    </div>

</x-layout>

