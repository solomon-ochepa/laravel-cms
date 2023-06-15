<section class="banner banner-two">
    <ul class="cb-slideshow">
        <li><span>Image 01</span>
            <div></div>
        </li>
        <li><span>Image 02</span>
            <div></div>
        </li>
        <li><span>Image 03</span>
            <div></div>
        </li>
        <li><span>Image 04</span>
            <div></div>
        </li>
        <li><span>Image 05</span>
            <div></div>
        </li>
        <li><span>Image 06</span>
            <div></div>
        </li>
    </ul>

    <div class="banner-overlay">
        <div class="banner-content">
            <ul id="countdown" class="countdown">
                <li class="clock-item"><span class="count-number days">00</span>
                    <p class="days_text count-text">Days</p>
                </li>

                <li class="clock-item"><span class="count-number hours">00</span>
                    <p class="hours_text count-text">Hours</p>
                </li>

                <li class="clock-item"><span class="count-number minutes">00</span>
                    <p class="minutes_text count-text">Min</p>
                </li>

                <li class="clock-item"><span class="count-number seconds">00</span>
                    <p class="seconds_text count-text">Sec</p>
                </li>
            </ul>

            {{-- <p>don't miss the upcoming event</p> --}}
            <h2>{!! config('app.name') !!}</h2>

            <ul>
                <li>
                    <span class="flaticon-tool"></span>
                    @if (isset($date))
                        {{ __('24-29 December, 2021') }}
                        @else
                        <span title="To be announced" data-toggle="tooltip">{{ __('To be announced (TBA)') }}</span>
                    @endif
                </li>
                <li>
                    <span class="flaticon-signs"></span>
                    {{ __('To be announced (TBA)') }}
                </li>
            </ul>
        </div>
    </div>
</section>
