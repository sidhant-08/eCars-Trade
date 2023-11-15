<?php
error_reporting(0); include("header.php");
?>
    
    <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        <?php
		include("menusidebar.php");
		?>
        </div>
        <div id="content" class="float_r">
        	<h1><u>Contact</u></h1>
            <div class="content_half float_l">
               
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
                        <label for="phone">Phone:</label> <input type="text" name="phone" id="phone" class="input_field" />
                        <div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                        
                    </form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h5><b>PRIMARY OFFICE</b></h5>
			 <br />
			<!-- <br /> -->
            <p> 744 ,16, main, 7th Cross Rd, Koramangala 3 Block, Koramangala, Bengaluru, Karnataka 560034 </p>
			<!-- <br /> -->
            <br />
						
			Phone: 9380248667<br />
			Email: <a href="mailto:sidhant.force@gmail.com">sidhant.force@gmail.com</a><br/>
			
            <div class="cleaner h40"></div>
			
            <h5><b>SECONDARY OFFICE</b></h5>
			<br />
            <p> # 201/2,beratena Agrahara Hosur Main Road, Post, Electronic City, Bengaluru, Karnataka 560100 </p>
			Phone: 7019592918<br />
			Email: <a href="mailto:shravan.411100@gmail.com">shravan.411100@gmail.com</a><br/>
			<br />
             
        </div>
        
        <div class="cleaner h40"></div>
        
        <iframe width="680" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=car%20house%20koramangala&t=&z=11&ie=UTF8&iwloc=&output=embed"></iframe>
            
        </div> 
        <div class="cleaner"></div>
    </div> 
    
  <?php
include("footer.php");
?>