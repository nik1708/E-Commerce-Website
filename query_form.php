<div class="cbody">
<link rel="stylesheet" type="text/css" href="css/query.css">
    <section class="contact">
        <div class="content">
            <h2 class="ch2">Contact Us</h2>
            <p class="cp1">If you have any Questions or Query regarding our products, you can contact us.</p>
        </div>
        <div class="container">
            <div class="ContactInfo">
                <div class="box1">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3 class="ch3">Address</h3>
                        <address> 5, Welcomeplaza, Near Vaishali Cinema,<br>
                            Nadiad - 387002 <br>
                            Kheda,Gujarat,India</address>
                    </div>
                </div>
                <div class="box1">
                    <div class="icon"><i class="fas fa-phone"></i></i></div>
                    <div class="text">
                        <h3 class="ch3">Phone</h3>
                        <p>51564621</p>
                    </div>
            </div>
            <div class="box1">
                
                <div class="text">
                    <h3 class="ch3">E-mail</h3>
                    <p>favouritetailor00@gmail.com</p>
                </div>
        </div>
            </div>
            <div class="contactForm">
                <form action="" method="post">
                    <h2 class="ch3">Send Message</h2>
                    <div class="inputBox">
                        <p class="fname"> Full Name:</p> 
                        <input type="text" name="name" placeholder="Name" required="required"
                        value="<?php if(isset($_POST['name'])){echo htmlentities($_POST['name']);} ?>">                        
                    </div>
                    <div class="inputBox">
                        <p class="fname">Email:</p>
                        <input type="email" name="email" placeholder="Email"
                        value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email']);} ?>">                          
                    </div>
                        <div class="inputBox">
                            <p class="fname">
                            Type your message:</p>
                            <textarea name="message" id="" required="required"><?php if(isset($_POST['message'])){echo htmlentities($_POST['message']);} ?></textarea> 
                        </div>
                        <button name="submit" type="submit" class="fb">Send</button>
                </form>

            </div>
            
        </div>
    </section>
</div>