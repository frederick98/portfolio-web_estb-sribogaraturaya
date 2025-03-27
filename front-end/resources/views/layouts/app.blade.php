<!DOCTYPE html>
<html style="font-size: 16px;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Page Title -->
        <title>@yield('title')</title>
        <!-- Meta Title -->
        @yield('metaTitle')
        <!-- Meta Keyword -->
        @yield('metaKeyword')
        <!-- Meta Description -->
        @yield('metaDesc')

        <!-- Styling -->
        @yield('css')
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">
        <link rel="stylesheet" id="u-theme-google-font" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        <link rel="stylesheet" id="u-page-google-font" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- <link rel="stylesheet" href="{{asset('css/header.css')}}"> -->
        <link rel="stylesheet" href="{{asset('source/nicepage.css')}}" media="screen">
        <link rel="stylesheet" href=" {{mix ('css/app.css')}}">
        <link rel="shortcut icon" href="{{ asset('source/images/SRRLOGO.png') }}">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-8K1VK1TZ6T"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-8K1VK1TZ6T');
        </script>

        <!-- Script -->
        @yield('script')
        <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "sriboga_raturaya",
            "sameAs": [
                "https://www.instagram.com/sriboga_raturaya/",
                "https://www.linkedin.com/company/pt-sriboga-raturaya/",
                "https://www.facebook.com/Sriboga-Raturaya-107310531590866/",
                "https://www.youtube.com/channel/UCai1JyzW1vRKNBwfgvXEMmQ",
                "https://twitter.com/sribogaraturaya"
            ]
        }</script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
        <!-- <meta name="page_type" content="np-template-header-footer-from-plugin"> -->
        <!-- <meta name="generator" content="Nicepage 4.6.5, nicepage.com"> -->
        <meta name="theme-color" content="#478ac9">
        <meta name="twitter:site" content="@">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Sriboga Raturaya">
        <meta name="twitter:description" content="sriboga_raturaya">
        <!-- <meta property="og:type" content="website">
        <meta property="og:title" content="Sriboga Raturaya">
        <meta property="og:description" content="​PT Sriboga Raturaya was founded in 1995 and since then, it has become the pioneer in producing  high quality flour. We have strategically built our business by expanding into the F&amp;B service franchise management, ensuring an end-to-end business operation that will be ready to serve the ever-growing middle class market in Indonesia.&nbsp;">
        <meta property="og:image" content="http://sriboga.establishedjakarta.com/images/SRRLOGO-9.png">
        <meta property="og:url" content="http://sriboga.establishedjakarta.com/"> -->
    </head>

    <body data-home-page="" data-home-page-title="Home" class="u-body u-xl-mode">
        <!-- Header Section -->
        @include('layouts.navbar')

        <!-- Content Section -->
        @yield('content')

        <!-- Footer Section -->
        @include('layouts.footer')
    </body>
</html>