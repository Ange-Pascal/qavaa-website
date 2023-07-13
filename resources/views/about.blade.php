@extends('./layouts/menu')

@section('menu-content')
    <div id="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>About Us</h1>
                            <p class="mb-0">Qavaa Group is a social enterprise which seeks to enable sustainable
                                development in Africa by encouraging aspiring entrepreneurs and sidepreneurs to give free
                                expression to their dreams and foster economic growth within their community. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">

                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/value1.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="priority" style="color: grey">Our Priority</h4>
                                <h4 class="subheading" style="font-weight: bold">Our Values</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">We work tirelessly towards delighting our customers with exceptional
                                    quality services and find profound pride in building world-class tech talent in Africa.
                                    These values are set and met by our team in every aspect of the work we do.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/value1.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="priority" style="color: grey">Our Priority</h4>
                                <h4 class="subheading" style="font-weight: bold">Our Mission</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Our mission is to bring transparency and certainty in the business
                                    world amongst Africans, to render consulting services to African SMEs to enable them
                                    meet their digital challenges in the 21st century, to ease the trade in Africa through
                                    reliable logistics and payments, and to manage their online presence.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/value1.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="priority" style="color: grey">Our Vision</h4>
                                <h4 class="subheading" style="font-weight: bold">Our Vision</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                    unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/value1.jpg"
                                alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="priority" style="color: grey">Lorem ipsum</h4>
                                <h4 class="subheading" style="font-weight: bold">Lorem ipsum dolor</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                    unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>  

        <!-- Faq Section - Home Page -->
    <section id="faq" class="faq">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="content px-xl-5">
                        <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span>
                            </h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a
                                    pellentesque?</span></h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                                    laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit
                                    pellentesque?</span></h3>
                            <div class="faq-content">
                                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in
                                    nulla?</span></h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                                    laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor
                                    consequat?</span></h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>
            </div>

        </div>

    </section><!-- End Faq Section -->
    </div>
@endsection
