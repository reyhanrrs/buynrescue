@extends('layouts.template')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Contact Us</h2>
            <p class="col-12 text-center">Please feel free to contact us</p>
        </header>

        <div class="tm-container-inner-2 tm-contact-section">
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                        </div>
                        
                        <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                        </div>
            
                        <div class="form-group">
                        <textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
                        </div>
                
                        <div class="form-group tm-d-flex">
                        <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
                            Send
                        </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="tm-address-box">
                        <h4 class="tm-info-title tm-text-success">Our Address</h4>
                        <address>
                        Jl. Raya Puputan No.86, Dangin Puri Klod, Kec. Denpasar Tim., Kota Denpasar, Bali 80234
                        </address>
                        <a href="tel:0361244445" class="tm-contact-link">
                           0361244445
                        </a>
                        <a href="mailto:rufus@gmail.com" class="tm-contact-link">
                            rufus@gmail.com
                        </a>
                        <!-- <div class="tm-contact-social">
                            <a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                            <a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
                            <a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tm-container-inner-2 tm-map-section">
            <div class="row">
                <div class="col-12">
                    <div class="tm-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.192459501123!2d115.22439021435677!3d-8.673239590687833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f24881c587%3A0xe8413f111e0aa096!2sInstitut%20Teknologi%20Dan%20Bisnis%20STIKOM%20BALI!5e0!3m2!1sid!2sid!4v1665029648925!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tm-container-inner-2 tm-info-section">
            <div class="row">
                <div class="col-12 tm-faq">
                    <h2 class="text-center tm-section-title">FAQs</h2>
                    <p class="text-center">Some Questions about Us</p>
                    <div class="tm-accordion">
                        <button class="accordion">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quidem.</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ea, perspiciatis eveniet incidunt voluptatum explicabo tempora quo suscipit labore iure!</p>
                        </div>
                        
                        <button class="accordion">2. Vestibulum ante ipsum primis in faucibus orci?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis deleniti dolorum dolorem illo ipsum, nihil expedita, harum est adipisci odit omnis rerum quod. Quidem, praesentium similique expedita corrupti molestias ex!</p>
                        </div>
                        
                        <button class="accordion">3. Can I redistribute this template as a ZIP file?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure corrupti tempora facilis nesciunt deserunt! Vel accusantium, eos provident asperiores molestiae, repudiandae ipsa eligendi rem non ad saepe aperiam numquam aspernatur sit reprehenderit voluptatum! Nemo, voluptate tenetur!</p>
                        </div>
                        
                        <button class="accordion">4. Ut ac erat sit amet neque efficitur faucibus et in lectus?</button>
                        <div class="panel">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, excepturi id placeat iste in nam suscipit laboriosam, nulla, ducimus iusto et dicta ex.</p>
                        </div>
                    </div>	
                </div>
            </div>
        </div> -->
    </main>
@endsection