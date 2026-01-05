<x-utils.website-layout>

    <section class="py-5 text-white" style="background:#1F3A5F">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold display-5">New & Used Bikes Marketplace</h1>
                    <p class="text-light">Buy & sell premium bikes with verified quality</p>
                    <a class="btn btn-warning btn-lg" href="{{ route('products') }}">Shop Now</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">Top Collections</h3>
                <a href="{{ route('collection') }}" class="btn btn-outline-dark btn-sm">View All</a>
            </div>

            <div class="row g-4">

                <!-- Collection 1 -->
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://plus.unsplash.com/premium_photo-1664303751783-e18caf8f609d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bW90b3JiaWtlfGVufDB8fDB8fHww"
                            class="card-img-top" style="height:240px; object-fit:cover;" alt="Mountain Bikes">
                        <div class="card-body">
                            <h5 class="fw-bold">Mountain Bikes</h5>
                            <p class="text-muted">
                                Powerful off-road bikes built for tough terrains and adventure rides.
                            </p>
                            <a href="#" class="btn btn-warning btn-sm">Explore Collection</a>
                        </div>
                    </div>
                </div>

                <!-- Collection 2 -->
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://images.unsplash.com/photo-1543134471-52488faa85af?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" style="height:240px; object-fit:cover;" alt="Sports Bikes">
                        <div class="card-body">
                            <h5 class="fw-bold">Sports Bikes</h5>
                            <p class="text-muted">
                                High-performance bikes designed for speed, style, and power.
                            </p>
                            <a href="#" class="btn btn-warning btn-sm">Explore Collection</a>
                        </div>
                    </div>
                </div>

                <!-- Collection 3 -->
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://images.unsplash.com/photo-1550028061-dace477da557?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" style="height:240px; object-fit:cover;" alt="Electric Bikes">
                        <div class="card-body">
                            <h5 class="fw-bold">Electric Bikes</h5>
                            <p class="text-muted">
                                Eco-friendly electric bikes for city rides and long-distance travel.
                            </p>
                            <a href="#" class="btn btn-warning btn-sm">Explore Collection</a>
                        </div>
                    </div>
                </div>

                <!-- Collection 4 -->
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://images.unsplash.com/photo-1568708167433-f71cce499682?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTF8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" style="height:240px; object-fit:cover;" alt="Used Bikes">
                        <div class="card-body">
                            <h5 class="fw-bold">Used Bikes</h5>
                            <p class="text-muted">
                                Certified second-hand bikes at the best resale prices.
                            </p>
                            <a href="#" class="btn btn-warning btn-sm">Explore Collection</a>
                        </div>
                    </div>
                </div>

                <!-- Collection 5 -->
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://images.unsplash.com/photo-1591637305338-647472624b6c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODZ8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" style="height:240px; object-fit:cover;" alt="Road Bikes">
                        <div class="card-body">
                            <h5 class="fw-bold">Road Bikes</h5>
                            <p class="text-muted">
                                Lightweight bikes made for speed and long-distance road cycling.
                            </p>
                            <a href="#" class="btn btn-warning btn-sm">Explore Collection</a>
                        </div>
                    </div>
                </div>

                <!-- Collection 6 -->
                <div class="col-md-4">
                    <div class="card shadow border-0 h-100">
                        <img src="https://images.unsplash.com/photo-1517258307935-9764dad5d7de?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" style="height:240px; object-fit:cover;" alt="Adventure Bikes">
                        <div class="card-body">
                            <h5 class="fw-bold">Adventure Bikes</h5>
                            <p class="text-muted">
                                Long-distance touring bikes built for comfort and endurance.
                            </p>
                            <a href="#" class="btn btn-warning btn-sm">Explore Collection</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">Latest Bikes</h3>
                <a href="#" class="btn btn-outline-dark btn-sm">View All</a>
            </div>

            <div class="row g-4">

                <!-- Bike 1 -->
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="https://images.unsplash.com/photo-1609630875171-b1321377ee65?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bW90b3JiaWtlfGVufDB8fDB8fHww"
                            class="card-img-top" style="height:220px; object-fit:cover;" alt="Yamaha MT Bike">
                        <div class="card-body">
                            <h6 class="fw-bold">Yamaha MT Bike</h6>
                            <p class="text-warning fw-bold">$1200</p>
                            <a href="#" class="btn btn-outline-dark w-100 btn-sm">View</a>
                        </div>
                    </div>
                </div>

                <!-- Bike 2 -->
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="https://images.unsplash.com/photo-1606907568152-58fcb0a0a4e5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bW90b3JiaWtlfGVufDB8fDB8fHww"
                            class="card-img-top" style="height:220px; object-fit:cover;" alt="Honda Sports Bike">
                        <div class="card-body">
                            <h6 class="fw-bold">Honda Sports Bike</h6>
                            <p class="text-warning fw-bold">$1450</p>
                            <a href="#" class="btn btn-outline-dark w-100 btn-sm">View</a>
                        </div>
                    </div>
                </div>

                <!-- Bike 3 -->
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="https://images.unsplash.com/photo-1508357941501-0924cf312bbd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG1vdG9yYmlrZXxlbnwwfHwwfHx8MA%3D%3D"
                            class="card-img-top" style="height:220px; object-fit:cover;" alt="Suzuki Street Bike">
                        <div class="card-body">
                            <h6 class="fw-bold">Suzuki Street Bike</h6>
                            <p class="text-warning fw-bold">$1350</p>
                            <a href="#" class="btn btn-outline-dark w-100 btn-sm">View</a>
                        </div>
                    </div>
                </div>

                <!-- Bike 4 -->
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="https://images.unsplash.com/photo-1502744688674-c619d1586c9e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bW90b3JiaWtlfGVufDB8fDB8fHww"
                            class="card-img-top" style="height:220px; object-fit:cover;" alt="Kawasaki Ninja">
                        <div class="card-body">
                            <h6 class="fw-bold">Kawasaki Ninja</h6>
                            <p class="text-warning fw-bold">$1650</p>
                            <a href="#" class="btn btn-outline-dark w-100 btn-sm">View</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-md-3">
                    <h2 class="fw-bold text-warning">5K+</h2>
                    <p>Bikes Sold</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-warning">2K+</h2>
                    <p>Verified Sellers</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-warning">99%</h2>
                    <p>Customer Satisfaction</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-warning">24/7</h2>
                    <p>Support</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white" style="background:#1F3A5F">
        <div class="container text-center">
            <h3 class="fw-bold">Get Bike Deals in Your Inbox</h3>
            <p class="text-light">Latest new & used bikes every week</p>

            <form class="d-flex justify-content-center gap-2 mt-3">
                <input class="form-control w-50" placeholder="Enter email">
                <button class="btn btn-warning">Subscribe</button>
            </form>
        </div>
    </section>



    <section class="py-5 text-white" style="background:#1F3A5F">
        <div class="container">
            <h3 class="fw-bold mb-4 text-center">Why Choose Us</h3>

            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <h1 class="text-warning">✔</h1>
                    <h6>Verified Sellers</h6>
                </div>
                <div class="col-md-3">
                    <h1 class="text-warning">🚚</h1>
                    <h6>Fast Delivery</h6>
                </div>
                <div class="col-md-3">
                    <h1 class="text-warning">💰</h1>
                    <h6>Best Resale Prices</h6>
                </div>
                <div class="col-md-3">
                    <h1 class="text-warning">🔒</h1>
                    <h6>Secure Payments</h6>
                </div>
            </div>
        </div>
    </section>


</x-utils.website-layout>
