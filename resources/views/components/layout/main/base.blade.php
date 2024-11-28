<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saraswati By Ganga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}">
    <style>
        /* Image */
        .container-fluid .row .sub-logo .main-logo .logo-image-section img {
            width: 70px !important;
        }

        /* Image */
        .sub-logo .main-logo .logo-image-section img {
            margin-left: 6px;
        }

        @media (min-width:769px) {


            .row .sub-logo .main-logo {
                transform: translatex(0px) translatey(0px);
            }


            .sub-logo .main-logo .logo-text-section h1 {
                font-size: 30px;
            }


            .sub-logo .logo-text-section p i {
                font-size: 14px;
            }

        }

        .sub-logo .main-logo .logo-text-section h1 {
            margin-bottom: 0px;
        }


        /* body {
    position: relative;
    margin: 0;
    padding: 0;
} */

        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* Optional */
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(to bottom, rgba(255, 255, 255, 1) 10%, rgba(255, 255, 255, 0.8) 40%, rgba(255, 255, 255, 0.1) 100%),
                url('{{ $metaData['bg-image'] ?? '' }}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

            z-index: -1;
            opacity: 1;
            filter: blur(2px);
            transition: opacity 1s ease-in-out;
        }

        /* Optional: Add a fade-in effect on page load */
    body::before {
    animation: fadeInBlur 1s ease-in-out forwards;
}

        @keyframes fadeInBlur {
            0% {
                opacity: 0;
                filter: blur(10px);
            }

            20% {
                opacity: 0.3;
                filter: blur(7px);
            }

            60% {
                opacity: 0.6;
                filter: blur(5px);
            }

            100% {
                opacity: 1;
                filter: blur(2px);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @isset($metaData['main-title'])
            <div class="row">

                <div class="col-sm-4 test-start sub-logo">
                    <div class="text-center main-logo">
                        <div class="logo-text-section">
                            <h1 class="logo-text text-primary">Saraswati by Ganga</h1>
                            <p><i>Knowledge Flows. River Flows. Life Flows.</i></p>
                        </div>
                        <div class="logo-image-section">
                            <img class="logo-img" src="{{ asset('assets/main/images/logo.jpg') }}" alt="Saraswati By Gamga">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 test-start">
                    <div class="text-center">
                        <p class="text-center nav-main-title">{{ $metaData['main-title'] ?? '' }}</p>
                        <p class="main-slug-line text-center text-primary">{{ $metaData['slogan'] }}</p>
                    </div>
                </div>

            </div>
        @else
            <div class="row">
                <div class="col-sm-2">
                    <div class="ps-1">
                        Private Ashram
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="text-center main-logo">
                        <div class="logo-text-section">
                            <h1 class="logo-text text-primary">Saraswati by Ganga</h1>
                            <p><i>Knowledge Flows. River Flows. Life Flows.</i></p>
                        </div>
                        <div class="logo-image-section">
                            <img class="logo-img" src="{{ asset('assets/main/images/logo.jpg') }}" alt="Saraswati By Gamga">
                        </div>
                    </div>
                    <p class="main-slug-line text-center text-primary"> A Library of World Knowledge on the Ganga River Bank
                        in India </p>
                </div>
                <div class="col-sm-2">
                    <div class="text-end pe-1">
                        Entry: Only By Invitation
                    </div>
                </div>
            </div>
        @endisset

    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('collections') }}">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('concept') }}">Concept</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('collaborations') }}">Collaboration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site') }}">Sites</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
    <footer>
        <div class="pt-3 mb-0 pb-0">
            <p class="text-center m-0 p-0">
                All Rights Reserved &copy; {{ date('Y') }} <a target="_bank"
                    href="https://sarganga.com/">sarganga.com</a>
            </p>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalId = window.location.hash;
            if (modalId) {
                const modalElement = document.querySelector(modalId);
                if (modalElement && modalElement.classList.contains("modal")) {
                    const modal = new bootstrap.Modal(modalElement);
                    modal.show();
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
