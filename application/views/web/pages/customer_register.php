<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Daftar akun baru</h3>
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
            <form method="post" action="<?php echo base_url('customer/save'); ?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Nama">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Password">

                                </div>

                                <div>
                                    <input type="text" name="customer_city" placeholder="Kota">
                                </div>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="HP">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Email">
                                </div>


                                <div>
                                    <input type="text" name="customer_address" placeholder="Alamat">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="search">
                    <div><button class="grey">Daftar</button></div>
                </div>
                <!-- <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p> -->
                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>