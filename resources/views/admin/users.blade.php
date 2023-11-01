<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', ['title' => 'Users'])

<body>
    <div class="container-scroller">

        <!-- partial:partials/_horizontal-navbar.html -->

        @include('admin.components.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper" style="display: flex; justify-content: center;">

                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Users</h4>
                                <p class="card-description">
                                    <button class="btn btn-sm btn-primary">Add Users</button>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Full Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    User Type
                                                </th>
                                                <th>Is Admin</th>
                                                <th>
                                                    Total Purchases
                                                </th>
                                                <th>
                                                    Joined Date
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allUsers as $user)
                                            <tr>
                                                <td class="py-1">
                                                    #{{ $user->id }}
                                                </td>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td> {{ $user->isPremium ? "Premium" : "Freemium" }} </td>
                                                <td> {{ $user->isAdmin ? "Yes" : "No" }} </td>
                                                <td>
                                                    {{ $user->totalPurchases }}
                                                </td>
                                                <td>
                                                    {{ $user->created_at->format('j F Y') }}
                                                </td>
                                                <td>
                                                    <form action="">
                                                        <input type="text" email="{{ $user->email }}" value="{{ $user->email }}" hidden disabled id="">
                                                        <label class="toggle-switch toggle-switch-success">
                                                            <input type="checkbox" checked="">
                                                            <span class="toggle-slider round"></span>
                                                        </label>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->

                <!-- Footer -->
                @include('admin.components.footer')

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('admin.components.scriptsLists')

</body>

</html>