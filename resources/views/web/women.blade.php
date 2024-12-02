<x-web-layout>

<div class="productparent">

<div class="main-content">
    
      
<div class="product-grid">
       @foreach($products as $product)
       <div class="product-card">
        <img src="products/{{ $product->image }}" alt="{{ $product->name }}" class="product-image">
        <div class="product-info">
            <h2 style="font-size: smaller; color: rgb(255, 255, 255);">{{ $product->name }}</h2>
            <h2 style="font-size: smaller; color: rgb(255, 255, 255);">Rs.{{ $product->price }}</h2>

            <button class="order-button" onclick="location.href='products/{{ $product->id }}/show'">Shop Now</button>

            <div style="margin-top: 10px;">

               
            </div>
        </div>
    </div>
    @endforeach
</div>




</div>

    
</div>



</x-web-layout>