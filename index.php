<html>
    <head>
        <title></title>
        <link rel="icon" href="logo.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="shahab.css">

        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" 
        rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <section id="banner">

        <section class="banner">
            <img src="logo.png" class="logo">
            <div class="banner-text">
                <h1>Enchanted Elegance Parlour</h1>
                <p>Styling Your Hair Is Styling Your Life</p>
                <div class="banner-btn">
                    <a href="#booking"><span></span>BOOK NOW</a>
                    <a href="#services"><span></span>SERVICES</a>
                </div>
            </div>
        </section>
        <div id="navigation">
            <nav>
                <ul>
                    
                    <li><a href="#banner">HOME</a></li>
                    <li><a href="admin_login.html">ADMIN LOGIN</a></li>
                    <li><a href="#feature">FETURES</a></li>
                    <li> <a href="#services">SERVICES</a></li>
                    <li><a href="#booking">BOOK NOW</a></li>
                    <li><a href="#feedback">FEEDBACK</a></li>
                    <li><a href="#footer">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div id="menubtn">
            <img src="menu.png" id="menu">
        </div>
    </section>
        <!--code for features-->
        <section id="feature">
            <div class="title-text">
                <p>FEATURES</p>
                <h1>Why Choose Us?</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="features-icon">
                        <i class="fa fa-shield" aria-hidden="true"></i>
                    </div>
                <div class="features-text">
                <p>Step into our men's parlour for a grooming experience like no other,
                     where our skilled staff blend artistry with precision to elevate your style. </p>
                </div>
            </div>


            <div class="features">
            <h1>Pre Booking Online</h1>

                <div class="features-desc">
            <div class="features-icon">
                <i class="fa fa-shield" aria-hidden="true"></i>
            </div>
            <div class="features-text">
                <p>Secure your spot and avoid the wait—prebook your appointment for a seamless parlour
                     experience tailored just for you. </p>
            </div>
         </div>
            </div>
        


                <div class="features">
            <h1>Affordable Price</h1>

            <div class="features-desc">
            <div class="features-icon">
                <i class="fa fa-shield"></i>
                    </div>
                    <div class="features-text">
                <p>Experience top-notch services without breaking the bank; our affordable
                     prices ensure you get the best value for your money. </p>
                </div>
                </div>
                </div>
    
                </div>

                    <div class="features-img">
                <img src="parlour_men.jpg">
                </div>
            </div>
        </section>

        <!--code for features-->




        <!--code for services section-->
        <section id="services">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>We Provides Better</h1>
            </div>
            <div class="service-box">
                <div class="single-service">
                <img src="waxing.jpg" alt="img1">
                <div class="overlay"> </div>
                <div class="service-desc">
                <h3>Waxing</h3>
                <hr>
            <p>
                Men's waxing, once niche, now strides confidently as a grooming standard, revealing smooth confidence inch by inch. From brows to backs, the art of men's waxing crafts a refined allure, embracing a sleek and polished aesthetic.</p>
            </div>
            </div>
            <div class="single-service">
            <img src="foundation.jpg" alt="img2">
            <div class="overlay"> </div>
            <div class="service-desc">
                <h3>Foundation</h3>
                <hr>
                <p>In parlors, women's makeup transforms from a blank canvas to a masterpiece, blending colors and contours for a radiant allure. With skilled hands and an eye for detail, parlour artists craft beauty that transcends</p>
            </div>
            </div>
        
            <div class="single-service">
            <img src="design.jpg" alt="img3">
            <div class="overlay"> </div>
            <div class="service-desc">
                <h3>Hair Style</h3>
                <hr>
                <p>Men's hair design melds tradition with modern flair, sculpting styles that echo confidence and individuality. From classic cuts to avant-garde creations, each design speaks volumes about personal style and self-expression.</p>
            </div>
            </div>
        
            <div class="single-service">
            <img src="9a.jpeg" alt="img4">
            <div class="overlay"> </div>
            <div class="service-desc">
                <h3>Rebonding</h3>
                <hr>
                <p>Hair rebonding for women creates a sleek, straight canvas, transforming unruly locks into smooth elegance. With lasting results and a touch of luxury, it's a journey from frizz to fabulous, enhancing confidence with every silky strand.</p>
            </div>
            </div>
            </div>

            </section>

                <!--code for services section-->


                    <!--code for booking section-->
                    <section id="booking">
                        <div class="title-text">
                            <p>BOOKING FORM</p>
                            <h1>BOOKING DETAILS</h1>
                        </div>
                           
    
                        <div class="book-box">
        
                            <form action="shahab.php" method="post">
                                    <div class="input-grpoup">
                                        <div class="input-feild">
                                            <lavel for="booking_id">Booking Id:</lavel>
                                            <input type="text" name="booking_id" id="bookingNo"placeholder="Booking Id" readonly required>
                                        </div>
                                        <div class="btn-otp">
                                           <!-- <button type="submit" id="generatebtn">Get Booking Id</button>-->
                                            <button onclick="generateBookingNumber()">Get Booking Id</button>
                                        </div>
                                        <div class="input-feild">
                                            <lavel for="Phone">Phone No: </lavel>
                                            <input type="tel" name="Phone" id="Phone" placeholder="Phone" required>
                                        </div>
                                    <!--   <div class="input-feild">
                                            <lavel for="otp">Enter OTP:</lavel>
                                            <input type="texarea" placeholder="OTP" >
                                        </div>
                                        <div class="btn-otp">
                                            <button type="submit" name="Verify OTP">Send Otp</button>
                                            <button type="submit" name="Verify OTP">Verify OTP</button>
                                        </div>
                                        -->
                                    

                                        <div class="input-feild">
                                            <lavel for="name">Name: </lavel>
                                            <input type="text" name="name" id="name" placeholder="Name" required>
                                        </div>

                                        <div class="input-feild">
                                            <lavel for="email">Email: </lavel>
                                            <input type="email" name="email" placeholder="Email" required >
                                        </div>
                                        <div class="input-feild">
                                            <label for="date">Date:</label>
                                            <input type="date" id="date" name="date"  required>
                                        </div>
                                        <div class="input-feild">
                                                <label for="time">Time:</label>
                                                <select id="time" name="time" required>
                                                    <option value="">Select a time</option>
                                                    <?php
                                                    $start = strtotime('8:00 AM');
                                                    $end = strtotime('10:00 PM');
                                                    $interval = 30 * 60; // 30 minutes in seconds

                                                    for ($time = $start; $time <= $end; $time += $interval) {
                                                        echo '<option value="' . date('H:i', $time) . '">' . date('h:i A', $time) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        <div class="btn-otp">
                                            <button type="submit">Book Now</button>
                                        </div>
                    
                    

                                    </div>
                            </form>
                            
                        </div>
                        <img class="form-image" src="bgimg.jpg" alt="Image"> 
                    </section>
<!--code for feedback section-->
<section id="feedback">
    <div class="title-text1">
        <p>FEEDBACK</p>
        <h1>What Client Says</h1>
    </div>

    <div class="feedback-row">
        <div class="feedback-col">
            <div class="user">
                <img src="azam.jpg">
                <div class="user-info">
                    <h4>Aazam </h4>
                    <small>@aazam</small>

                </div>
            </div>
            <p>I had an amazing experience at Enchanted Elegance Parlour. The staff were incredibly skilled and attentive, and I left feeling rejuvenated and pampered. Highly recommend their services to anyone looking for top-notch beauty treatments!
            </p>
        </div>

        <div class="feedback-col">
            <div class="user">
                <img src="faizaan.jpg">
                <div class="user-info">
                    <h4>Faizaan Ali </h4>
                    <small>@mrfaizu</small>

                </div>
            </div>
            <p>Exceptional service and professionalism! Enchanted Elegance Parlour is my go-to for top-notch beauty treatments. Highly recommend! 
                
           </p>
        </div>

        <div class="feedback-col">
            <div class="user">
                <img src="urman.jpg">
                <div class="user-info">
                    <h4>Urman Ali </h4>
                    <small >@urmanali</small>

                </div>
            </div>
            <p>What a gem of a parlour! From the moment I walked in, I felt welcomed and valued as a customer. The ambiance is relaxing, the treatments are superb, and the staff goes above and beyond to ensure a memorable experience. Can't wait to book my next appointment!
           </p>   
        </div>

    </div>


</section>

<!--code for feedback section-->
<!--code for footer section-->
<section id="footer">
    
    <div class="title-text">
        <p>Contact Us</p>
        <h1>Visit Our Parlour</h1>
    </div>

    <div class="footer-row">
        <div class="footer-left">
            <h1>Opening Hours</h1>
            <p> <i class="fas fa-clock"></i>Monday to Friday - 8:30am to 9pm</p>
            <p><i class="fas fa-clock"></i>Saturday and Sunday - 8:30am to 11:30pm</p>
        </div>
        <div class="footer-right">
            <h1>Get In Touch With Us</h1>
            <p>Moradabad Big Bazar<i class="fas fa-map-marker-alt"></i></p>
            <p>enchanted.parlour@gmail.com<i class="fas fa-envelope"></i></p>
            <p>+91 6399271709<i class="fas fa-phone"></i></p>
            <p>+91 9389889012<i class="fas fa-phone"></i></p>
        </div>
    </div>
    <div class="social-media">  
    <a href="#https://www.facebook.com/people/Shahabul-Hasan/pfbid025Dyk43uHf59iPFa7Zfbxs4kRoPgWeW35CdxdySMw7MTHRdzEFXA1RxppTtzV8N98l/?mibextid=ZbWKwL"> <i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="https://www.instagram.com/_shahab_ul_hasan/?igsh=MnBtNTRrY2xybmJk"><i class="fab fa-instagram"></i></a>
        <a href="https://youtube.com/@EnchantedEleganceParlour?si=uh4L9xpCYhERaKNm"><i class="fab fa-youtube"></i></a> 
        <p>All Right Reserve </p>
    </div>

</section>





<!--code for footer section-->

        <script>
            
            function generateBookingNumber() {
            event.preventDefault();
            var randomNumber = Math.floor(100000 + Math.random() * 900000);
            document.getElementById("bookingNo").value = randomNumber;
            }

            var menubtn=document.getElementById("menubtn");
            var navigation=document.getElementById("navigation");
            var menu=document.getElementById("menu");


            navigation.style.right="-200px"


            menubtn.onclick = function()
                {
                    if(navigation.style.right=="-200px"){
                    navigation.style.right="0";
                    menu.src="close.jpg";
                    }
                    else{
                            navigation.style.right="-200px"
                            menu.src="menu.png";
                        }
                }

                /*valdition code*/
                function validateForm() {
    // Booking ID check
    var bookingId = document.getElementById('bookingNo').value;
    if (bookingId.trim() === '') {
        alert('Booking ID cannot be empty');
        return false;
    }

    // Phone number check
    var Phone = document.getElementsByName('Phone')[0].value;
if (!/^\d{10}$/.test(Phone)) {
    alert('Please enter a valid 10-digit phone number');
    return false;
}



    // Name check
    var name = document.getElementsByName('name')[0].value;
if (name.trim() === '' || !/^[a-zA-Z\s]+$/.test(name)) {
    alert('Please enter a valid name (alphabets only)');
    return false;
}

    // Email check
    var email = document.getElementsByName('email')[0].value;
    if (email.trim() === '' || !/\S+@\S+\.\S+/.test(email)) {
        alert('Please enter a valid email address');
        return false;
    }

    // Time and Date check
    var time = document.getElementsByName('time')[0].value;
    var date = document.getElementsByName('date')[0].value;
    if (time.trim() === '' || date.trim() === '') {
        alert('Please select both time and date');
        return false;
    }

    return true; // Form is valid, proceed with submission
}
                /*valdition code*/
                    // Get tomorrow's date
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);

        // Format the date as YYYY-MM-DD for setting the min attribute
        var tomorrowFormatted = tomorrow.toISOString().split('T')[0];

        // Set the minimum date for the date input field to tomorrow
        document.getElementById('date').setAttribute('min', tomorrowFormatted);   
        </script>
    </body>
</html>

