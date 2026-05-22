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
    <section id="contact" style="padding: 60px 20px; background-color: #ffffff; font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: 0 auto; text-align: center;">
        <h2 style="color: #333; font-size: 32px; margin-bottom: 10px;">Contact Us</h2>
        <p style="color: #666; margin-bottom: 30px;">Have questions about our products? Reach out to us anytime!</p>
        
        <form style="text-align: left; background: #fdfdfd; padding: 30px; border-radius: 10px; border: 1px solid #eee; box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Full Name</label>
                <input type="text" placeholder="Your Name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Email Address</label>
                <input type="email" placeholder="Your Email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Message</label>
                <textarea rows="4" placeholder="How can we help you?" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; resize: none;"></textarea>
            </div>
            <button type="button" onclick="handleContactForm()" style="width: 100%; background-color: #ff7a45; 
color: white; border: none; padding: 12px; font-size: 16px; border-radius: 5px;
 cursor: pointer; font-weight: bold; transition: 0.3s;">
    Send Message
</button>          
            </button>
            <form id="contactForm" style="...">
        </form>
    </div>
</section>
<script>
    
        function handleContactForm() {
    // الحصول على النموذج (Form)
    const form = document.getElementById('contactForm');
    
    // إظهار تنبيه نجاح الإرسال للزبون
    alert("✉️ Thank you! Your message has been sent successfully. Our SunCare team will contact you soon.");
    
    // مسح الخانات تلقائياً بعد الإرسال لإعطاء مظهر حقيقي
    form.reset();
    }
</script>
</body>
</html>