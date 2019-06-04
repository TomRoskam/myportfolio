<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="images\favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>

<body class="indexWrapper">

    <p class="excuse">Oops, Internal Server occured...</p>
    <p class="errorCodeMessage">Error code:</p>
    <div class="errorTitle">
        <p>500</p>
    </div>

    <div class="errorActions">
        <h4 class="text-white">Please go:</h4>
        <a class="btn btn-lg btn-info text-white errorButton"  href="{{ url('/') }}">Home</a>
        <a class="btn btn-lg btn-info text-white errorButton" href="{{ URL::previous() }}">Back</a>
    </div>

</body>