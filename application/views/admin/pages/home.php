<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashoard') ?>">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>

    <h3>Produk</h3>
    <div class="row-fluid">

        <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
            <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
            <div class="number"><?= $this->db->count_all('tbl_brand') ?><i class="icon-arrow-up"></i></div>
            <div class="title">Merek</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>
        <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
            <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
            <div class="number"><?= $this->db->count_all('tbl_category') ?><i class="icon-arrow-up"></i></div>
            <div class="title">Kategori Produk</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>
        <div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
            <div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
            <div class="number"><?= $this->db->count_all('tbl_product') ?><i class="icon-arrow-up"></i></div>
            <div class="title">Produk</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>
        <!-- <div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
            <div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
            <div class="number">678<i class="icon-arrow-down"></i></div>
            <div class="title">visits</div>
            <div class="footer">
                <a href="#"> read full report</a>
            </div>
        </div> -->

    </div>

    <h3>Penjualan</h3>
    <div class="row-fluid">

        <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
            <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
            <div class="number"><?= $this->db->count_all('tbl_brand') ?><i class="icon-arrow-up"></i></div>
            <div class="title">Brand</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>
        <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
            <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
            <div class="number"><?= $this->db->count_all('tbl_category') ?><i class="icon-arrow-up"></i></div>
            <div class="title">Kategori Produk</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>
        <div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
            <div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
            <div class="number"><?= $this->db->count_all('tbl_product') ?><i class="icon-arrow-up"></i></div>
            <div class="title">Produk</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>
        <div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
            <div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
            <div class="number">678<i class="icon-arrow-down"></i></div>
            <div class="title">visits</div>
            <!-- <div class="footer">
                <a href="#"> read full report</a>
            </div> -->
        </div>

    </div>

</div>

</div>
<!--/.fluid-container-->

<!-- end: Content -->