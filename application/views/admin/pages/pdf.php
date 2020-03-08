<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style.css" />
</head>

<body>
    <div class="main" style="padding: 20px 30px;">
        <div class="header_area" style="background-color: #4253f4;">
            <h1 align="center">Data Pemesanan</h1>
        </div>
        <div class="voucher_address" style="border-bottom: 2px dashed #4253f4; padding: 20px 20px">
            <div class="customer_address">
                <h2>Data Customer</h2>
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>Nama : </td>
                        <td><?php echo $customer_info->customer_name; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat : </td>
                        <td><?php echo $customer_info->customer_address; ?></td>
                    </tr>
                    <tr>
                        <td>Telp : </td>
                        <td><?php echo $customer_info->customer_phone; ?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><?php echo $customer_info->customer_email; ?></td>
                    </tr>
                </table>
            </div>
            <div class="shipping_address">
                <h2>Data Pengiriman</h2>
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>Penerima : </td>
                        <td><?php echo $shipping_info->shipping_name; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat : </td>
                        <td><?php echo $shipping_info->shipping_address; ?></td>
                    </tr>
                    <tr>
                        <td>Telepon : </td>
                        <td><?php echo $shipping_info->shipping_phone; ?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><?php echo $shipping_info->shipping_email; ?></td>
                    </tr>
                    <tr>
                        <td>Kurir : </td>
                        <td><?php echo strtoupper($shipping_info->shipping_courier); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="voucher_item">
            <table width="100%" class="table table-striped table-bordered" cellspacing="0">
                <thead class="table-inverse">
                    <tr>
                        <th style="border-bottom: 1px solid black; padding: 5px 0px;">No.</th>
                        <th style="border-bottom: 1px solid black; padding: 5px 0px;">Produk</th>
                        <th style="border-bottom: 1px solid black; padding: 5px 0px;">Gambar</th>
                        <th style="border-bottom: 1px solid black; padding: 5px 0px;">Harga</th>
                        <th style="border-bottom: 1px solid black; padding: 5px 0px;">Qty</th>
                        <th style="border-bottom: 1px solid black; padding: 5px 0px;">Total Line</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $total_line = 0;
                    foreach ($order_details_info as $single_order_details) {
                        $i++;
                        $total = $single_order_details->product_price * $single_order_details->product_sales_quantity;
                        $total_line += $total;
                    ?>
                        <tr>
                            <td style="text-align: center; padding-top: 5px;"><?php echo $i; ?></td>
                            <td style="text-align: left; padding-top: 5px;"><?php echo $single_order_details->product_name ?></td>
                            <td style="text-align: center; padding-top: 5px;"><img src="<?php echo base_url('uploads/' . $single_order_details->product_image); ?>" style="width:200px;height:100px" /></td>
                            <td style="text-align: right; padding-top: 5px;">Rp. <?php echo number_format($single_order_details->product_price) ?></td>
                            <td style="text-align: right; padding-top: 5px;"><?php echo $single_order_details->product_sales_quantity ?></td>
                            <td style="text-align: right; padding-top: 5px;">Rp. <?php echo number_format($total_line) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot class="table-inverse">
                    <tr>
                        <td style="text-align: right; border-top: 1px solid black;" colspan="5">Ongkos Kirim</td>
                        <td style="text-align: right; border-top: 1px solid black;">Rp. <?php echo number_format($shipping_info->shipping_cost) ?></td>
                    </tr>
                    <!-- <tr>
                        <td style="text-align: right; border-top: 1px solid black;" colspan="5">PPN</td>
                        <td style="text-align: right; border-top: 1px solid black;">Rp. <?php echo number_format(0.1 * $total_line) ?></td>
                    </tr> -->
                    <tr>
                        <td style="text-align: right; border-top: 1px solid black;" colspan="5">Total Amount</td>
                        <td style="text-align: right; border-top: 1px solid black;">Rp. <?php echo number_format($total_line + $shipping_info->shipping_cost) ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="footer_area">
            <p align="center">Imda Mebel</p>
        </div>

    </div>
</body>

</html>