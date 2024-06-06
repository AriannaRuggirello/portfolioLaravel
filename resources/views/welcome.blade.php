@extends('layouts.nav')

@section('content')
    <!-- hero -->
    <section id="home" class="hero py-5 d-flex align-items-center">
        <div class="m-auto" style="width: 70%;">

            <div class="row align-items-center justify-content-between text-center text-lg-start py-5">

                <div class="col-sm-10 col-lg-5 ">
                    <h1 class="py-1">Junior Full Stack Web Developer &#128075;</h1>
                    <span>Sono Arianna Ruggirello. Appassionata di codice <br> vivo in Friuli,Italia &#128205;
                    </span>
                    <br><br>
                    <!-- social -->
                    <div>
                        <a href="https://github.com/AriannaRuggirello" target="_blank">
                            <i class="fs-3 fa-brands fa-github me-3"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/arianna-ruggirello-63509323a/" target="_blank">
                            <i class="fs-3 fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <!-- avatar icon -->
                <div class="col-sm-10 col-lg-5 text-end">
                    <img src="../../public/icone/avatar.jpg" style="width: 300px;" alt="">
                </div>
                <!-- tech skills -->
                <div class="col-sm-10 col-lg-9">
                    <div class="row row-cols-sm-1 row-col-lg-2 gap-1">

                        <h5 class="col-lg-2 text-center text-lg-start">My skills </h5>
                        <div class="col-lg-9">
                            <div class="row row-cols-lg-8 justify-content-center py-2 gy-4">
                                <img style="width: 60px;" src="../../public/icone/html-5.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/css-3.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/js.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/sass.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/bootstrap.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/Vue.js_Logo_2.svg.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/php.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/mysql.png" alt="">
                                <img style="width: 60px;" src="../../public/icone/1969px-Laravel.svg.png" alt="">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- about -->
    <section id="about">
        <div class="m-auto" style="width: 80%;">
            <div class="row justify-content-between align-items-center text-center text-lg-start pb-5">
                <h4 class=" green ">CHI SONO</h4>
                <h2 class="pb-3"><b>Il mio mondo, i miei progetti, la mia identità. Chi sono? 🧐</b></h2>

                <div class="col-lg-6 py-3">
                    <img class="rounded-circle img-thumbnail" src="../../public/myphoto.jpg" alt="">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p>Ho appena concluso un corso di formazione tramite un'accademia online incentrata sullo sviluppo
                        web.
                        Sebbene la mia formazione attuale sia orientata verso la tecnologia ho lavorato anche nella
                        ristorazione e nell'abbigliamento dove ho imparato come trattare con una varietà di persone e
                        situazioni, sviluppando una buona empatia e la capacità di risolvere problemi in modo efficace.
                    </p>
                    <a href="../../public/cv.pdf" download="curriculum.pdf">
                        <button type="button" class="mt-4 rounded-pill btn ">
                            Download CV
                        </button>
                    </a>

                </div>




            </div>
        </div>

    </section>

    <!-- contattami -->
    <section id="contacme" class="py-5  text-center text-lg-start">
        <div class="m-auto " style="width: 80%;">
            <h4 class="green">CONTATTAMI</h4>
            <h2><b>Hai domande o idee? Scrivimi! &#128071;</b></h2>
            <div class="row pt-3 ">
                <!-- location -->
                <div class="col-sm-12 col-lg-4 pb-3">

                    <div class="pb-2">
                        <i class="fs-3 green fa-regular fa-map border p-2 rounded-circle"></i>
                    </div>
                    <div>
                        <h5>Dove mi trovo</h5>
                        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">Friuli,Italia</a>
                    </div>


                </div>

                <!-- mail -->
                <div class="col-sm-12 col-lg-4 ">

                    <div class="pb-2">
                        <i class="green fs-3 fa-regular fa-envelope border p-2 rounded-circle"></i>
                    </div>
                    <div>
                        <h5>Mail</h5>
                        <a href="mailto:ruggirelloarianna11@gmail.com?subject=Maggiori informazioni"
                            class="link-offset-2 link-underline link-underline-opacity-0">ruggirelloarianna11@gmail.com</a>
                    </div>

                </div>



            </div>
        </div>

    </section>


    <footer class="py-5 ">
        <div class="m-auto" style="width: 80%;">

            <div class="row justify-content-lg-between ">
                <div class="col-sm-12 col-lg-6 pb-3 text-center text-lg-start ">
                    <h6>Copyright © 2023. All rights are reserved</h6>
                </div>

                <div class="col-sm-12 col-lg-6 text-center text-lg-end ">
                    <a href="https://github.com/AriannaRuggirello" target="_blank">
                        <i class="fs-3 fa-brands fa-github me-3"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/arianna-ruggirello-63509323a/" target="_blank">
                        <i class="fs-3 fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
@endsection
