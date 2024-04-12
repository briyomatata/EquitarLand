
<?php

include('../php/connection.php');
include('../partials/header.php');

$stmt = $conn->prepare("SELECT * FROM land");
$stmt->execute();
$lands = $stmt->get_result();



?>

<!-- Home Section -->
<section class="home" id="Home">

        <div class="text hidden">
            <div class="texttitle">
                <span>Easy Affordable Reliable</span>
            </div>
        
            <div class="textinfo">
                <p>We are Commited to making your ride easy comfortable, safe and affordable, by renting with us you
                    are guranteed to be happy and smiling as you ride out.
                </p>
            </div>
        
            <div class="homebtn">
                <button>Learn More</button>
            </div>
        </div>
    
    
        
    
    
    
        <!-- <div class="form-container hidden">
            <form action="">
    
                <div class="inputbox">
                    <span>Car Make</span>
                    <input type="text" name="" id="" placeholder="search Car Make">
                </div>
    
    
                 
                <div class="inputbox">
                    <span>Reg Year</span>
                    <input type="text" name="" id="" placeholder="search Reg Year">
                </div>
    
                 
                <div class="inputbox">
                    <span>Price</span>
                    <input  type="text" name="" id="" placeholder="search Price">
                </div>
    
                <div class="inputbtn">
                    <input type="submit" name="Search" id="" value="Search" class="submitbtn">
                </div>
            </form>
        </div> -->

</section>
<!-- End of Home Section -->


<!-- Simple Steps Section -->

<section class="stepsbook hidden">
    <div class="stepsinfo">
        <span>Our Services</span>
        <p>Book in 3 simple Steps</p>
    </div>

    <div class="stepscardinfo">
        <div class="stepscards">
            <div class="stepscardicon">

                <i class="fa-solid fa-location-pin"></i>

            </div>

            <div class="stepscardtitle">

                <span>Choose a Location</span>

            </div>

            <div class="stepscarddesc">
                <p>First you choose your location by selecting the location you are situated at the moment, a location is required
                    to be able to take it out.
                </p>
            </div>

        </div>

        <div class="stepscards">
            <div class="stepscardicon">
                
                <i class="fa-solid fa-calendar-check"></i>

            </div>

            <div class="stepscardtitle">

                <span>Pick-up a Date</span>

            </div>

            <div class="stepscarddesc">
                <p>Second you choose a date to pick you want to view the land you want to book.</p>
            </div>

        </div>

        <div class="stepscards">
            <div class="stepscardicon">
                
                <i class="fa-regular fa-calendar-plus"></i>

            </div>

            <div class="stepscardtitle">

                <span>Book a Land to view</span>

            </div>

            <div class="stepscarddesc">
                <p>third and lastly you choose your suitable land that fits you occasion and style. if desire to purchase the land you can communicate on site.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- End of Simple Steps Section  -->


<!-- Start of Discover Deals -->
<section class="discoverdeals hidden cardeals" id="Services">

    <div class="discoverinfo">
        <span>Best Service</span>
        <p>Discover new Deals</p>
    </div>

    <div class="discovercardinfo">
<?php foreach($lands as $land){?> 

<div class="discovercard">

<div class="discovercardimg">
<img src="<?php echo "../images/img/".$land['image1'];?>" style="width: 400px; height:250px">
</div>

<div class="discovercards">
    <div class="discovercardtitle">
        <span><?php echo $land['land_name'];?></span>
    </div>

    <div class="discovercardinfos">
        <span> <td> <?php echo $land['land_location'];?></td></span> 
    </div>

    <div class="discovercardinfos">
        <span><?php echo "Ksh: ", $land['land_price'];?></span> 
    </div>

    <div class="discovercardbtn">
        <a href="<?php echo "singlepage.php?id=". $land['id'];?>"><button>Book Now</button></a>
    
    </div>

</div>
</div>
<?php
    }
    ?>

        <!-- <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/aldrin-rachman-pradana--w7B2HfTP2A-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span>1/8 ACRE, Shaya Gardens Naivasha</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>350,000/=</span> 
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
        </div> -->

        <!-- <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/daniel-barnes-PyFzygP2eNg-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span>1/4 ACRE, Juja Gated Phase 4</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>700,000/=</span>
                    
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
        </div>

        <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/manohar-reddy-b5-ioqEVS0U-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span>3/4 ACRE, Thika Greens Phase 5</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>1,050,000/=</span>
                    
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
        </div>

        <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/manohar-reddy-C_EzPJZfCk4-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span> 1/8 ACRE, Elimu Court Mwalimu Farm</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>550,000/=</span>
                    
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
        </div>

        <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/manohar-reddy-nwhVzQRm2iM-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span>3/4 ACRE, Osutua Gardens, Kitengela</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>1,000,000/=</span>
                    
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
        </div>

        <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/manohar-reddy-oSKMdSCeJIQ-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span>3/8 ACRE, Thika Greens Phase 2</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>650,000/=</span>
                    
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
        </div>

        <div class="discovercard">

            <div class="discovercardimg">
                <img src="./images/manohar-reddy-P_vBlEz4gbo-unsplash.jpg"/>
            </div>
    
            <div class="discovercards">
                <div class="discovercardtitle">
                    <span>3/4 ACRE, Thika Greens Phase 3</span>
                </div>
    
                <div class="discovercardinfos">
                    <span>1,050,000/=</span>
                    
                </div>
    
                <div class="discovercardbtn">
                    <button>Book Now</button>
                </div>
    
            </div>
    
            </div>


            <div class="discovercard">

                <div class="discovercardimg">
                    <img src="./images/manohar-reddy-P_vBlEz4gbo-unsplash.jpg"/>
                </div>
        
                <div class="discovercards">
                    <div class="discovercardtitle">
                        <span>1/8 ACRE, Thika Greens Phase 4</span>
                    </div>
        
                    <div class="discovercardinfos">
                        <span>850,000/=</span>
                        
                    </div>
        
                    <div class="discovercardbtn">
                        <button>Book Now</button>
                    </div>
        
                </div>
        
                </div>
            </div>
        </div> -->

    </div>




</section>
<!-- End of Discover Deals  -->


<!-- About Us -->
<section class="about-us hidden" id="About-Us">
    <div class="about-us-container">
        <div class="aboutus-header">
            <span>About Us</span>
            <p>Best  Customer Service Experience</p>
        </div>

        <!-- <div class="aboutusinfo">
            <div class="aboutusinfocont">
                <img src="./images/aldrin-rachman-pradana--w7B2HfTP2A-unsplash.jpg"/>
            </div> -->

            <div class="aboutusinfocontdet">
                <p> We are a company that is dedicated in serving our customers with outmost sincerity and trust.
                    we have also partnered with a few companies to be able to provide for you an access to the ride that you desire,<br>
                    through this partnership we have been to consistently  be at the top with our service.<br>
                    being able to provide a rental car at your location no matter where you are is our greatest joy
                    knowing that you will be happy.
                </p>
           
                   <div class="aboutusbtn">
                    <button class="aboutusbtn-tradein">Learn More</button>
                </div>
           
                </div>
        </div>
    </div>
</section>
<!-- End of About Us -->


<!-- NewsLetter -->
<section class="newsletter hidden">
    <div class="newslettercontainer">
        <span>Subscribe to our NewsLetter</span>

        <div class="newslettercontainerinfo">

            <input class="newsletterinput" placeholder="Enter Your Email" type="text"/>

            <button class="newsletterbtn">Subscribe</button>
        </div>
    </div>
</section>
<!-- End of NewsLetter -->

<!-- Contact Us -->
<section class="contactus hidden cardeals" id="Contact-Us">
    <div class="contactuscontainer">
        <div class="contactusheader">
            <span>Contact Us</span>
        </div>

        <div class="contactform">
            <form action="./php/contact.php" method="post">

                <div class="contactinputbox">
                    <span>Full Names</span>
                    <input type="text" name="FullName" class="inputboxes" placeholder="Enter Full Name">
                </div>

                <div class="contactinputbox">
                    <span>Mobile Number</span>
                    <input type="number" name="Mobile" class="inputboxes" placeholder="Enter Mobile Number">
                </div>


                <div class="contactinputbox">
                    <span>Email</span>
                    <input type="email" name="Emails" class="inputboxes" placeholder="Enter Email">
                </div>

               

                

                <div class="contactinputboxs">
                    <span>Message</span>
                   <textarea name="Messages" placeholder="write something...">
                    </textarea>
                </div>

                <input class="contactinputboxbtn" type="submit" value="send" name="submit"/>
            </form>

            <div class="contactusinfo">
                <div class="contactusinfoheader">
                    <span>Contact Us</span>
                </div>

                <div class="contactusinfotext">
                    <p>To be able to provide the best service and customer care 24/7, we have established a better way to communicate with us for any enquiry.
                        you can send us an email or reach out to us through our customer service line.
                        we will be to answer any of your questions or problems that you may have concerning the company.
                        <br> we appreciate you valued feedback always.
                    </p>
                </div>

                <div class="contactusinfocont">
                    <span class="email">Equitarland@info.co.ke</span>
                    <span class="phone">07123456789</span>
                </div>

                    <div class="contactussocialicons">
                        <span class="twitter"><i class="fa-brands fa-twitter top-header-icons"></i></span>
                        <span class="instagram"><i class="fa-brands fa-square-instagram top-header-icons"></i></span>
                        <span class="facebook"><i class="fa-brands fa-facebook top-header-icons"></i></span>
                        <span class="linkedin"><i class="fa-brands fa-linkedin top-header-iconss"></i></span>
                    </div>

            </div>
        </div>
    </div>
</section>
<!-- End of Contact Us -->




<<section class="footer">
    <div class="footercontainer">
        <div class="footerlinks">
            <ul class="footer-link">
                <li ><a href="#Home" class="footer-links">HOME</a></li>
                <li ><a href="#About-Us" class="footer-links">ABOUT US</a></li>
                <li ><a href="#Contact-Us" class="footer-links">CONTACT US</a></li>
            </ul>
        </div>

        <div class="footercopyright">
            <span>@copyright: 2023 Equitar Land Hub</span>
        </div>

        <div class="footersocials">
            <span class="instagram"><i class="fa-brands fa-square-instagram top-header-icons"></i></span>
            <span class="facebook"><i class="fa-brands fa-facebook top-header-icons"></i></span>
            <span class="linkedin"><i class="fa-brands fa-linkedin top-header-iconss"></i></span>
            <span class="twitter"><i class="fa-brands fa-twitter top-header-icons"></i></span>
        </div>
    </div>
</section>

<!-- End of Footer -->

    <a href="#"><i class="scrollup fa-solid fa-circle-arrow-up"></i></a>



      <!-- End of Featured cars section -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.ui.js'></script>
      
    

    <!-- Javascripts -->
    <script src="./js/index.js"></script>
    

</body>
</html>