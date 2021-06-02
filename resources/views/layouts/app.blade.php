<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css" integrity="sha512-RVmrWua3k1yTDEOg4Yzs2bK5+Thh7nM6jrhDq/6/5/Mwa0JbYe4pP4YMK5sqghKz01T3DgrwYc57Jaf1PSurCg==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>D Smart</title>
        <!-- <meta name="description" content="Page description. No longer than 155 characters." /> -->

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Lafladeles">
        <meta name="twitter:title" content="Home | La Flamme de l'Espoir">
        <meta name="twitter:description" content="Home | La Flamme de l'Espoir">
        <meta name="twitter:creator" content="@LaFlammeDeLEspoir">
        <!-- Twitter Summary card images must be at least 120x120px -->
        <meta name="twitter:image"
              content="{{asset('assets/logo.png')}}">
        <meta name="twitter:image:alt" content="Home | La Flamme de l'Espoir"/>
        <meta name="twitter:domain" content="founderspledge.com">

        <!-- Open Graph data -->
        <meta property="og:title" content="Home | La Flamme de l'Espoir"/>
        <!-- <meta property="og:type" content="article" /> -->
        <!-- <meta property="og:url" content="http://www.example.com/" /> -->
        <meta property="og:image"
              content="{{asset('assets/logo.png')}}"/>
        <meta property="og:image:secure_url"
              content="{{asset('assets/logo.png')}}"/>
        <meta property="og:image:width" content="180"/>
        <meta property="og:image:height" content="110"/>
        <meta property="og:image"
              content="{{asset('assets/logo.png')}}"/>
        <meta property="og:image:secure_url"
              content="{{asset('assets/logo.png')}}"/>
        <meta property="og:image:width" content="200"/>
        <meta property="og:image:height" content="200"/>
        <meta property="og:site_name" content="La Flamme de l'Espoir"/>
        <meta property="fb:admins" content="172597779583559"/>


        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon.ico')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon.ico')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon.ico')}}">
        <link rel="manifest" href="favicons/site.webmanifest.txt">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">


        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="inner-cursor"></div>

        <!--Loader-->
        <div class="loader">
            <h1>D <span id="point-h1">.</span></h1>
        </div>
        <!--Fin Loader-->

        <div id="container-principal" class="">

            {{--     Sweet Alert      --}}
            @include('sweetalert::alert')

            {{--      Toogle Menu for Mobile      --}}
            @include('components.toggle-menu.main')

            {{--     Side Left Bar      --}}
            @include('components.side-leftbar.main')

            {{--     Side Right Bar      --}}
            @include('components.side-rightbar.main')

            <!-- Section Centré --------------->

            <div id="fullpage" class="container-scroll">

                {{--     Home Section      --}}
                @include('sections.home')

                {{--     About Section      --}}
                @include('sections.about')

                {{--     Portfolio Section      --}}
                @include('sections.portfolio')

                {{--     Contact Section      --}}
                @include('sections.contact')

            </div>

        </div>

        <!--Fin Section Centré-->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript">
            let swiper = new Swiper('.swiper-container', {
                slidesPerView: "auto",
                spaceBetween: 70,
                centeredSlides: true,
                grabCursor: true,
                loop: true,
                nteloopAdditionalSlides: 70,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    499: {
                        spaceBetweenSlides: 10,
                        nteloopAdditionalSlides: 10
                    },
                }
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/Draggable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <!---->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

        <script src="{{asset('assets/js/cursor.js')}}"></script>
        <script src="{{asset('assets/js/index.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(()=>{
                $('#container-principal').addClass('d-none');
                setTimeout(() => {
                    $('.loader').addClass('d-none');
                    $('#container-principal').removeClass('d-none');
                }, 7000)
            })
            $(document).on('click', 'ul li', function () {
                $(this).addClass('active').siblings().removeClass('active')
            })

        </script>
        <script src="{{asset('assets/js/contact.js')}}"></script>

        <script type="text/javascript">

            @yield('javascript')

        </script>

    </body>
</html>
