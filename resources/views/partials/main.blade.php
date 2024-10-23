<main>
    <section id="movies">

        <div class="container">
            <div class="row row-cols-7 pt-5">
{{--    "title" => "Action Comics #1000: The Deluxe Edition",
        "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
        "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
        "price" => "$19.99",
        "series" => "Action Comics",
        "sale_date" => "2018-10-02",
        "type" => "comic book", --}}

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

                @endforelse




            </div>
        </div>

    </section>
</main>
