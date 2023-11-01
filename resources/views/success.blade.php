<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => 'Success'])

<body>

    <!-- ***** Preloader Start ***** -->
    @include('components.preloader')
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('components.header')
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content text-center">
                    <h1>Registration Successful</h1>
                    <p class="text-primary">Thank you for registering. You can now <a href="login">log in</a>.</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>
