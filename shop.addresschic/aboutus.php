<?include_once ('header.php') ?>

     <div class="top-container"><div class="breadcrumbs">
       <div class="container">
         <div class="row">
          <div class="col-sm-12 a-left">
           <ul>
           <li class="home"><a href="index.php" title="Go to Home Page">Home</a><span class="breadcrumbs-split"><i class="icon-right-open"></i></span>
           </li><i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>About Us</strong> </li>
            </ul>
           </div>
         </div>
      </div>
    </div>
</div>


<div class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                                        <div id="loading-mask">
<div class="background-overlay"></div>
	<p id="loading_mask_loader" class="loader">
        <i class="ajax-loader large animate-spin"></i>
	</p>
</div>
<div id="after-loading-success-message">
	<div class="background-overlay"></div>
	<div id="success-message-container" class="loader"><div class="msg-box">Product was successfully added to your shopping cart.</div>
    	<button type="button" name="finish_and_checkout" id="finish_and_checkout" class="button btn-cart"><span><span>
				Go to cart page		</span></span></button>
	<button type="button" name="continue_shopping" id="continue_shopping" class="button btn-cart">
	<span><span>
				Continue		</span></span></button>
    </div>
</div>	
<script type="text/javascript">
	jQuery('#finish_and_checkout').click(function(){
        try{
            parent.location.href = 'http://shop.addresschic.com/checkout/cart/';
        }catch(err){
            location.href = 'http://shop.addresschic.com/checkout/cart/';
        }
    });
	jQuery('#continue_shopping').click(function(){
        jQuery('#after-loading-success-message').fadeOut(200);
        clearTimeout(ajaxcart_timer);
        setTimeout(function(){
            jQuery('#after-loading-success-message .timer').text(ajaxcart_sec);
        }, 1000);});
</script><div class="std"><section id="panel2" class="panel show" data-animate="page">
    <div class="panel-head">
        <div class="title-french-pass">
            <h2>
                <span><h2>I am stylish. I am conscious. I am beautiful. I am Address Chic.</h2></span>
                <svg class="mt-20" viewBox="0 0 206.9 75.7">ADDRESS</svg>
            </h2>
            <hr style="height: 4rem; display: none;">
        </div>
        <blockquote>
            <p>Address Chic is a consciously curated virtual store offering ethical clothing, shoes, bags, accessories and lifestyle products that are mindfully crafted.<br>
                We believe fashion can be beautiful &amp; responsible. Combining ethics with aesthetics, we curate beautiful products, from around the world, that are kind to the animals, people and planet without compromising on style.<br>
                Our aim is simple - we want to make sustainable and cruelty-free fashion accessible to all.</p>
        </blockquote>
    </div>
</section>
<section id="panel3" data-animate="brand" class="show">
    <div id="absolute-grid-1" class="grid-m3">
        <figure class="grid__picture-1">
            <img src="https://image.ibb.co/n1gFMF/01.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-2">
            <img src="http://shop.addresschic.com/media/wysiwyg/porto/aboutus/17/Vegan Rings.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-3">
            <img src="https://image.ibb.co/nKk38v/03.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-4">
            <img src="https://image.ibb.co/b4fQMF/Salad_Yum.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-5">
            <img src="https://image.ibb.co/kQUkMF/grid_picture_5.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-6">
            <img src="http://shop.addresschic.com/media/wysiwyg/porto/aboutus/17/test10843.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-7">
            <img src="https://image.ibb.co/dU36Tv/BUY_LESS_CHOOSE_WELL.jpg" alt="Stanley &amp; Stella">
        </figure>
        <figure class="grid__picture-8">
            <img src="https://image.ibb.co/egUwTv/08.jpg" alt="Stanley &amp; Stella">
        </figure>
    </div>
</section>
<section class="grid-m1">
    <figure id="panel5" class="grid__item bg-french-pass" data-animate="grid">
        <div class="grid__item-left">
            <div id="absolute-grid-3" class="grid-m3">
                <span class="grid__picture-1"><img src="https://image.ibb.co/joR71F/04_img.jpg"></span>
                <span class="grid__picture-2"><img src="https://image.ibb.co/eBRkov/05_img.jpg"></span>
                <span class="grid__picture-3"><img src="https://image.ibb.co/k18gTv/06_img.jpg"></span>
            </div>
        </div>
        <figcaption class="grid__item-right">
            <div class="table">
                <div class="cell">
                    <p class="cite ">Why Address Chic is different?</p>
                    <p class="newcont">We meticulously scout the globe for ethical brands and handpick products after a rigorous quality check. There's nothing on our store that we wouldn't wear ourselves.<br> 
                        We visit ethical and fashion forums and events around the world, meet the brand owners and review their collection and then chose the products from the shortlisted brands. Our experts scrupulously check products in terms of sustainability, quality, craftsmanship, ingredients and origin before recommending them.<br>
                        We are passionate about what we do and we believe in working with people who share the same passion.<br>
                        We believe shopping should be an enjoyable experience and instead of rummaging from 1000s of pieces, most of which are not worthy of our time, we should have more relevant choices. We do all that work and only bring you the best of ethical fashion, never compromising on quality or style.</p>
                </div>
            </div>
        </figcaption>
    </figure>
    <figure id="panel6" class="grid__item bg-romantic " data-animate="grid">
        <div class="grid__item-right">
            <div id="absolute-grid-2" class="grid-m3">
                <span class="grid__picture-1"><img src="http://shop.addresschic.com/media/wysiwyg/porto/aboutus/17/Sterling Silver V-Choker - Faeth Vegan Fashion - Ethical Jewelry.jpg"></span>
                <span class="grid__picture-2"><img src="http://shop.addresschic.com/media/wysiwyg/porto/aboutus/17/Banana Leaf.jpg"></span>
                <span class="grid__picture-3"><img src="http://shop.addresschic.com/media/wysiwyg/porto/aboutus/17/IMG_9177.jpg"></span>
            </div>
        </div>
        <figcaption class="grid__item-left">
            <div class="table">
                <div class="cell">
                    <p class="cite">What you can expect from us?</p>
                    <p class="newcont">We'll always be honest and open about each item on our store and provide you every information we know about the product. If we missed anything, feel free to ask us. We'll always stick to our values of only working with sustainable brand and bringing cruelty-free products.<br> 
                        We have a team that's passionate about cruelty-free and compassionate living. If there is any information you need regarding a vegan lifestyle - right from fashion and beauty to health and nutrition - give us a shout and we'd be glad to answer.</p>
                </div>
            </div>
        </figcaption>
    </figure>
    <figure id="panel6" class="grid__item bg-french-pass" data-animate="grid">
        <div class="grid__item-right">
            <div id="absolute-grid-2" class="grid-m3">
                <span class="grid__picture-1">
                    <img src="https://image.ibb.co/c5QZgF/first_img.jpg">
                </span>
                <span class="grid__picture-2">
                    <img src="https://image.ibb.co/fAv0MF/02_img.jpg">
                </span>
                <span class="grid__picture-3">
                    <img src="https://image.ibb.co/cf73aa/03_img.jpg">
                </span>
            </div>
        </div>
        <figcaption class="grid__item-left">
            <div class="table">
                <div class="cell">
                    <p class="cite">The Founders</p>
                    <p class="newcont">
                        When Shruti and Ritika could not find quality vegan products for their wardrobes they decided to take things in their own hands and started Address Chic.<br>
                        Shruti Jain has a background in finance, where she worked as a wealth manager for over eight years before starting Address Chic. She’s has received various awards and accolades, including  Women Entrepreneurship Award, in her previous stint and has contributed various articles to top leading financial dailies and magazines.<bt>
                    Ritika Kasliwal is an early-age entrepreneur. She first started a digital marketing company MMF Technologies along with her brother at an age of 21. Today her company has a young team of more than 200 members and she services clients from all over the world.
                    </bt></p>
                    <!--                    <br>
                                        <p style="text-transform: capitalize;font-size: 20px;font-style: italic;font-weight: 600;text-align: center;line-height: 20px;">Shruti Jain</p>
                                        <span style="text-transform: capitalize;font-size:15px;font-style: italic;font-weight: 600;" >Co-Founder</span>
                                        <p class="newcont">
                                            In 2014, Shruti Jain left her job to start her own business. She never had any background in fashion but her passion for promoting cruelty-free fashion and frustration with the lack of quality retail store and one single platform to talk about a 100 percent ethical lifestyle led her to build Address Chic. Along with being an ethical stylist and Founder of Address Chic, she is also the Editor of Address Chic's digital publication.</br>
                                            She loves vegan smoothies and swears by 100% cruelty-free lifestyle.
                                        </p>-->
                </div>
            </div>
        </figcaption>
    </figure>


</section>
<footer class="panel-bottom">
    <div class="cta-sustainable">
        <a href="https://www.pinterest.com/Addresschic" class="panel-bottom__cta" title="Sustainable">
            <span><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
        </a>
    </div>
    <div class="cta-facebook">
        <a href="https://www.facebook.com/pages/Addresschic/245329608999474?ref=hl" target="_blank" class="panel-bottom__cta" title="Like us on Facebook">
            <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
        </a>
    </div>
    <svg class="panel-bottom__logo" viewBox="0 0 206.9 75.7">
    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
    </svg>
    <div class="cta-instagram">
        <a href="https://instagram.com/address.chic" target="_blank" class="panel-bottom__cta" title="Follow us on Instagram">
            <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
        </a>
    </div>
    <div class="cta-contact">
        <a href="https://plus.google.com/u/0/102513964301651691621/about" class="panel-bottom__cta" title="Contact">
            <span><i class="fa fa-google-plus" aria-hidden="true"></i></span>
        </a>
    </div>
</footer>
</div>                </div>
            </div>
        </div>


<!-- //footer -->
<?include_once ('footer.php') ?>