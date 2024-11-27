<x-web-layout>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="text-center mb-4">
                <a href="/admin" class="btn btn-dark btn-lg">Show All Products</a>
            </div>
            <div class="card p-4 shadow">
                <form method="POST" action="/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" rows="4" name="description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                       <div class="form-group mb-3">
                       <label for="price">Price</label>
                       <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" step="0.01" placeholder="Enter price">
                       @if($errors->has('price'))
                       <span class="text-danger">{{ $errors->first('price') }}</span>
                       @endif
                    </div>

                    <div class="form-group mb-4">
                        <label for="image">Image</label>
                        <input type="file" id="image" name="image" class="form-control" />
                        @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-dark btn-lg">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-web-layout>