<?php include'header.php'; ?>
<?php
require_once("db.php");
error_reporting(2);
if (isset($_GET['id'])) {
    $idProduct = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = " . $idProduct;
    // echo $sql;
    $result = mysqli_query($con, $sql);
    if (!$result) {
        // echo $sql;
        die('error');
    } else {
        while ($row = mysqli_fetch_array($result)) {
            $thumImage = "product_images/" . $row['product_image'];
            ?>


<a class="close" href="#">&times;</a>
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active">
                            <img id="pic-1" data-zoom-image="<?php echo $thumImage; ?>"
                                src="<?php echo $thumImage; ?>" />
                        </div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active" style="width: 100px;height: 100px"><a data-target="#pic-1"
                                data-toggle="tab"><img id="pic-1" src="<?php echo $thumImage; ?>" /></a></li>
                    </ul>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?php echo $row['product_title']; ?></h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>

                    <h4 class="price">Price : <span>Rp<?php echo $row['product_price']; ?></span></h4>
                    <h5 class="quantity">Description : <?php echo $row['product_desc']; ?></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tempor nunc. Etiam felis
                        nunc, maximus nec massa non, pellentesque facilisis augue. Aenean nec vehicula sem. Nam lacinia
                        pretium ante sit amet rhoncus. Donec consectetur ligula eu mauris faucibus, vel dignissim urna
                        ultrices. </p>
                    <div style="height:100px;"></div>

                    <div class="action">
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        <button style="float: right;" class="add-to-cart btn-md btn-default" type="button">Beli Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 100px"></div>
<?php }
    }
}
?>

<?php include('footer.php'); ?>

<?php
include 'jsfile.php';
?>
<script>
$('#pic-2').elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750
});
</script>
<script>
$('#pic-1').elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750
});
</script>