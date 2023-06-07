<section id="Spesialist" class="Spesialist">
    <div class="title_spesialist">
        <h1 class="title__Spes">Специалисты</h1>
    </div>
    <div class="swiper">



        <div class="swiper-wrapper">
            @foreach ($doctor as $doctors)
        <div class="swiper-slide">
            <img style="height: 70vh" class="photo__slider" src="doctorimage/{{$doctors->image}}" alt=""> 
            <p class="name__doctor">{{$doctors->name}}</p> <br>
            <p class="spesiality__doctor">{{$doctors->spesiality}}</p>
        </div>
        
        @endforeach

        </div>


        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</section>