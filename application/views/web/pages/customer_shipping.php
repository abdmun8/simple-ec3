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
            <form method="post" id="form-shipping" action="<?php echo base_url('customer/save/shipping/address'); ?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Nama Penerima">
                                </div>
                                <div>
                                    <input type="text" name="shipping_phone" placeholder="No Telepon Penerima">
                                </div>
                                <div>
                                    <textarea id="shipping_address" name="shipping_address" placeholder="Alamat Anda" rows="3" style="width:95%;"></textarea>
                                    <!-- <input type=" text" name="shipping_address" placeholder="Alamat Anda"> -->
                                </div>
                            </td>
                            <td>
                                <div id="pilih_kurir" style="display:block;">
                                    <div>
                                        <select id="kurir" name="kurir" class="frm-field required">
                                            <option selected disabled value="">Pilih Kurir</option>
                                            <option value="jne">JNE</option>
                                            <option value="pos">POS</option>
                                            <option value="tiki">TIKI</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <select onchange="changeProvince(this.value)" id="shipping_province_id" name="shipping_province_id" class="frm-field required">
                                        <option selected disabled value="">Pilih Provinsi</option>
                                        <?php $province = $this->db->order_by('province', 'ASC')->get('province')->result();
                                        foreach ($province as $key => $value) {
                                            echo "<option value='{$value->province_id}'>$value->province</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <select id="city" name="city" class="frm-field required" name="shipping_city_id">
                                        <option selected disabled value="null">Pilih Kota</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="text-align: center;">
                                <div class="search" style="align-self: center">
                                    <div><button type="button" onclick="cekOngkir()" class="grey">Cek Ongkir</button></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-top: 10px;">
                    <h4>Data Ongkir</h4>
                    <p style="text-align: left;font-size:20px;">Pengiriman: <span id="nama-kurir"></span></p>
                    <p style="text-align: left;font-size:15px;">
                        Dari: <span id="from-data"></span>
                    </p>
                    <p style="text-align: left;font-size:15px;">
                        Tujuan: <span id="to-data"></span>
                    </p>
                    <style>
                        #table-pengiriman {
                            width: 100%;
                            margin: 20px;
                            border: 1px solid silver;
                            border-radius: 5px;
                            padding: 5px;
                        }

                        #table-pengiriman tr td {
                            text-align: left;
                        }
                    </style>
                    <table id="table-pengiriman">
                    </table>
                </div>
                <div class="search">
                    <div><button type="button" class="grey" onclick="saveForm()">Simpan</button></div>
                </div>
                <div class="clear"></div>
                <div>
                    <input type="hidden" name="shipping_city" />
                    <input type="hidden" name="shipping_courier" />
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script>
    function changeProvince(id) {
        $.get(base_url + 'Web/getCity?id=' + id, (res) => {
            if (res.success) {
                $('#shipping_city_id').children().remove();
                $('#shipping_city_id').append('<option selected disabled value="">Pilih Kota / Kabupaten</option>');
                for (let i = 0; i < res.data.length; i++) {
                    const el = res.data[i];
                    $('#shipping_city_id').append(`<option value="${el.city_id}">${el.city_name}</option>`);
                }
            }
        }, 'json');
    }

    function cekOngkir() {
        if (!$('#kurir').val()) {
            alert('Pilih Kurir!')
            $('#shipping_city_id').val('')
            return;
        }

        if (!$('#province').val()) {
            alert('Pilih provinsi!')
            return;
        }

        if (!$('#shipping_city_id').val()) {
            alert('Pilih Kota!')
            return;
        }
        $.post(base_url + 'Web/getOngkir', {
            destination: $('#shipping_city_id').val(),
            kurir: $('#kurir').val(),
        }, (res) => {
            var data_ongkir = res.data.rajaongkir;
            if (data_ongkir) {
                var results = data_ongkir.results[0];
                var costs = results.costs;
                var from_data = data_ongkir.origin_details;
                var to_data = data_ongkir.destination_details;
                $('#nama-kurir').text(results.name);
                $('#from-data').text(`${from_data.city_name} - ${from_data.province}`);
                $('#to-data').text(`${to_data.city_name} - ${to_data.province}`);

                // set hiden form
                $('#shipping_courier').text(results.name);
                $('#shipping_city').text(to_data.city_name);

                $("#table-pengiriman").children().remove();
                var html = '';
                for (let i = 0; i < costs.length; i++) {
                    const item = costs[i];
                    // console.log(item)
                    html += `<tr><td colspan="3">${item.service} - ${item.description}</td></tr>`;
                    for (let h = 0; h < item.cost.length; h++) {
                        const type = item.cost[h];
                        html += `<tr>
                            <td style="width:30% !important;"><input type="radio" name="harga" value="${type.value}" /></td>
                            <td style="width:30% !important;">Harga: Rp. ${type.value}</td>
                            <td style="width:30% !important;">Estimesi: ${type.etd} Hari</td>
                            </tr>`;
                    }
                }
                $("#table-pengiriman").append(html);
            }
        }, 'json');


    }

    function saveForm() {
        if (confirm('Apakah anda yakin data sudah benar?')) {
            $('#form-shipping').submit();
        }
    }
</script>