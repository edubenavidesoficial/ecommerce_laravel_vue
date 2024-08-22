<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <!-- REQUIRED META TAGS -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO META TAGS -->
<meta name="description" content="Imporbensa - Venta de electrodomésticos, motocicletas y cajas amplificadas en todo Ecuador. Visítanos en AV QUITO E IBARRA, SANTO DOMINGO.">
<meta name="keywords" content="Electrodomésticos, Motocicletas, Cajas amplificadas, Ecuador, Santo Domingo, AV QUITO, Ibarra, Imporbensa">
<meta name="author" content="Imporbensa">

<!-- Open Graph Meta Tags (para compartir en redes sociales) -->
<meta property="og:title" content="Imporbensa - Electrodomésticos, Motocicletas y Cajas Amplificadas">
<meta property="og:description" content="Venta de electrodomésticos, motocicletas y cajas amplificadas en todo Ecuador. Ubicados en Santo Domingo.">
<meta property="og:image" content="{{ $favicon }}">
<meta property="og:url" content="https://imporbensa.com/">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Imporbensa - Electrodomésticos, Motocicletas y Cajas Amplificadas">
<meta name="twitter:description" content="Encuentra los mejores electrodomésticos, motocicletas y cajas amplificadas en todo Ecuador. Visítanos en Santo Domingo.">
<meta name="twitter:image" content="{{ $favicon }}">

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/default/css/custom.css') }}">
    <!-- PAGE TITLE -->
    <title>{{ Settings::group('company')->get('company_name') }}</title>

    <!-- FAV ICON -->
    <link rel="icon" type="image" href="{{ $favicon }}">

    @if (!blank($analytics))
        @foreach ($analytics as $analytic)
            @if (!blank($analytic->analyticSections))
                @foreach ($analytic->analyticSections as $section)
                    @if ($section->section == \App\Enums\AnalyticSection::HEAD)
                        {!! $section->data !!}
                    @endif
                @endforeach
            @endif
        @endforeach
    @endif
</head>

<body>
    @if (!blank($analytics))
        @foreach ($analytics as $analytic)
            @if (!blank($analytic->analyticSections))
                @foreach ($analytic->analyticSections as $section)
                    @if ($section->section == \App\Enums\AnalyticSection::BODY)
                        {!! $section->data !!}
                    @endif
                @endforeach
            @endif
        @endforeach
    @endif

    <div id="app">
        <default-component />
    </div>

    @if (!blank($analytics))
        @foreach ($analytics as $analytic)
            @if (!blank($analytic->analyticSections))
                @foreach ($analytic->analyticSections as $section)
                    @if ($section->section == \App\Enums\AnalyticSection::FOOTER)
                        {!! $section->data !!}
                    @endif
                @endforeach
            @endif
        @endforeach
    @endif

    <script>
        const APP_URL = "{{ env('MIX_HOST') }}";
        const APP_DEMO = "{{ env('MIX_DEMO') }}";
        const APP_KEY = "{{ env('MIX_API_KEY') }}";
    </script>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('themes/default/js/jquery-v3.7.1.min.js') }}"></script>
    <script src="{{ asset('themes/default/js/drawer.js') }}"></script>
    <script src="{{ asset('themes/default/js/modal.js') }}"></script>
    <script src="{{ asset('themes/default/js/jqueryScript.js') }}"></script>
    <script src="{{ asset('themes/default/js/tabs.js') }}"></script>
    <script src="{{ asset('themes/default/js/jqueryDropdown.js') }}"></script>
    <script src="{{ asset('themes/default/js/apexcharts/apexcharts.min.js') }}"></script>

</body>

</html>
