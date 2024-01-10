<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{-- Fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .main-content {
            background-color: #F7F7F4;
        }

        .menuimage {
            width: 42px;
            height: 40px;
        }

        #create-task-form {
            position: relative;
        }

        #close-form {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            border: none;
            background: none;
            color: #333;
            /* Adjust the color as needed */
        }

        #close-form:hover {
            color: #ff0000;
            /* Adjust the hover color as needed */
        }

        .nav-item {
            width: 318px;
            height: 76px;
            padding: 0px, 0px, 0px, 20px;
            gap: 120px;
        }

        .circle-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #28a745;
        }

        .card {
            border-width: 0px 0px 1px 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, .125);
        }

        .circle-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 2px solid black;
        }

        .circle-icon i {
            font-size: 24px;
            color: white;
        }

        .full-length-btn {
            width: 100%;
            background-color: #cc5200;
            color: white;
            text-align: left;
            /* Align text to the left */
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .full-length-btn i {
            margin-right: 5px;
        }

        .nav-link {
            text-transform: uppercase;
            font-size: 20px;

        }

        .nav-link:hover {
            color: orange;
            text-transform: uppercase;
        }

        .logo {
            height: 64px;
            margin: 40px;
        }

        @media (max-width: 480px) and (min-width: 200px) {
            .logo {
                height: 14px;
                margin: 12px;
            }
        }
    </style>

</head>

<body class="antialiased">

    {{-- Sidebar --}}
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <!-- <span class="fs-4 d-none d-sm-inline bi bi-123"> </span> -->
                        <img src="/logo.jpg" alt="Logo" class="logo">
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                        <li>
                            <a href="{{ route('index') }}" class="nav-link px-0 align-middle">
                                <span class="fs-4 bi bi-list-task"></span><span class="ms-1 d-none d-sm-inline p-3"> New
                                    Tasks</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('createprofile') }}" class="nav-link px-0 align-middle">
                                <span class="fs-4 bi bi-people"></span><span class="ms-1 d-none d-sm-inline p-3"> New
                                    Users</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3 main-content">
                {{-- Body --}}
                <div class="container p-5">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize sortable on the list
            new Sortable(document.getElementById('sortable-list'), {

                animation: 150, // Animation in milliseconds
                handle: '.card-header, .card-body', // Restrict drag start to the header
                onUpdate: function(evt) {

                }


            });

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleButton = document.getElementById('toggle-form');
            var createTaskForm = document.getElementById('create-task-form');
            var closeFormButton = document.getElementById('close-form');

            if (toggleButton && createTaskForm && closeFormButton) {
                toggleButton.addEventListener('click', function() {
                    createTaskForm.style.display = (createTaskForm.style.display === 'none') ? 'block' :
                        'none';
                });

                closeFormButton.addEventListener('click', function() {
                    createTaskForm.style.display = 'none';
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js">
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">


    </script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>









































</body>


</html>