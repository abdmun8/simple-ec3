</div>
<div class="footer">
    <div class="wrapper">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Akun Saya</h4>
                <ul>
                    <li>
                        <?php
                        echo !$this->session->userdata('customer_id') ? "<a href='" . base_url() . "customer/login'>Login</a>" : "<a href='" . base_url() . "customer/logout'>Logout</a>" ?>
                    </li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Kontak</h4>
                <ul>
                    <li><span><?php echo get_option('site_contact_num1'); ?></span></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <div class="social-icons">
                    <ul>
                        <li class="facebook"><a href="<?php echo get_option('site_facebook_link'); ?>" target="_blank"> </a></li>
                        <li class="twitter"><a href="<?php echo get_option('site_twitter_link'); ?>" target="_blank"> </a></li>
                        <li class="googleplus"><a href="<?php echo get_option('site_google_plus_link'); ?>" target="_blank"> </a></li>
                        <li class="contact"><a href="<?php echo get_option('site_email_link'); ?>" target="_blank"> </a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><b><?php echo get_option('site_copyright'); ?></b></p>
        </div>
    </div>
</div>
<!-- floating button -->
<a href="#" class="float" onclick="openWhatsappChat()">
    <i class="fa fa-whatsapp fa-2x my-float"></i>
</a>
<!-- /floating button -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="<?php echo base_url() ?>assets/web/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo base_url() ?>assets/web/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

    function openWhatsappChat() {
        var no = '<?= get_option('site_contact_num1'); ?>';
        no = no.charAt(0) == '0' ? no.replace('0', '62') : no;
        var text = "Saya mau tanya tentang produk yang ada pada website imda mebel";
        text = encodeURI(text);
        window.open(`https://wa.me/${no}?text=${text}`);
    }
</script>
</body>

</html>