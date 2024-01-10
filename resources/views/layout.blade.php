<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{-- Fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">


</head>

<body class="antialiased">

    {{-- Sidebar --}}
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                    <header class="header" role="banner">
                        <p class="logo">
                            <a href="#">0 <span>3</span></a>
                        </p>
                        <div class="nav-wrap">
                            <nav class="main-nav" role="navigation">
                                <ul class="unstyled list-hover-slide">
                                    <li><a href="{{ route('index') }}" class="active"> <span class="fs-4 fa fa-th-large"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Tasks</span></a></li>
                                    <li><a href="{{ route('createprofile') }}"> <span class="fs-4 fa fa-user-o"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Users</span></a></li>
                                    <li><a href="#"> <span class="fs-4 fa fa-pie-chart"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Collections</span></a></li>
                                    <li><a href="#"> <span class="fs-4 fa fa-suitcase"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Projects</span></a></li>
                                    <li><a href="#"> <span class="fs-4 fa fa-clock-o"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Time Manager</span></a></li>
                                    <li><a href="#"> <span class="fs-4 fa fa-calendar"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Calendar</span></a></li>
                                    <li><a href="#"> <span class="fs-4 fa fa-cog"></span><span class="ms-1 d-none d-sm-inline p-3">
                                                Settings</span></a></li>
                                </ul>
                            </nav>

                        </div>
                    </header>
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