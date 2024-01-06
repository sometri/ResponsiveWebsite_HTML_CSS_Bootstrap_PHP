<!-- Include Beginning -->
<?php include 'beginning.php'; ?>

<!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h2>Start Your Day With Fresh Coffee</h2>
            <p>Coffee is a popular and beloved beverage enjoyed by people around the world. Awaken your senses with a steaming cup of liquid motivation.</p>
            
            <!-- Link the "Order Now" button to the Products page -->
            <a href="products.php" class="btn btn-primary">Order Now</a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products-section">
        <div class="container">
            <h2>Featured Products</h2>
            <p>Explore our curated selection of premium coffee blends, handpicked for their exceptional quality and flavor profiles.</p>
            
            <!-- Display three featured products in a row -->
            <div class="row">
                <!-- Repeat this card layout for three featured products -->
                <?php for ($i = 1; $i <= 12; $i++): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/featured-product-image-<?php echo $i; ?>.jpg" class="card-img-top" alt="Featured Product <?php echo $i; ?>">
                        <div class="card-body">
                            <h5 class="card-title">Featured Product <?php echo $i; ?></h5>
                            <p class="card-text">Description of the featured product <?php echo $i; ?>. Highlight its unique qualities and flavor notes.</p>
                            <a href="products.php" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2>Customer Testimonials</h2>
            <p>Read what our satisfied customers have to say about their experiences with our coffee products and services.</p>
            
            <!-- Display three testimonials in one row -->
            <div class="row">
                <!-- Repeat this card layout for three customer testimonials -->
                <?php for ($j = 1; $j <= 3; $j++): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat eros quis augue sodales, vitae aliquam lectus rutrum."</p>
                                <footer class="blockquote-footer">Customer <?php echo $j; ?></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Add your JavaScript links and scripts here -->

<!-- Include Ending -->
<?php include 'ending.php'; ?>