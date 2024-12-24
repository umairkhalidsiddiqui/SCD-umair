<x-web-layout>

<div class="contactusbody">

        <div class="contact-page-body">
            
              <div class="contact-container">
                <h1>Contact Us</h1>
                <p>We’d love to hear from you! Please fill out the form below, and we'll get back to you as soon as possible.</p>
          
                <!-- Display success or error messages -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
          
                <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                  </div>
                  
                  <button type="submit" class="submit-button">Send Message</button>
                </form>
              </div>
            

            
        </div>

          
        @if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

      

    
</div>
</x-web-layout>
