<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets/guest') }}/css/style.css">
    <script nonce="8b3bbed3-f334-4250-bd33-5b7d0d04a5ae">
        (function(w, d) {
            ! function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: f
                        })
                    }
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                        i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer)
                        for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                ...o[1],
                                ...p[1]
                            })), {}))) zaraz.set(n[0], n[1], {
                            scope: "page"
                        });
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q)
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith(
                        "_zaraz_"))).forEach((s => {
                        try {
                            a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                        } catch {
                            a[c]["z_" + s.slice(7)] = r.getItem(s)
                        }
                    }));
                    i.referrerPolicy = "origin";
                    i.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h)
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    {{ $slot }}

    {{-- Scripts --}}
    <script src="{{ asset('assets') }}/guest/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('assets') }}/guest/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/aos.js"></script>
    <script src="{{ asset('assets') }}/guest/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('assets') }}/guest/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="{{ asset('assets') }}/guest/js/google-map.js"></script>
    <script src="{{ asset('assets') }}/guest/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7cdf6886cb540a47","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
