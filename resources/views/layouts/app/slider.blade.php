<div class="hero-wrap" style="background-image: url('{{ asset('assets/guest') }}/images/blockchain.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 opacity-75 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Lagos <br>
                    <span class="text-danger">Blockchain Week</span>
                </h1>

                <p class="mb-4 strong fw-bold" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <span class="icon-calendar mr-2"></span>00-00 [Month] {{ now()->year }} - Lagos
                </p>

                <div id="timer" class="d-flex" data-countdown="28 May 2023 9:09:00 GMT+01:00">
                    <div class="time" id="days"><strong class="counting">00</strong><span>Days</span></div>
                    <div class="time pl-3" id="hours"><strong class="counting">00</strong><span>Hours</span></div>
                    <div class="time pl-3" id="minutes"><strong class="counting">00</strong><span>Minutes</span></div>
                    <div class="time pl-3" id="seconds"><strong class="counting">00</strong><span>Seconds</span></div>
                </div>
            </div>

            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-md-5 mt-0">
                <form disabled action="#" class="disabled request-form ftco-animate">
                    <h2 class="text-center uppercase">Sponsore Us</h2>
                    <div class="form-group">
                        <input disabled type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input disabled type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input disabled type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input disabled type="checkbox" value="" class="mr-2"> I have read and accept the
                                terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input disabled type="submit" value="Join now" class="btn btn-primary py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
