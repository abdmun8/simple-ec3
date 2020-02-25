<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Checkout</h3>
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
                <table style="margin-top: 20px;width:100%;">
                    <tr>
                        <th colspan="2">Rincian Pesanan</th>
                    </tr>
                    <tr>
                        <th style="width:30%;border-bottom:1px solid grey;">Nama barang</th>
                        <th style="width:30%;border-bottom:1px solid grey;">Jumlah</th>
                        <th>&nbsp;</th>
                        <th style="width:30%;border-bottom:1px solid grey;">Harga</th>
                        <th>&nbsp;</th>
                        <th style="width:30%;border-bottom:1px solid grey;">Total</th>
                    </tr>
                    <?php $cart = $this->session->userdata('cart_contents');
                    $keys = array_keys($cart);
                    // $cart_content = $cart[$keys[2]];
                    // var_dump($cart);
                    // var_dump($this->session->userdata());
                    $shipping = $this->db->get_where('tbl_shipping', ['shipping_id' => $this->session->userdata('shipping_id')])->row();
                    // echo $this->db->last_query();
                    // var_dump($shipping);
                    $no = 0;
                    $total = 0;
                    foreach ($keys as $key => $value) {
                        // var_dump($value);
                        if ($no > 1) {
                            echo "<tr>";
                            echo "<td>{$cart[$value]['name']}</td>";
                            echo "<td>{$cart[$value]['qty']}</td>";
                            echo "<td>&nbsp;</td>";
                            echo "<td>Rp." . number_format($cart[$value]['price']) . "</td>";
                            echo "<td>&nbsp;</td>";
                            echo "<td>Rp." . number_format($cart[$value]['subtotal']) . "</td>";
                            echo "</tr>";
                            $total += $cart[$value]['subtotal'];
                        }
                        $no++;
                    }
                    ?>
                    <tr>
                        <td colspan="5">Sub Total</td>
                        <td>Rp.<?= number_format($total) ?></td>
                    </tr>
                    <tr>
                        <td colspan="5">Biaya Pengiriman</td>
                        <td>Rp.<?= number_format($shipping->shipping_cost); ?></td>
                    </tr>
                </table>
                <h2>Total yang harus dibayar: <?= 'Rp' . number_format($total + $shipping->shipping_cost); ?></h2>
                <div class="search">
                    <div><button class="grey">Selesai</button></div>
                </div>
            </form>

        </div>
        <div class="clear"></div>
    </div>
</div>