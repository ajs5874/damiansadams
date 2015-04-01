<!-- start contact form -->
<div class="contact-form clearfix">
	 <h3>Contact Form</h3>
     <p>For all email  enquiries <span>please complete the form below.</span> We will try to respond within 24hrs.</p>

     <?php if(count($_POST)): ?>
        <p>Thank you for your enquiry - we will try to respond within 24 hours</p>
     <?php else: ?>
         <form action="#" method="post">
         	<label class="label" for="name">Name<span>*</span></label>
            <input name="field" required type="text" value="" id="name" class="input" placeholder="Your Name..." />
            <!-- end row -->
            <label class="label" for="telephone">Telephone<span>*</span></label>
            <input name="field" required type="text" value="" id="telephone" class="input"  placeholder="Your Telephone Number..." />
            <label class="label" for="enquiry">Enquiry<span>*</span></label>
            <textarea name="textarea" id="enquiry" cols="" rows="" class="textarea" placeholder="Your Requirements..." required></textarea>
            <label class="label" for="question"><span>Security Question:</span> What is 4 + 4?<span>*</span></label>
            <input name="field" required type="text" value="" id="question" class="input" placeholder="Your Answer..." />
            <button name="submit" type="submit" class="button"><span>Send Message</span></button>
         </form>

         <!-- start imgb -->
         <div class="imgb">
         	<img src="images/img_girl.png" alt="girl" />
         </div>
         <!-- end imgb -->
     <?php endif; ?>
</div>
<!-- end contact form -->
<!-- start testimonials -->
<div class="testimonials clearfix">
	<!-- start imgb -->
    <div class="imgb">
    	<img src="images/img_testimonials.png" alt="quality" />
    </div>
    <!-- end imgb -->
    <!-- start txtb -->
    <div class="txtb">
    	<h3>Client Testimonials</h3>
        <blockquote>"I was having a look at Damian's work last night, it looks really, really great! His attention to details is spot-on. I'd happily recommend him to anyone."</blockquote>
        <strong class="name">Des Smith - Chepstow</strong>
    </div>
    <!-- end txtb -->
</div>
<!-- enmd testimonials -->