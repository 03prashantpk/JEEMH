<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => 'Register'])

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
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile ">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="images/profile.jpg" alt="" style="border-radius: 23px; width: 200px">
                                    </div>
                                    <div class="col-lg-6">
                                        <form class="text-white" method="post" action="{{ route('registration.register') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control bg-dark text-white" name="name" placeholder="Name" value="{{ old('name') }}">
                                                @error('name') <!-- Display error message for 'name' -->
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" class="form-control bg-dark text-white" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                                @error('email') <!-- Display error message for 'email' -->
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control bg-dark text-white" name="password" placeholder="Password">
                                                @error('password') <!-- Display error message for 'password' -->
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input text-white" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>