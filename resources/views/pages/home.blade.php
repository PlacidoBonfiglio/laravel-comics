@extends("layouts.app")

@section("page-title", "Laravel Comics")

@section("main-content")
    <section id="movies">

        <div class="container">

            <div class="current-series">
                <p>CURRENT SERIES</p>
            </div>

            <div class="row row-cols-6 gap-4 pt-5">

                @forelse ($comics as $index => $singleComic)
                    <div class="col ">

                        <a href="{{ route("comic.show", $loop->index) }}">
                            <div class="comic-thumb">
                                <img src="{{$singleComic["thumb"]}}" alt="">
                            </div>
                            <p class="text-white text-center">
                                {{$singleComic["title"]}}
                            </p>
                        </a>

                    </div>
                @empty
                    <div class="col-12">
                        <h2 class="text-white text-center">
                            No comics are available
                        </h2>
                    </div>
                @endforelse

            </div>

            <div class="d-flex load-button">
                <button>LOAD MORE</button>
            </div>

        </div>

    </section>

    <section class="main-navbar">
        <div class="container">
            {{-- ! da completare --}}
        </div>
    </section>
@endsection
