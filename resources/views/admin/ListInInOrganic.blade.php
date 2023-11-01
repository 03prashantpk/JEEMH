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
                                <h4 class="card-title text-center">In Organic Chemistry</h4>
                                <p class="card-description text-center">
                                    <button class="btn btn-sm btn-primary">View As Users</button>
                                </p>
                                <div class="table-responsive">
                                    <h4 class="card-title">Chapters</h4>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Chapter Name</th>
                                                <th>Subject</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Teacher Name</th>
                                                <th>Description</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allChapters as $chapter)
                                            <tr>
                                                <td class="py-1">#{{ $chapter->id }}</td>
                                                <td>{{ $chapter->chaptername }}</td>
                                                <td>{{ $chapter->subject }}</td>
                                                <td>{{ $chapter->price }}</td>
                                                <td>{{ $chapter->amount }}</td>
                                                <td>{{ $chapter->teachername }}</td>
                                                <td>{{ $chapter->description }}</td>
                                                <td>{{ $chapter->created_at->format('j F Y') }}</td>


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