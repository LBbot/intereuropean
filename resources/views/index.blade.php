<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>InterEuropean</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/app.css'>
    <script src='/js/app.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Judson&display=swap" rel="stylesheet">
</head>

<body class="font-body text-white">
    @include('sections.introduction')
    @include('sections.services')
    @include('sections.global')
    @include('sections.team')
    @include('sections.testimonials')
    @include('sections.contact')

    <footer class="text-black grid xxl:grid-cols-2 border-t border-greyonwhite mx-24 mb-24 mt-12 pt-12">
        <nav class="grid md:grid-cols-5 justify-items-center place-items-center mb-2">
            <a href="/">
                <img src="/images/logo-dark.svg" alt="InterEuropean logo." class="pb-2">
            </a>
            <a href="#services" class="py-2 lg:text-lg font-semibold">Services</a>
            <a href="#our-team" class="py-2 lg:text-lg font-semibold">Our Team</a>
            <a href="#testimonials" class="py-2 lg:text-lg font-semibold">Testimonials</a>
            <a href="#contact" class="py-2 lg:text-lg font-semibold">Contact Us</a>
        </nav>
        <p class="pt-4 text-center sm:p-0 sm:text-right text-lg font-semibold self-center">
            Company Number: 11979154
        </p>
    </footer>

</body>

</html>
