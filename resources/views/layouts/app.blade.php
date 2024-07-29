<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mister quiz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="all">
        <div class="maincontent">
            @include('layouts.header')
            @include('layouts.errors')
            <main>
                <div class="container">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        document.querySelector(".my-alert button").addEventListener("click", function() {
            document.querySelector(".my-alert").classList.remove("active_alert");
        });
        setTimeout(function(){
            document.querySelector('.my-alert').classList.remove("active_alert");
        }, 3000);
    </script>
</body>
</html>