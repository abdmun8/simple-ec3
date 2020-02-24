<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Customer</h3>
            <p>Isi form untuk login.</p>
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
                <p><?php echo $this->session->flashdata('messagelogin'); ?></p>
            </div>

            <form action="<?php echo base_url('customer/shipping/login'); ?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text" />
                <input name="customer_password" placeholder="Enter Your Password" type="password" />
                <p class="note">Lupa password? <a href="#">klik disini</a></p>
                <div class="buttons">
                    <div><button class="grey">Sign In</button></div>
                </div>
            </form>
        </div>
        <div class="register_account">
            <h3>Daftar Baru</h3>
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
            <form method="post" action="<?php echo base_url('customer/shipping/register'); ?>">
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
                                    <input type="text" name="customer_email" placeholder="Email">
                                </div>

                                <div>
                                    <input type="text" name="customer_phone" placeholder="HP">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_city" placeholder="Kota">
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
                <p class="terms">Dengan meng-klik daftar anda setuju dengan semua syarat dan kondisi yang telah ditentukan</a>.</p>
                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>