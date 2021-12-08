<x-layout>
<div id="url-form">
    @if($errors->any())
     <div class="error-msg">
    <h3> {{ $errors->first() }} <br><br>
        The URL needs to be a full URL.
        E.g. "https://www.example.com"
    </h3>
     </div>
    @endif

    <h1>
        Paste your URL here
    </h1>
    <form action="/shorten" method="POST">
        <input name="url" type="text" placeholder="https://www.example.com" size="80">
        @csrf
    </form>
</div>
</x-layout>
