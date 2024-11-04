
<x-web-layout>



<div class="formbody">


    


    <div class="main-content">



        <div class="delivery-form-wrapper">
            <div class="delivery-form-container">
                <h2 class="delivery-form-heading">Delivery Information</h2>
        
                <form action="#" method="POST" class="delivery-form">
                    <!-- Full Name -->
                    <label for="name" class="delivery-label">Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required class="delivery-input">
        
                    <!-- Email Address -->
                    <label for="email" class="delivery-label">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required class="delivery-input">
        
                    <!-- Phone Number -->
                    <label for="phone" class="delivery-label">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required class="delivery-input">
        
                    <!-- Address -->
                    <label for="address" class="delivery-label">Address:</label>
                    <input type="text" id="address" name="address" placeholder="Street Address" required class="delivery-input">
                    
                    <!-- Country and City -->
                    <label for="location" class="delivery-label">Country and City:</label>
                    <select id="location" name="location" required class="delivery-select">
                        <option value="">Select your country and city</option>
        
                        <!-- USA Cities -->
                        <optgroup label="United States">
                            <option value="New York">New York</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="Chicago">Chicago</option>
                            <option value="Houston">Houston</option>
                            <option value="Phoenix">Phoenix</option>
                        </optgroup>
        
                        <!-- Canada Cities -->
                        <optgroup label="Canada">
                            <option value="Toronto">Toronto</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Montreal">Montreal</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Ottawa">Ottawa</option>
                        </optgroup>
        
                        <!-- UK Cities -->
                        <optgroup label="United Kingdom">
                            <option value="London">London</option>
                            <option value="Manchester">Manchester</option>
                            <option value="Birmingham">Birmingham</option>
                            <option value="Leeds">Leeds</option>
                            <option value="Glasgow">Glasgow</option>
                        </optgroup>
        
                        <!-- Pakistan Cities -->
                        <optgroup label="Pakistan">
                            <option value="Karachi">Karachi</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                            <option value="Peshawar">Peshawar</option>
                        </optgroup>
                    </select>
        
                    <!-- Postal Code -->
                    <label for="postal-code" class="delivery-label">Postal Code:</label>
                    <input type="text" id="postal-code" name="postal-code" placeholder="Enter your postal code" required class="delivery-input">
        
                    <!-- Payment Method -->
                    <label class="delivery-label">Payment Method:</label>
                    <div class="delivery-payment-options">
                        <input type="radio" id="cod" name="payment-method" value="COD" required>
                        <label for="cod" class="payment-label">Cash on Delivery</label><br>
                        <input type="radio" id="card" name="payment-method" value="Card">
                        <label for="card" class="payment-label">Card Payment</label>
                    </div>
        
                    <!-- Submit Button -->
                    <button type="submit" class="delivery-submit-button">Submit</button>
                </form>
            </div>
        </div>









    </div>


</div>

</div>
</x-web-layout>
