<div class="hero-wrap" style="background-image: url('{{ asset('assets/guest') }}/images/blockchain.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 col-md-6 ftco-animate opacity-75" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Lagos <br>
                    <span class="text-danger">Blockchain Week</span>
                </h1>

                <p class="strong fw-bold mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
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
                <div
                    class="block bg-transparent shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                    <img class="rounded-t-lg" src="{{ asset('logo-banner.jpg') }}"
                        alt="" />
                    <div class="p-6_ bg-white dark:bg-neutral-700">
                        <h5 class="px-4 pt-4 text-center uppercase mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral">
                            Sponsor Us
                        </h5>
                        <small class="px-4 block font-medium small">For Sponsorship, please fill the form below. A teammate will reach out to you.</small>
                        <div class="text-base text-neutral-600 dark:text-neutral-200">
                            <form disabled action="#" class="disabled p-4 request-form ftco-animate">
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group text-neutral-800 dark:text-neutral">
                                    <div class="checkbox">
                                        <label>
                                            <input disabled type="checkbox" value="" class="mr-2"> I have read
                                            and
                                            accept
                                            the
                                            terms and conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input disabled type="submit" value="Join now" class="btn btn-primary py-3 px-4">
                                </div>

                                <div class="mt-3 text-center text-neutral-800 dark:text-neutral">Hosted by: <strong>EmageNewsDAO</strong>.</div>
                            </form>
                        </div>
                        {{-- <button type="button"
                            class="bg-primary hover:bg-primary-600 focus:bg-primary-600 active:bg-primary-700 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Button
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
