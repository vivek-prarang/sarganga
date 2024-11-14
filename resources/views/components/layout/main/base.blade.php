<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saraswati By Ganga</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/main/css/style.css')}}">
    
</head>

<body>

    <!-- Top 3 Columns -->
    <div class="container-fluid">
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
                        <img class="logo-img" src="{{asset('assets/main/images/logo.jpg')}}" alt="Saraswati By Gamga">
                    </div>                    
                </div>
                <p class="main-slug-line text-center text-primary"> A Library of World Knowledge on the Ganga River Bank in India </p>
            </div>
            <div class="col-sm-2">
                <div class="text-end pe-1">
                    Entry: Only By Invitation
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Collection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Concept</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Collaboration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sites</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>

   {{$slot}}

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
