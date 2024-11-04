<x-web-layout>
<div style="background-image: url('{{ asset('images/backk.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;" class="homebg">
    <!-- Navbar -->
    

    <!-- Main Content -->
    <div class="main-content">
        <section class="hero">
            <h1>Welcome to KHAREDAAR</h1>
            <p class="quote">"Quality Fashion for Every Occasion"</p>
        </section>

        <!-- Promotions Section -->
        <section class="promotions">
            <h2 style="color:#ffae42; background: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 30px;">Current Promotions</h2>
            <div class="promo-cards">
                <div class="promo-card">
                    <h3>End of Season Sale</h3>
                    <p>Up to 50% off on selected items!</p>
                    <button onclick="location.href='{{ url('/men') }}'">Shop Now</button>
                </div>
                <div class="promo-card">
                    <h3>New Arrivals</h3>
                    <p>Explore the latest trends and styles.</p>
                    <button onclick="location.href='{{ url('/women') }}'">Explore Collection</button>
                </div>
                <div class="promo-card">
                    <h3>Exclusive Offer</h3>
                    <p>Get 10% off on your first purchase. Use code: WELCOME10</p>
                    <button onclick="location.href='login.html'">Sign Up Now</button>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial">
                <p>"Kharadaar offers the best quality and style. Love their collection!"</p>
                <p>- Sarah K.</p>
            </div>
            <div class="testimonial">
                <p>"Excellent customer service and amazing deals. Highly recommend!"</p>
                <p>- Michael D.</p>
            </div>
        </section>
    </div>
</div>

<!-- Footer -->







</x-web-layout>

    