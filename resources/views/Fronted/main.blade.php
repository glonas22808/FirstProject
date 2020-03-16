@extends('fronted.Loyats')
@section('section-main')
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        @php
            $prefixArray = array(
                0=> 'zero',
                1=> 'first',
                2=> 'second',
                3=>'third'
            )
        @endphp

        <div class="carousel-inner">
            @if(isset($data))

            @endif
            <div class="carousel-item active">
                <img class="second-slide" src="https://zno.kiev.ua/wp-content/uploads/2019/03/school-pair5-3.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Комплексная подготовка к ОГЭ</h1>

                        <p><a class="btn btn-light" href="OGE" role="button">Это интересно!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="https://postupi.online/images/images1366/50/435.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Комплексная подготовка к ЭГЭ</h1>
                        <p><a class="btn btn-light" href="EGE" role="button">Это интересно!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid" id ="Text" >
        <div class="container row justify-content-center">
    <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{$data[0]->name}}
        </h3>
        <div class="post" >
            {!!  $data[0]->content!!}
</div>
        </div>
        </div>
    </div>
    @endsection