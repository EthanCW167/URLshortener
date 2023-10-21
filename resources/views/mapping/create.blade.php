@extends("layout.index")

@section("content")
 
    <form method="POST">
        @csrf
        <div class="flex min-h-screen justify-center items-start align-middle">
        <div class="flex flex-col min-h-screen justify-center items-start">
            <div class="flex justify-start p-3 ">

            <div class="">
                <input type="text" name="slug" class="rounded-xl border-1" placeholder="URL"/>
            </div>

            <input type="submit" class="px-4"/>

            </div>

            <div class="p-3">
                <input type="text" name="redirect" class="rounded-xl border-0 " placeholder="Slug"/>
            </div>
        </div>

        </div>
    </form>

@endsection