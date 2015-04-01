<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
</head>

<body class="gallery">
<!-- start header -->
<div class="header clearfix">
	<!-- start box -->
    <div class="box">
    	<!-- start logo -->
        <div class="logo">
        	<a href="index.html" title="DGA Decorating"><img src="images/logo.png" alt="DGA Decorating" /></a>
        </div>
        <!-- end logo -->
        <!-- start header right -->
        <div class="header-right clearfix">
        	<strong class="call">Call today on: <span>01291 620536</span></strong>
            <?php include('menu.php'); ?>
        </div>
        <!-- end header right -->
    </div>
    <!-- end box -->
</div>
<!-- end header -->
<!-- start showcase -->
<div class="showcase">
	<img src="images/img_showcase.jpg" alt="showcase" />
</div>
<!-- end showcase -->
<!-- start container -->
<div class="container clearfix">
	<!-- start box -->
    <div class="box">
    	<!-- start leftcol -->
        <div class="leftcol">
        	<!-- start about box -->
            <div class="about-box clearfix">
            	<!-- start imgb -->
                <div class="imgb">
                	<img src="images/img_gallery.jpg" alt="Gallery" />
                </div>
                <!-- end imgb -->
                <!-- start txtb -->
                <div class="txtb">
                	<h3>DGA Decorating</h3>
                    <p>The Safety Forum (TSF) is a forum of independent experts specialising in <strong>Road Safety Audits</strong> (RSA), <strong>Road Safety Engineering</strong> and Data Collection. The Safety Forum (TSF) is a forum of independent in <strong>Road Safety Audits</strong> (RSA).</p>
                </div>
                <!-- end txtb -->
            </div>
            <!-- end about box -->
            <!-- start quotations -->
            <div class="quotations clearfix">
                <!-- start imgb -->
                <div class="imgb">
                    <img src="images/img_quotations.png" alt="quotations" />
                </div>
                <!-- end imgb -->
                <h3>Free Quotations</h3>
                <p>Quotes are available following site visits or from scaled plans.</p>
                <span>To arrange a site visit, call:</span>
                <strong>01291 620536</strong>
            </div>
            <!-- end quotations -->
            <div style="clear: both"></div>

            <!-- start product list -->
            <div class="product-list clearfix">
            	<ul>
                    <?php
                        $dir = "gallery/*.jpg";
                        //get the list of all files with .jpg extension in the directory and safe it in an array named $images
                        $images = glob( $dir );

                        //extract only the name of the file without the extension and save in an array named $find
                        foreach( $images as $image ):
                    ?>
                        <li>
                            <!-- start imgb -->
                            <div class="imgb">
                                <a href="<?php print $image; ?>" class="fancybox" rel="gallery1"><img src="/resize.php?image=<?php print $image; ?>" alt="products" /></a>
                            </div>
                            <!-- end imgb -->
                        </li>
                    <?php
                        endforeach;
                    ?>
                </ul>
            </div>
            <!-- end product list -->
        </div>
        <!-- end leftcol -->

    </div>
    <!-- end box -->
</div>
<!-- end container -->
<?php include('footer.php'); ?>
</body>
</html>
