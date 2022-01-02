<x-layout>
    <script>
        new ClipboardJS('#btn')
        function displayMsg(){
            document.getElementById('copied-msg').hidden = false;
        }
    </script>
{{--    <div id="box">--}}
{{--        <h1>Your shortened URL</h1>--}}
{{--        <input type="text" id="short-url" value="{{ $shortURL }}">--}}
{{--        <button class="btn" data-clipboard-target="#short-url" onclick="displayMsg()">Copy URL</button>--}}
{{--        <p id="copied-msg" hidden>Copied!</p>--}}
{{--        <br><br><br><br>--}}
{{--        <a href="/" id="shorten-another">Shorten another URL</a>--}}

{{--    </div>--}}
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

        <div class="w-full sm:max-w-2xl mt-6 px-10 py-20 bg-white shadow-2xl overflow-hidden sm:rounded-lg">
            <p class="font-bold text-2xl text-center">Your shortened URL</p>
            <input type="text" id="short-url" class="block w-full mt-4" value="{{ $shortURL }}" autofocus><br>
            <button id="btn" value="Shorten URL" data-clipboard-target="#short-url" onclick="displayMsg()" class="mt-5 p-2 border border-blue-500  bg-blue-500 text-white rounded-md hover:cursor-pointer">
                Copy URL
            </button>
            <p id="copied-msg" class="text-green-500" hidden>Copied!</p><br><br><br>
            <a href="/" class="pt-5 underline">Shorten another URL</a>
        </div>
    </div>
</x-layout>

