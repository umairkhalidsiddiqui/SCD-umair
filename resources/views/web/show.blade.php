<x-web-layout>
    <div class="descriptionbody">
        <div class="descriptioncontainer">
            <!-- Product Image Section -->
            <div class="descriptionproduct-image">
                <img src="/products/{{ $product->image }}" alt="Product Image">
                <div class="descriptionthumbnail-gallery">
                    <img src="/products/{{ $product->image }}" alt="Thumbnail 1">
                    <img src="/products/{{ $product->image }}" alt="Thumbnail 2">
                    <img src="/products/{{ $product->image }}" alt="Thumbnail 3">
                </div>
            </div>

            <!-- Product Details Section -->
            <div class="descriptionproduct-details">
                <h2>{{ $product->name }}</h2>
                <p class="sku">SKU#: a-144400444856</p>
                <p class="stock-status">IN STOCK</p>
                <p class="price">PKR {{ number_format($product->price, 2) }}</p>

                <!-- Sizes Section -->
                <div class="sizes">
                    <p class="sizee">SIZE</p>
                    @foreach(['S', 'M', 'L', 'XL'] as $size)
                        <button>{{ $size }}</button>
                    @endforeach
                </div>

                <!-- Add to Bag Button -->
                <button class="descriptionadd-to-bag" onclick="location.href='{{ url('/form') }}'">ADD TO BAG</button>

                <!-- Description -->
                 <div style="margin-top:10px;">
                 <h6>DESCRIPTION</h6>
                 </div>
                <p class="description">
                    {{ $product->description }}
                </p>

                <!-- More Information Section -->
                <div class="descriptionmore-info">
                    <h3>More Information</h3>
                    <li><strong>Fabric:</strong> Blended</li>
                    <li><strong>Fit Type:</strong> Regular Fit</li>
                    <li><strong>Season:</strong> summer Collection</li>
                    <li><strong>Disclaimer:</strong> Due to the photographic lighting & different screen calibrations, the colors of the original product may slightly vary from the picture</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
