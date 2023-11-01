<!DOCTYPE html>
<html lang="en">

@include('components.head', ['title' => 'Chapters'])

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

                    <!-- ***** Chapter Table Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="chapter-table">
                                <div class="heading-section">
                                    <h4>Chapters</h4>
                                </div>
                                <table class="table-container">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Chapter Name</th>
                                            <th>Subject</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>Teacher</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($chapters as $chapter)
                                        <tr>
                                            <td>#{{ $chapter->id }}</td>
                                            <td>{{ $chapter->chaptername }}</td>
                                            <td>{{ $chapter->subject }}</td>
                                            <td >{{ $chapter->price }}</td>
                                            <td style="color: #00FF00">₹{{ $chapter->amount }}</td>
                                            <td>{{ $chapter->teachername }}</td>
                                            <td class="main-button">
                                                <a href="#"><i class="fa fa-download"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <div class="main-button text-center">
                                    <a href="../browse">Browse All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Chapter Table End ***** -->
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>
