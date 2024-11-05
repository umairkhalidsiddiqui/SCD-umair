<x-web-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>

    <div class="homebodyy">

        <header class="site-header">
            <h1 class="header-title">WELCOME TO KHAREDAAR</h1>
            <p class="header-subtitle">Quality Fashion for Every Occasion</p>
        </header>

        <div class="banner-section">
            <img src="{{ asset('images/banner-bg.jpg') }}" alt="Banner Image" class="banner-img">
        </div>

        <div class="main-content">




        <h2 class="title">OUR HOT SELLING PRODUCTS</h2>


        <div class="product-grid">
      <!-- Repeat this product card for each item -->
      <div class="product-card">
        <img src="https://outfitters.com.pk/cdn/shop/files/F1075106801_1.jpg?v=1728449359" alt="Product 1"
          class="product-image">
        <div class="product-info">

          <h2 id="quotedesign" style="font-size: smaller; color: rgb(255, 255, 255);">Not A Bad Life Raglan</h2>
          
          <h3>Crew Neck Basic T-shirt</h3>

          <form style="color: white;">
            <label>L</label>
            <input type="radio" id="small" name="size" value="Small">
            <label>M</label>
            <input type="radio"id="medium" name="size" value="medium">
            <label>S</label>
            <input type="radio"id="large" name="size" value="large"><br>
          

          </form>
          <p>Rs.4,999.00</p>
          
          <button class="order-button" onclick="location.href='{{ url('/description') }}'">Shop Now</button>

        </div>
      </div>

      <div class="product-card">
        <img src="https://outfitters.com.pk/cdn/shop/files/F1067106814.jpg?v=1730289373" alt="Product 1"
          class="product-image">
        <div class="product-info">
          <h2 id="quotedesign"style="font-size: smaller;  color: rgb(255, 255, 255);">Visionary</h2>
          <h3>Crew Neck Basic T-shirt</h3>
          <form style="color: white;">
            <label>L</label>
            <input type="radio">
            <label>M</label>
            <input type="radio">
            <label>S</label>
            <input type="radio">

          </form>
          <p>Rs.8,000.00</p>
          <button class="order-button" onclick="location.href='{{ url('/description') }}'">Shop Now</button>

        </div>
      </div>


      <div class="product-card">
        <img
          src="https://outfitters.com.pk/cdn/shop/files/F1075106901_2_e7987c46-fbf5-4add-918a-764f15de60d0.jpg?v=1728449359"
          alt="Product 1" class="product-image">
        <div class="product-info">
          <h2 id="quotedesign" style="font-size: smaller; color: white;">Create Your Legacy</h2>
          <h3>Crew Neck Basic T-shirt</h3>
          <form style="color: white;">
            <label>L</label>
            <input type="radio">
            <label>M</label>
            <input type="radio">
            <label>S</label>
            <input type="radio">

          </form>
          <p>Rs.3,999.00</p>
          <button class="order-button" onclick="location.href='{{ url('/description') }}'">Shop Now</button>

        </div>
      </div>
      
        
          
          <div class="product-card">
            <img src="https://outfitters.com.pk/cdn/shop/files/F0090204901_2.jpg?v=1730461384&width=360" alt="Product 1" class="product-image">
            <div class="product-info">
              <h2 style="font-size: smaller;color: white">Built for Greatness</h2>
              <h3>Rib Knit High Collar Dress</h3>
              <form style="color: white;">
                <label>L</label>
                <input type="radio">
                <label>M</label>
                  <input type="radio">
                  <label>S</label>
                    <input type="radio">
                   
              </form>
              <p>Rs.6,999.00</p>
              <button class="order-button" onclick="location.href='{{ url('/description') }}'">Shop Now</button>

            </div>
          </div>
          




          


            </div>
            <div class="explorebtn">
            <a href="{{ route('aboutus') }}" class="explore-button">
    Explore More <img src="{{ asset('images/fast-forward.png') }}" alt="">
</a>
</div>

<div class="testimonial-section">
    <h2 class="testimonial-heading">What Our Customers Say</h2>
    <div class="testimonial-container">
        <div class="testimonial-card">
            <img src="{{ asset('images/person.png') }}" alt="Customer 1" class="client-img">
            <h3 class="client-name">John Doe</h3>
            <div class="star-rating">★★★★☆</div>
            <p class="customer-review">excellent service!</p>
        </div>
        <div class="testimonial-card">
            <img src="{{ asset('images/person.png') }}" alt="Customer 2" class="client-img">
            <h3 class="client-name">Jane Smith</h3>
            <div class="star-rating">★★★★★</div>
            <p class="customer-review">I love this! Will buy again.</p>
        </div>
        <div class="testimonial-card">
            <img src="{{ asset('images/person.png') }}" alt="Customer 2" class="client-img">
            <h3 class="client-name">Jane Smith</h3>
            <div class="star-rating">★★★★★</div>
            <p class="customer-review">I love this! Will buy again.</p>
        </div>
        <div class="testimonial-card">
            <img src="{{ asset('images/person.png') }}" alt="Customer 2" class="client-img">
            <h3 class="client-name">Jane Smith</h3>
            <div class="star-rating">★★★★★</div>
            <p class="customer-review">I love this! Will buy again.</p>
        </div>
    </div>
</div>


            <div class="service-section">
                <h2 class="service-title">Our Services</h2>
                <div class="service-card-container">
                    <div class="service-card">
                        
                        <h3 class="service-card-title">MEN CLOTHING</h3>
                        <p class="service-card-text">Explore our men's clothing collection, featuring stylish and comfortable options for every occasion. From casual t-shirts and button-up shirts to versatile pants and trendy outerwear, our selection combines quality and style. Elevate your wardrobe with pieces that fit seamlessly into your lifestyle!</p>
                       
                    </div>
                    <div class="service-card">
                        
                        <h3 class="service-card-title">WOMEN CLOTHIG</h3>
                        <p class="service-card-text">Discover our women's clothing collection, where fashion meets comfort. From elegant dresses and chic blouses to stylish trousers and cozy sweaters, our curated selection is designed to empower and inspire. Update your wardrobe with versatile pieces that enhance your unique style!

</p>
                    </div>
                    
                </div>
            </div>
        </div>

     

    </div>

</x-web-layout>
