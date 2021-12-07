<x-layout>
<div id="url-form">
    <h1>
        Paste your URL here
    </h1>
    <form action="/shorten" method="POST">
        <input name="url" type="text" placeholder="https://www.example.com" size="80">
        @csrf
    </form>
</div>
</x-layout>
