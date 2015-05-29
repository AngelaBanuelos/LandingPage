<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>
<body id="contact">
<div class="page" id="contact"> 

      <!-- page contact -->

      <h3 class="page_title"> Let's Get in Touch</h3>

      <div class="page_content">

        <fieldset id="contact_form">

          <div id="msgs"> </div>

          <form id="cform" name="cform" method="post" action="">

            <input type="text" id="name" name="name" value="Full Name*" onfocus="if(this.value == 'Full Name*') this.value = ''"

                            onblur="if(this.value == '') this.value = 'Full Name*'" />

            <input type="text" id="email" name="email" value="Email Address*" onfocus="if(this.value == 'Email Address*') this.value = ''"

                            onblur="if(this.value == '') this.value = 'Email Address*'" />

            <input type="text" id="subject" name="subject" value="Subject*" onfocus="if(this.value == 'Subject*') this.value = ''"

                            onblur="if(this.value == '') this.value = 'Subject*'" />

            <textarea id="msg" name="message" onfocus="if(this.value == 'Your Message*') this.value = ''"

                            onblur="if(this.value == '') this.value = 'Your Message*'">Your Message*</textarea>

            <button id="submit" class="button"><a href="mailto: banuelosangela56@gmail.com">Jon Doe</a> Send Message</button>

          </form>


<!--Dynamically creates analytics markup-->
<!-- <address>
Written by <a href="mailto: banuelosangela56@gmail.com">Jon Doe</a>.<br> 
Visit us at:<br>
Example.com<br>
Box 564, Disneyland<br>
USA
</address> -->
</body>
</html>