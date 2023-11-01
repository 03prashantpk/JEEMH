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
                                <h4 class="card-title text-center">All Chapters</h4>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allChapters as $chapter)
                                            <tr>
                                                <td class="py-1">#{{ $chapter->id }}</td>
                                                <td>{{ $chapter->chaptername }}</td>
                                                <td>{{ $chapter->subject }}</td>
                                                <td>
                                                    <!-- Display current price -->
                                                    <span id="price_{{ $chapter->id }}">{{ $chapter->price }}</span>
                                                </td>
                                                <td>
                                                   <p>{{ $chapter->amount }}</p> 

                                                    <i class="mdi mdi-grease-pencil change" style="padding: 1px 10px; margin: 4px 2px; cursor: pointer; background-color: green; color: white;" onclick="toggle('updateAmountForm_{{ $chapter->id }}')"></i>

                                                    <form id="updateAmountForm_{{ $chapter->id }}" style="display: none;" action="{{ route('admin.updateAmount', ['chapterId' => $chapter->id]) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="updated_amount" placeholder="New Amount" required>
                                                            <button type="submit" class="btn btn-success">Update Amount</button>
                                                        </div>
                                                    </form>

                                                </td>
                                                <td>{{ $chapter->teachername }}</td>
                                                <td>{{ $chapter->description }}</td>
                                                <td>{{ $chapter->created_at->format('j F Y') }}</td>
                                                <td>
                                                    <!-- Delete button -->
                                                    <form action="{{ route('admin.deleteChapter', ['chapterId' => $chapter->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
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

    <!-- JavaScript to toggle visibility of amount edit forms -->
    <script>
        function toggleAmount(chapterId) {
            const amountSpan = document.getElementById(`amount_${chapterId}`);
            const editAmountButton = document.getElementById(`editAmount_${chapterId}`);
            const updateAmountForm = document.getElementById(`updateAmountForm_${chapterId}`);

            if (amountSpan.style.display === "none" || amountSpan.style.display === "") {
                // Amount is hidden or not set, show it and hide the update form
                amountSpan.style.display = "inline";
                editAmountButton.textContent = "Cancel";
                updateAmountForm.style.display = "none";
            } else {
                // Amount is visible, hide it and show the update form
                amountSpan.style.display = "none";
                editAmountButton.textContent = "Edit Amount";
                updateAmountForm.style.display = "inline";
            }
        };

        function toggle(updateFormId) {
            const updateAmountForm = document.getElementById(updateFormId);
            if (updateAmountForm.style.display === "none" || updateAmountForm.style.display === "") {
                updateAmountForm.style.display = "inline";
            } else {
                updateAmountForm.style.display = "none";
            }
        };
    </script>
</body>

</html>