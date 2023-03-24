<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Query Builder CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function(e) {
                e.preventDefault()
                let href = $(this).attr('href')

                swal({
                    title: "Warning",
                    text: "This Data Will be Deleted",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((result) => {
                    if (result) {
                        $(this).parent('div').parent('div').parent('td').parent('tr').remove()
                        $.ajax({
                            url: href,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'DELETE',
                            dataType: 'json',
                            success: function(res) {
                                swal({
                                    title: 'Success',
                                    text: 'Data Successfully Deleted',
                                    icon: "success",
                                    button: "Close"
                                }).then(() => {
                                    location.reload()
                                })
                            },
                            error: function(res) {
                                swal({
                                    title: "Oops..!",
                                    text: "Something went Wrong",
                                    icon: "error",
                                    button: "Close",
                                }).then(() => {
                                    location.reload();
                                });
                            }
                        })
                    }
                })
            })
        })
    </script>
    @stack('scripts')
</body>

</html>
