<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Alamat Pengiriman Anda</h3>
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
            <form method="post" action="<?php echo base_url('customer/save/shipping/address'); ?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Nama Penerima">
                                </div>
                                <div>
                                    <input type="text" name="shipping_city" placeholder="Nama Kota">
                                </div>
                                <div>
                                    <input type="text" name="shipping_phone" placeholder="No Telepon Penerima">
                                </div>
                                <div>
                                    <input type="text" name="shipping_address" placeholder="Alamat Anda">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <select onchange="changeProvince(this.value)" id="province" name="province" class="frm-field required">
                                        <option selected disabled value="null">Pilih Provinsi</option>
                                        <?php $province = $this->db->order_by('province', 'ASC')->get('province')->result();
                                        foreach ($province as $key => $value) {
                                            echo "<option value='{$value->id}'>$value->province</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <select id="city" name="city" class="frm-field required">
                                        <option selected disabled value="null">Pilih Kota</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="search">
                    <div><button class="grey">Create Account</button></div>
                </div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script>
    function changeProvince(id) {
        console.log(id)
        $.get(base_url + 'Web/getCity?id=' + id, (res) => {
            if (res.success) {
                const city = $('#city').children().slice(0, 1);
                console.log(city)
                // for (let i = 0; i < res.data; i++) {
                //     const el = city[i];
                //     if (city)
                // }
            }
        });
    }
</script>