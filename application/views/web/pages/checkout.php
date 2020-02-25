<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Payment Options</h3>
            <style type="text/css">
                #result {
                    color: red;
                    padding: 5px
                }

                #result p {
                    color: red
                }
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('save/order'); ?>" style="text-align: left">
                <span><input type="radio" checked name="payment" value="Transfer" />Transfer Bank</span><br />
                <p>Silahkan Transfer Ke rekening BCA 085547573 Atas Nama Imda Mebel</p>
                <p>Jika sudah transfer silahkan konfirmasi melalui whatsapp ke no <?php echo get_option('site_contact_num1'); ?></p>
                <div class="search">
                    <div><button class="grey">Selesai</button></div>
                </div>
            </form>

        </div>
        <div class="clear"></div>
    </div>
</div>