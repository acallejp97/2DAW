<!doctype html>
<html lang="ens">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <title>2. Ebaluaketaren Azterketa</title>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    main>.container {
      padding: 60px 15px 0;
    }

    .footer {
      background-color: #f5f5f5;
    }

    .footer>.container {
      padding-right: 15px;
      padding-left: 15px;
    }

    code {
      font-size: 80%;
    }

    .galeria {
      column-count: 4;
      align-content: center;
    }

    .titulo {
      background-color: gray;
      text-align: center;
    }

    .inicio {
      align-content: center;
      height: 15em;
      width: 15em;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
  @include('partials.navbar')

  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      @notification() @yield('content')

    </div>
  </main>
  @include('partials.footer')

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>