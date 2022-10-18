<!-- top sale -->
<?php
$product_shuffle = $product->getData();
?>
<section id="top-sale">
    <div class="container py-5">
        <h3 class="font-rubik font-size-20">Top Sale</h3>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="<?php echo isset($item['item_image']) ? $item['item_image'] : "Image not loading"; ?>" alt="Product 1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo isset($item['item_name']) ? $item['item_name'] : "unknown"; ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price" py-2>
                            <span><?php echo isset($item['item_price']) ? $item['item_price'] : "0" ?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- top sale -->
