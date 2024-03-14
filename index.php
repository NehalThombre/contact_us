<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <section>
        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2>Contact Us</h2>
                    <ul class="info">
                        <li>
                            <span><ion-icon name="location-outline"></ion-icon></span>
                            <span>3rd floor, Sai Prabhu Appt., Ravi Nagar Square, Nagpur</span>
                        </li>
                        <li>
                            <span><ion-icon name="mail-outline"></ion-icon></span>
                            <span>hello@mikechemardin.com</span>
                        </li>
                        <li>
                            <span><ion-icon name="logo-skype"></ion-icon></span>
                            <span>mike.chemardin</span>
                        </li>
                        <li>
                            <span><ion-icon name="call-outline"></ion-icon></span>
                            <span>+33619530144</span>
                        </li>
                    </ul>
                </div>
                <!-- Social Media -->
                <ul class="sci">
                    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>

                </ul>
            </div>

            <!-- contact form -->
            <div class="contactForm">
                <h2>Get In Touch</h2>
                <h4>Feel free to drop us a line below!</h4>
                <form action="action.php" method="post">
                    <div class="formBox">
                        <div class="inputBox w50">
                            <!-- <span>Your Name</span> -->
                            <input type="text" placeholder="Your Name" name="Your_Name" required />
                        </div>

                        <div class="inputBox w50">
                            <!-- <span>Email</span> -->
                            <input type="email" placeholder="Your email" name="email" required />
                        </div>
                        <div class="inputBox w100">
                            <!-- <span>Message</span> -->
                            <textarea placeholder="Type your message here" name="Message"></textarea>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send" />
                        </div>

                    </div>

                </form>
            </div>
        </div>



        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </section>
</body>

</html>