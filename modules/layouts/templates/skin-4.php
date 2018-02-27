<?php

/*

type: layout

name: Products list

description: Layout

position: 4

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">
                    <?php _e("Latest Products"); ?>
                </h2>
            </div>
        </div>

        <module data-type="shop/products" data-limit="3" />
    </div>
</div>