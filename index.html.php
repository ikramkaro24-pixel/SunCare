<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunCare - Sunscreen Store</title>
   
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <nav class="navbar">
            <div class="logo">SunCare</div>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span id="cart-count" style="background: #dd7a4a; color: white; border-radius: 50%; 
                        padding: 2px 6px; font-size: 12px; margin-left: 5px;">0</span>

                    </a>
                </li>
            </ul>
        </nav>
    </header>

 <img src="sunscreen1.jpeg" alt="واقي شمس SPF 50+">
    <!-- HERO SECTION -->
      
    <section id="home" style="padding: 100px 50px; background-color: #f4f7f6; display: flex; align-items: center; min-height: 70vh; font-family: Arial, sans-serif;">
    <div style="max-width: 600px; text-align: left;">
        <h1 style="color: #2b2b2b; font-size: 56px; font-weight: bold; margin-bottom: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Protect Your Skin<br>Every Day
        </h1>
        <p style="color: #666; font-size: 18px; line-height: 1.6; margin-bottom: 30px; max-width: 500px;">
            Discover premium sunscreen products for all skin types with high SPF protection and natural ingredients.
        </p>
        <a href="#products" style="display: inline-block; background-color: #dd7a4a; color: white; padding: 14px 35px; font-size: 16px; border-radius: 5px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: 0.3s;">
            Shop Now
        </a>
    </div>
</section>   

    <!-- PRODUCTS -->
    <section id="products">

        <h2>Featured Products</h2>

        <div class="product-container">

            <!-- PRODUCT 1 -->
              
            <div class="product-card">

                <img src="sunscreen2.jpeg" alt="Product">

                <h3>SPF 30 Cream</h3>

                <p>150Dh</p>

                <button onclick="addToCart('SPF 30 Cream', 150)" style="background-color: #dd7a4a; 
                color: white; border: none; padding: 10px 20px; 
                border-radius: 5px; cursor: pointer; font-weight: bold;">Add to Cart</button>

            </div>

            <!-- PRODUCT 2 -->
            <div class="product-card">

                <img src="sunscreen3.jpeg" alt="Product">

                <h3>SPF 50+ Protection</h3>

                <p>200Dh</p>

                <button onclick="addToCart('SPF 50+ Protection', 200)" style="background-color: #dd7a4a; color: white; border: none; padding: 10px 20px; 
                border-radius: 5px; cursor: pointer; font-weight: bold;">Add to Cart</button>

            </div>
            <!-- PRODUCT 3 -->
            <div class="product-card">

                <img src="sunscreen5.webp" alt="Product">

                <h3>Tinted Sunscreen</h3>

                <p>180Dh</p>

                <button onclick="addToCart('Tinted Sunscreen', 180)" style="background-color: #dd7a4a; color: white; border: none;
                 padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold;">Add to Cart</button>

            </div>

        </div>

    </section>
   
<section id="about" style="padding: 60px 20px; background-color: #f9f9f9; text-align: center; font-family: Arial, sans-serif;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h2 style="color: #333; font-size: 32px; margin-bottom: 20px;">About SunCare</h2>
        <p style="color: #666; font-size: 18px; line-height: 1.6; margin-bottom: 30px;">
            At <strong>SunCare</strong>, we believe that sun protection is the foundation of healthy skin. Our mission is to provide premium, dermatologically tested sunscreens that shield your skin from harmful UV rays while keeping it hydrated and radiant. Whether you have oily, dry, or sensitive skin, we have the perfect formula tailored just for you.
        </p>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; margin-top: 40px;">
            <div style="flex: 1; min-width: 200px; margin: 10px; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <h3 style="color: #ff7a45;">100% Safe</h3>
                <p style="color: #777; font-size: 14px;">Dermatologist tested and approved ingredients.</p>
            </div>
            <div style="flex: 1; min-width: 200px; margin: 10px; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <h3 style="color: #ff7a45;">AI Tailored</h3>
                <p style="color: #777; font-size: 14px;">Smart recommendations for your specific skin type.</p>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
    <footer>

        <p>© 2026 SunCare. All Rights Reserved.</p>

        <div class="social-icons">

            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-tiktok"></i>

        </div>

    </footer>
 <script>
    // مصفوفة لتخزين المنتجات في السلة
    let cart = [];
    let totalItems = 0;
    let totalPrice = 0;

    function addToCart(productName, price) {
        // إضافة المنتج للسلة
        cart.push({ name: productName, price: price });
        
        // تحديث الحساب
        totalItems = cart.length;
        totalPrice += price;
        
        // إظهار تنبيه احترافي للزبون
        alert("🛒 " + productName + " has been added to your cart!\n\nTotal items in cart: " + totalItems + "\nTotal Price: Dh" + totalPrice);
        
        // طباعة السلة في الكونسول (مزيانة للبروف يلا بغات تشوف الخدمة)
        console.log("Current Cart:", cart);
        document.getElementById('cart-count').innerText = totalItems;
  
    }
</script>
</body>
</html>