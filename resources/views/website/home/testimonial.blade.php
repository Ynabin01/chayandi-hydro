
<section id="testimonial" class="testimonial-section">
    <div class="container">
        <div class="section-title-middle text-center">

                <!-- Get The Right Facts & Clients Testimonials -->
            </span>
            <h2>Testimonials</h2>
        </div>
        <div class="testimonial-content">
            <div class="testimonial-part testimonial-img">
                <img src="website/img/background/tbg.jpg" alt="">
            </div>
      
            <div class="testimonial-part testimonial-text-slide">
                <div id="testimonial-slideid" class="testimonial-slide owl-carousel">
                    {{-- <div class="testimonial-slide-text headline pera-content position-relative">
                        <div class="q-icon">
                            <i class="fas fa-quote-right"></i>
                                </div>
                                <h3>“Many Benefits for the environment”</h3>
                                <p>At dolore magna aliqua enim veniam quis nostrul
                                    minim exercitation ulamco aliquip exa comod sed
                                    sequat duis aute irure dolor repreh derit voluptate
                                    cillum dol afugiat nula pariatur vitae.</p>
                                <div class="testimonial-img-rate">
                                    <div class="testimonial-pic float-left">
                                        <img src="website/img/testimonial/tst1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-rate ul-li">
                                        <h4>Donald James</h4>
                                        <span>Eltron Company</span>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="testimonial-slide-text headline pera-content position-relative">
                                <div class="q-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <h3>“Many Benefits for the environment”</h3>
                                <p>At dolore magna aliqua enim veniam quis nostrul
                                    minim exercitation ulamco aliquip exa comod sed
                                    sequat duis aute irure dolor repreh derit voluptate
                                    cillum dol afugiat nula pariatur vitae.</p>
                                <div class="testimonial-img-rate">
                                    <div class="testimonial-pic float-left">
                                        <img src="website/img/testimonial/tst1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-rate ul-li">
                                        <h4>Donald James</h4>
                                        <span>Eltron Company</span>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @if (isset($testimonial))
                            @foreach ($testimonial as $test)
                                <div class="testimonial-slide-text headline pera-content position-relative">
                                    <div class="q-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <h3> "{{ $test->caption ?? '' }}"</h3>
                                    <p> {{ $test->short_content }}</p>
                                    <div class="testimonial-img-rate">
                                        <div class="testimonial-pic float-left">
                                            <img src="{{ $test->banner_image }}" alt="">
                                        </div>
                                        <div class="testimonial-rate ul-li">
                                            <h4> {{ $test->long_content }} </h4>
                                            {{-- <span>Eltron Company</span> --}}
                                            <ul>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                </div>
            
        </div>
    </div>
</section>
