<main>
    <section id="movies">

        <div class="container">

            <div class="current-series">
                <p>CURRENT SERIES</p>
            </div>

            <div class="row row-cols-7 pt-5">

                @forelse ($comics as $index => $comic)
                    <div class="col row justify-content-center">
                        <div class="comic-thumb">
                            <img src="{{$comic["thumb"]}}" alt="">
                        </div>
                        <p class="text-white text-center">
                            {{$comic["title"]}}
                        </p>
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
</main>
