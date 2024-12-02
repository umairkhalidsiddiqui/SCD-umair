<x-web-layout>

<div style="padding:50px";>

            <div class="text-center ">
                <a href="/admin" class="btn btn-dark btn-lg">Show All Products</a>
            </div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{ $message }}</strong>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-4" style="min-height: 500px; padding: 2rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h3 class="mb-4">Product Edit #{{ $product->name }}</h3>
                <form method="POST" action="/web/{{$product->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Name Field -->
                    <div class="form-group mb-4">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" />
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <!-- Description Field -->
                    <div class="form-group mb-4">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="description">{{ old('description', $product->description) }}</textarea>
                        @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <!-- Price Field -->
                    <div class="form-group mb-4">
                        <label for="price">Price</label>
                        <input 
                            id="price" 
                            type="number" 
                            class="form-control" 
                            name="price" 
                            value="{{ old('price', $product->price) }}" 
                            step="0.01" 
                            placeholder="Enter price">
                        @if($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>

                    <!-- Image Field -->
                    <div class="form-group mb-4">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" />
                        @if($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>


                    <div class="form-group mb-4">
                    <label for="category">Category:</label>
                    <select id="category" name="category" required   value="{{ old('category', $product->category) }}">
                    <option value="men" {{ old('category', $product->category) === 'men' ? 'selected' : '' }}>Men</option>
                    <option value="women" {{ old('category', $product->category) === 'women' ? 'selected' : '' }}>Women</option>
                    </select>
                    
                    </div>



                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-dark btn-block">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>



</div>
</x-web-layout>
