<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/fonts/icon.css">
    <title>New Game</title>
</head>
<body>
    <main class="d-flex justify-content-between bg-light" style="height: 100vh; max-height: 100vh; overflow-x: auto; overflow-y: hidden">
        <section class="bg-dark d-flex flex-column mr-3" style="flex-basis: 25%">
            <div class="d-flex justify-content-center align-items-center py-3 border-bottom mb-3">
                <i class="material-icons mr-3 text-primary" style="font-size: 4em">account_circle</i>
                <h3 class="text-light">Admin Panel</h3>
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item d-flex mb-4 pl-5 text-light">
                    <i class="material-icons px-3">home</i>
                    <a href="/register" class="text-light">Home</a>
                </li>
                <li class="nav-item d-flex mb-4 pl-5 text-light">
                    <i class="material-icons px-3">dashboard</i>
                    <a href="/dashboard" class="text-light">Dashboard</a>
                </li>
                <li class="nav-item d-flex mb-4 pl-5 text-light">
                    <i class="material-icons px-3">list</i>
                    <a href="/list" class="text-light">Gams</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown d-flex justify-content-start pl-5 mb-3">
                <a href="/" class="text-danger px-3">Sign Out</a>
            </div>
        </section>
        <section class="d-flex flex-column mr-3 bg-secondary" style="flex-basis: 35%">
            <div class="d-flex justify-content-center align-items-center py-3 border-bottom mb-3">
                <i class="material-icons mr-3 text-dark" style="font-size: 4em">airplay</i>
                <h3 class="text-dark">Menu</h3>
            </div>
            <ul class="nav nav-pills flex-column justify-content-start pl-5 border-bottom">
                <li class="drop-down text-light mb-3">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Home</button>
                    <ul class="dropdown-menu list-unstyled fw-normal" style="cursor: pointer">
                        <li class="dropdown-item">Delete Game</li>
                        <li class="dropdown-item">Update Game</li>
                    </ul>
                </li>
                <li class="drop-down text-light mb-3">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Dashboard</button>
                    <ul class="dropdown-menu list-unstyled fw-bold" style="cursor: pointer">
                        <li class="dropdown-item">New Game</li>
                        <li class="dropdown-item">Comments</li>
                    </ul>
                </li>
            </ul>
            <div class="dropdown justify-content-start mt-3 pl-5">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Account</button>
                <ul class="dropdown-menu list-unstyled fw-normal" style="cursor: pointer">
                    <li class="dropdown-item text-success">New...</li>
                    <li class="dropdown-item">Profile</li>
                    <li class="dropdown-item">Setting</li>
                    <li class="dropdown-item text-danger">Sign Out</li>
                </ul>
            </div>

        </section>
        <section class="d-flex flex-column bg-dark" style="flex-basis: 40%">
            <div class="d-flex justify-content-center align-items-center py-3 border-bottom mb-3">
                <i class="material-icons mr-3 text-primary" style="font-size: 4em">apps</i>
                <h3 class="text-light">Quick Access</h3>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
