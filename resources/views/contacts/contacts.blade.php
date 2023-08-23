@extends('./layouts/menu')
 


@section('menu-content')

<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Contacts</h1>
                    <p class="mb-0">Qavaa Marketplace is an online social networking website with a modern approach
                        that allows users to register for free, Shop, Buy & sell products or services online.
                        Create your user profile by adding basic to advance details, make connections and add other
                        users to your friends list, upon confirmation from other user you can see their updates and
                        message each other. </p>
                </div>
            </div>

            <div class="container" id="contact-form">
                <div class="item">
                    <div class="contact">
                        <div class="first-text"> let's go in touch </div>
                        <img src="" alt="" class="img">
                        <div class="social-link">
                           <span class="second-text "> Conact with us :</span>
                           <ul class="social-media">
                                <li> <a href="#"><i class='bx bxl-facebook'></i></a> </li>
                                <li> <a href="#"><i class='bx bxl-youtube'></i></a> </li>
                                <li> <a href="#"><i class='bx bxl-twitter'></i></a> </li>
                           </ul>
                        </div>

                        
                    </div>
                    <div class="submit-form">
                        <h4 class="third-text">Contact us</h4>
                        <form action="">
                            <div class="input-box">
                                <input type="text" name="fullname" id="" required>
                                <label for="">Full name</label>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" id="" required>
                                <label for="">Email</label>

                            </div>
                            <div class="input-box">
                                <input type="url" name="website" id="" required>
                                <label for="">Website</label>

                            </div>

                            <div class="input-box">
                                <select name="" id="" class="input">
                                    <option value="">E-commerce</option>
                                    <option value="">Digital Marketing</option>
                                    <option value="">Web Design</option>
                                    <option value="">Web & Mobil Development</option>
                                    <option value="">Maintenance</option>
                                    <option value="">Assistance</option>
                                </select>
                                <label for="">Service</label>

                            </div>
                            <div class="input-box">
                                <textarea name="message" id="" ></textarea>
                                <label for="">Message</label>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


