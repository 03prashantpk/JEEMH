<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', ['title' => 'Add Chapters'])

<?php
// write php code here only

?>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        @include('admin.components.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper" style="display: flex; justify-content: center;">
                    <div class="col-8 grid-margin stretch-card">

                        <div class="card">

                            <div class="card-body">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <h4 class="card-title text-center">Add All Your Chapters</h4>
                                <p class="card-description text-center">
                                    <button class="btn btn-sm btn-primary">Show As User Mode</button>
                                </p>
                                <form action="{{ route('admin.addChapters') }}" method="post" class="forms-sample" id="chapterForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="chapterName">Chapter Name</label>
                                        <input type="text" class="form-control" id="chapterName" name="chapterName" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <select class="form-control" id="subject" name="subject">
                                            <option value="">Select</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Organic Chemistry">Organic Chemistry</option>
                                            <option value="Inorganic Chemistry">Inorganic Chemistry</option>
                                            <option value="Physical Chemistry">Physical Chemistry</option>
                                            <option value="Math">Maths</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <select class="form-control" id="price" name="price">
                                            <option value="Free">Free</option>
                                            <option value="Paid">Paid</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="amountField" style="display: none;">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Price">
                                    </div>
                                    <div class="form-group" id="urlField">
                                        <label for="url">Chapter URL</label>
                                        <input type="url" class="form-control" id="url" name="url" placeholder="Course URL">
                                    </div>
                                    <div class="form-group" id="passwordField">
                                        <label for="password">Chapter Password</label>
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Chapter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="teacherName">Teacher Name</label>
                                        <input type="text" class="form-control" id="teacherName" name="teacherName" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceSelect = document.getElementById('price');
            const amountField = document.getElementById('amountField');
            const amountInput = document.getElementById('amount');
            const chapterForm = document.getElementById('chapterForm');

            priceSelect.addEventListener('change', function() {
                if (priceSelect.value === 'Free') {
                    amountInput.value = 0; // Set amount to zero for Free
                    amountField.style.display = 'none';
                } else {
                    amountField.style.display = 'block';
                }
            });


        });
    </script>
</body>

</html>