<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Welcome To <?php echo $this->session->flashdata('customer_name'); ?></h3>

            <p>Hai <?php echo $this->session->flashdata('customer_name'); ?>, Anda telah berhasil daftar dengan email <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b><?php echo $this->session->flashdata('customer_email'); ?></b></a>
                Silahkan login untuk mulai memesan.
            </p>

        </div>
        <div class="clear"></div>
    </div>
</div>