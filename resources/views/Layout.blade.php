<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <nav style="    background-color: #e5e7e221;" class="navbar navbar-expand-lg  p-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#button"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" herf="#button"></span>
        </button>
        <div class="collapse navbar-collapse" id="button">


                <li class="nav-item active ">
                    <a class="nav-link" href="/welcome">Home </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Add product</a>
                </li>



            </ul>

        </div>

    </nav>
</head>
<body>
@yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</html>
