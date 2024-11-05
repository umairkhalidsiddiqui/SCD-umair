
<x-web-layout>

<div class="checkoutWrapper">
    <div class="checkoutContainer">
        
    
        <form>
            <!-- Personal Details Section -->
            <div class="sectionTitle"><div class="centeredText">Thanks for Shopping</div><br>Personal Details</div>
           

            <div class="inputGroup">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="Enter first name" required>
            </div>
            <div class="inputGroup">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Enter last name" required>
            </div>
            <div class="inputGroup">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
            </div>
            <div class="inputGroup">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
            </div>

            <!-- Shipping Address Section -->
            <div class="sectionTitle">Shipping Address</div>
            <div class="inputGroup">
                <label for="country">Country</label>
                <select id="country" name="country" required>
                    <option value="">Select a country</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                    <!-- Add other major countries as needed -->
                </select>
            </div>
            <div class="inputGroup">
                <label for="city">City</label>
                <select id="city" name="city" required>
                    <option value="">Select a city</option>
                    <!-- Major cities for Pakistan -->
                    <option value="Karachi">Karachi</option>
    <option value="Lahore">Lahore</option>
    <option value="Islamabad">Islamabad</option>
    <option value="Faisalabad">Faisalabad</option>
    <option value="Rawalpindi">Rawalpindi</option>
    <option value="Multan">Multan</option>
    <option value="Peshawar">Peshawar</option>
    <option value="Quetta">Quetta</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Gujranwala">Gujranwala</option>

    <!-- United Kingdom -->
    <option value="London">London</option>
    <option value="Birmingham">Birmingham</option>
    <option value="Manchester">Manchester</option>
    <option value="Liverpool">Liverpool</option>
    <option value="Leeds">Leeds</option>
    <option value="Glasgow">Glasgow</option>
    <option value="Bristol">Bristol</option>
    <option value="Sheffield">Sheffield</option>
    <option value="Newcastle upon Tyne">Newcastle upon Tyne</option>
    <option value="Nottingham">Nottingham</option>

    <!-- Canada -->
    <option value="Ottawa">Ottawa</option>
    <option value="Toronto">Toronto</option>
    <option value="Vancouver">Vancouver</option>
    <option value="Montreal">Montreal</option>
    <option value="Calgary">Calgary</option>
    <option value="Edmonton">Edmonton</option>
    <option value="Quebec City">Quebec City</option>
    <option value="Winnipeg">Winnipeg</option>
    <option value="Halifax">Halifax</option>
    <option value="Victoria">Victoria</option>

    <!-- United States -->
    <option value="Washington, D.C.">Washington, D.C.</option>
    <option value="New York City">New York City</option>
    <option value="Los Angeles">Los Angeles</option>
    <option value="Chicago">Chicago</option>
    <option value="Houston">Houston</option>
    <option value="Phoenix">Phoenix</option>
    <option value="Philadelphia">Philadelphia</option>
    <option value="San Antonio">San Antonio</option>
    <option value="San Diego">San Diego</option>
    <option value="Dallas">Dallas</option>
                </select>
            </div>
            <div class="inputGroup">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter shipping address" required>
            </div>
            <div class="inputGroup">
                <label for="zip">ZIP Code</label>
                <input type="text" id="zip" name="zip" placeholder="Enter ZIP code" required>
            </div>
    
            <!-- Order Summary Section -->
            <div class="sectionTitle">Order Summary</div>
            <div class="orderSummary">
                <div class="orderItem">
                <img src="https://outfitters.com.pk/cdn/shop/files/F0663206618_2_copy_b939df59-4c3b-49ef-9d0b-0d04c1dabcd2.jpg?v=1730283889" alt="Item 1" class="itemImage"> <!-- Image positioned on the right -->

                <span style="margin-right: 75%;">Item 1</span>
                <span>Rs. 799</span>

                </div>
                <div class="orderItem">
                <img src="https://outfitters.com.pk/cdn/shop/files/F1067106814.jpg?v=1730289373" alt="Item 1" class="itemImage"> <!-- Image positioned on the right -->

                <span style="margin-right: 75%;">Item 2</span>
                    <span>Rs. 4,000</span>

                </div>
                <div class="orderTotal">
                    <span>Rs. 4,799</span>
                </div>
            </div>
    
            <!-- Voucher Code Section -->
            <div class="voucherSection">
                <input type="text" name="voucher" placeholder="Enter voucher code">
                <button type="button" class="applyBtn">Apply</button>
            </div>
    
            <!-- Checkout Button -->
            <button type="submit" class="checkoutBtn">Proceed to Checkout</button>
    
            <!-- Shop More Link -->
            <div class="shopMore">
                Want to shop more? <a href="./product.html">Click here</a>
            </div>
        </form>
    </div>
</div>


</x-web-layout>
