@extends("layouts.app")

@section("page-title", "Laravel Comics")

@section("main-content")
<section id="movies">

    <div class="container">

        <div class="current-series">
            <p>CURRENT SERIES</p>
        </div>

        <div class="row row-cols-7 pt-5">

            <div class="col row justify-content-center">
                <div class="comic-thumb">
                    <img src="{{$comic["thumb"]}}" alt="" class="img-show">
                </div>
                <p class="text-white text-center fw-bold mt-3">
                    {{$comic["title"]}}
                </p>
                <p class="text-white text-center">
                    {{$comic["description"]}}
                </p>
                <p class="text-white text-center">
                    {{$comic["type"]}}
                </p>
                <p class="text-white text-center">
                    {{$comic["price"]}}
                </p>
            </div>

        </div>

        </div>
    </div>

</section>

<section class="main-navbar">
    <div class="container">
        {{-- ! da completare --}}
    </div>
</section>
@endsection
