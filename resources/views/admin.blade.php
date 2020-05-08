@extends('layouts/template')
@section('slider') 
    <section class="home-section bg-dark-30" data-background="img/slider-home-01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="module-title font-alt mb-0"></h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="font-alt">Admin de la web</h4><br/>
                    <form id="contactForm" role="form" method="post" action="php/contact.php">
                        <div class="form-group">
                        <label class="sr-only" for="name">Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                        <p class="help-block text-danger"></p>
                      </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                    </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
                </div>
                <div class="col-sm-6">
                    <h4 class="font-alt">Additional info</h4><br/>
                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
                    <hr/>
                    <h4 class="font-alt">Business Hours</h4><br/>
                    <ul class="list-unstyled">
                        <li>Mo - Fr: 8am to 6pm</li>
                        <li>Sa, Su: 10am to 2pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection