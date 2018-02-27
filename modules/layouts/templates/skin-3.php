<?php

/*

type: layout

name: Blog Posts

description: Layout

position: 3

*/
?>

<div class="nodrop safe-mode edit" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
                    <?php _lang("Latest Posts"); ?>
                </h2>
            </div>
        </div>

        <module data-type="posts" data-limit="3" data-description-length="100" data-show="thumbnail,title,created_at,read_more,description" data-template="columns"/>
    </div>
</div>