<x-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

        <div class="w-full sm:max-w-2xl mt-6 px-10 py-20 bg-white shadow-2xl overflow-hidden sm:rounded-lg">
                @if($errors->any())
                 <div class="text-red-400">
                <h3> {{ $errors->first() }} <br><br>
                </h3>
                 </div>
                @endif
            <form method="POST" action="/shorten" class="flex flex-col items-center justify-center">
                @csrf
                <p class="text-center mb-10 text-2xl"> Paste your URL here </p>
                <p class="italic text-sm">Make sure to include http:// or https://</p>
                <input name="url" type="text" class="block w-full mt-4" placeholder="https://www.example.com" autofocus><br>
                <input type="submit" name="submit" value="Shorten URL" class="mt-5 p-2 border border-blue-500  bg-blue-500 text-white rounded-md hover:cursor-pointer">

            </form>
        </div>
    </div>

</x-layout>
