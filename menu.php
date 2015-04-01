<nav role="navigation" class="main-navigation">
    <ul>
        <li <?php if($_SERVER['SCRIPT_NAME'] == "/index.php"):?>class="active"<?php endif; ?>><a href="index.php" title="Home">Home</a></li>
        <li <?php if($_SERVER['SCRIPT_NAME'] == "/about-us.php"):?>class="active"<?php endif; ?>><a href="/about-us.php" title="About Us">About Us</a></li>
        <li <?php if($_SERVER['SCRIPT_NAME'] == "/services.php"):?>class="active"<?php endif; ?>><a href="/services.php" title="Services">Services</a></li>
        <li <?php if($_SERVER['SCRIPT_NAME'] == "/gallery.php"):?>class="active"<?php endif; ?>><a href="/gallery.php" title="Gallery">Gallery</a></li>
    </ul>
</nav>