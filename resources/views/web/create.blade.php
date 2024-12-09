<x-web-layout>
    <div class="container-fluid d-flex justify-content-center align-items-start" style="min-height: 80vh;">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <!-- Add margin-top to the "Show All Products" button -->
            <div class="text-center mb-4 mt-4">
                <a href="/admin" class="btn btn-dark btn-lg">Show All Products</a>
            </div>
            <div class="card p-4 shadow">
                <form method="POST" action="/store" enctype="multipart/form-data">
                    @csrf
                    <!-- Name Field -->
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <!-- Description Field -->
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" rows="4" name="description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <!-- Price Field -->
                    <div class="form-group mb-3">
                        <label for="price">Price</label>
                        <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" step="0.01" placeholder="Enter price">
                        @if($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>

                    <!-- Image Upload and Preview -->
                    <div class="form-group mb-4">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control" onchange="previewImage(event)" />
                        @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        <!-- Image Preview Container -->
                        <div id="image-preview-container" style="margin-top: 10px; text-align: center;">
                            <img id="image-preview" src="" alt="Image Preview" class="img-fluid" style="display: none; max-width: 100%; max-height: 300px;">
                        </div>
                    </div>

                    <!-- Category Selection -->
                    <div class="form-group mb-4">
                        <label for="category">Category:</label>
                        <select id="category" name="category" class="form-control" required>
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                        </select>
                        @if($errors->has('category'))
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-dark btn-lg">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-web-layout>

<script>
    // Function to preview the selected image before submitting the form
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const imagePreview = document.getElementById('image-preview');
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block'; // Show the image preview
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
