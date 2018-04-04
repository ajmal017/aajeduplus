<?php 
$controller_name = ($this->uri->segment(1)) ? $this->uri->segment(1) : '';
$function_name = ($this->uri->segment(2)) ? $this->uri->segment(2) : '';
?>
<div class="navbar-collapse collapse clearfix">
    <ul class="navigation clearfix">
        <li <?php if(isset($controller_name) && in_array($controller_name,array('','home'))){ echo 'class="current"'; } ?> ><a href="<?php echo site_url(); ?>">Home</a></li>
        <li <?php if(isset($controller_name) && in_array($controller_name,array('services'))){ echo 'class="current"'; } ?> ><a href="<?php echo site_url(); ?>services">Services</a></li>
		<li <?php if(isset($controller_name) && in_array($controller_name,array('testimonials'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>testimonials">Testimonials</a></li>
		<li <?php if(isset($controller_name) && in_array($controller_name,array('legal'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>legal">Legal</a></li>
        <li <?php if(isset($controller_name) && in_array($controller_name,array('gallery'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>gallery">Gallery</a></li>
        <li <?php if(isset($controller_name) && in_array($controller_name,array('about_us'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>about_us">About Us</a></li>
        <li <?php if(isset($controller_name) && in_array($controller_name,array('contact_us'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>contact_us">Contact Us</a></li>
        <li <?php if(isset($controller_name) && in_array($controller_name,array('login'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>login">Login</a></li>
        <li <?php if(isset($controller_name) && in_array($controller_name,array('register'))){ echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>register">Register</a></li>
    </ul>
</div>