<div class="main">
    <div class="content" style="text-align: center">
        <div class="login_panel" style="width:400px;text-align:center;display:inline-block;float: none">
            <h3>Pelanggan Terdaftar</h3>
            <p>Silahkan isi form untuk login.</p>
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

            <form action="<?php echo base_url('customer/logincheck'); ?>" method="post">
                <input name="customer_email" placeholder="Masukan Email anda" type="text" />
                <input name="customer_password" placeholder="Masukan Password anda" type="password" />
                <!-- <p class="note">Lupa passwo <a href="#">here</a></p> -->
                <div class="buttons">
                    <div><button class="grey">Sign In</button></div>
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>