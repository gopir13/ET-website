<?php include("../includes/layout_header.php") ?>

<div id="products" class="container-fluid">
    <?php include("../includes/menu.php") ?>

    <div class="row content-wrapper">
        <div class="page-header">
            <h2>PRODUCTS</h2>
        </div>

        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li><a href="/index.php"><span class="fa fa-home"></span></a></li>
                    <li class="active">Products</li>
                </ol>

                <a class="media" href="et-core/index.php">
                    <span class="media-left">
                        <img class="media-object" src="../assets/images/products/et.png" alt="ET Core">
                    </span>
                    <span class="media-body">
                        <span class="media-heading">ET CORE</span>
                        <span class="p">Enabling workforce</span>
                    </span>
                </a>
                <a class="media" href="atom/index.php">
                    <span class="media-left">
                        <img class="media-object" src="../assets/images/products/atom.png" alt="ATOM">
                    </span>
                    <span class="media-body">
                        <span class="media-heading">ATOM</span>
                        <span class="p">Attendance tracking on mobile</span>
                    </span>
                </a>

            </div>
        </div>
    </div>
</div>

<?php include("../includes/layout_footer.php") ?>