<!-- Include Beginning -->
<?php include 'beginning.php'; ?>

<!-- Contact Us Page Content -->
    <div class="container mt-5">
        <h1>Contact Us</h1>
        <p>Reach out to our team for inquiries, support, or feedback.</p>
        
        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Location</h3>
                <p>123 Coffee St, City, Country</p>
                <h3>Contact Information</h3>
                <p>Phone: +123 456 7890</p>
                <p>Email: info@sometri_coffee.com</p>
            </div>
        </div>
    </div><br/><br/>    

<!-- Include Ending -->
<?php include 'ending.php'; ?>