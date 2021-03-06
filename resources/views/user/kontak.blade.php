@extends('user.layouts.main')
@include('user.layouts.navbar')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
        <div class="container mt-5">
            <div class="section-title">
                <h2>Kontak</h2>
                <p>Berikut merupakan data penyakit mata</p>
            </div>
        </div>

    <div>
        <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Jl. Jend. Sudirman No.224, Karanganyar, Kec. Indramayu,Kabupaten Indramayu, Jawa Barat 45123</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>eyecenterindramayu@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>(0234) 7128243</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-instagram"></i>
                        <h4>Sosial Media:</h4>
                        <p>Indramayueyecenter</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
    <div class="container">

        <div class="section-title">
            <h2>Doctors</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img
                            src="{{ asset('templateuser') }}/assets/img/doctors/doctors-1.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Medical Officer</span>
                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img
                            src="{{ asset('templateuser') }}/assets/img/doctors/doctors-2.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Anesthesiologist</span>
                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img
                            src="{{ asset('templateuser') }}/assets/img/doctors/doctors-3.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>Cardiology</span>
                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img
                            src="{{ asset('templateuser') }}/assets/img/doctors/doctors-4.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Neurosurgeon</span>
                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Doctors Section -->
