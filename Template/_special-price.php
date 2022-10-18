<!-- Special Price -->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20 ">Special Price</h4>
        <hr>
        <div id="filters" class="button-group text-end font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Redmi">Redmi</button>
        </div>

        <div class="grid">
            <?php array_map(function ($item){ ?>
            <div class="grid-item rounded border <?php echo $item['item_brand']; ?>">
                <div class="item py-2 bg-light" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="<?php echo isset($item['item_image']) ? $item['item_image'] : "Image not loading"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo isset($item['item_name']) ? $item['item_name'] : "unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?php echo isset($item['item_price']) ? $item['item_price'] : "0" ?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
<!-- !Special Price -->