@extends("layout.index")

@section("content")

   <main>


        <h1 class="text-center font-bold text-6xl py-10">All Mappings</h1>

        <div class="text-center pb-4">
            <a href="{{ route("mapping.new") }}"class="hover:text-black hover:bg-green rounded-full py-3 px-3 text-lg font-bold cursor-pointer tracking-wider border-black border-2 transition ease-out">
                New Mapping</a>
            </div>



        @foreach ($items as $item)

        <div class="px-10 py-2 text-center text-lg flex justify-center">
            <div class="bg-white rounded-lg m-2 p-1 flex">
            <p class="px-4">
                {{$item->redirect}}  
            </p>
            <p>Maps To</p>
            <p class="px-4" id="slug">
                http://localhost/urlShortener/public/{{$item->slug}}
            </p>
            </div>
            <button onclick="clipboardCopy()" class="hover:text-white hover:bg-black rounded-full px-3 text-md font-bold cursor-pointer tracking-wider border-black border-2 transition ease-out focus:bg-green">
                Copy
            </button>
        </div>

        @endforeach

        
   </main>

@endsection

<script>

    function clipboardCopy() {
        // Get the text field
        var copyText = document.getElementById("slug");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
    }
 </script>