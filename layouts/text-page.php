<?php
/*

type: layout
content_type: static
name: Text page
description: Text page
position: 3

*/
?>

<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="starter_content">
    <div class="container nodrop">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"><?php _e("Text page"); ?></h2>
            </div>
        </div>

        <p class="intro text-center" style="font-weight: 500; font-size: 1.4em;">
            For a better view of your company, brand or website add some pictures or stories of your team.
            <br/>You can also link your social networks by clicking on the following social icons.
        </p>
        <br/><br/>

        <div class="mw-row">
            <div class="mw-col" style="width:50%">
                <div class="mw-col-container">
                    <div class="element" style="width:95%">
                        <p align="justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000
                            years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                            passage, and going through the cites of the word in classical literature, discovered the
                            undoubtable source.</p>
                    </div>
                </div>
            </div>
            <div class="mw-col" style="width:50%">
                <div class="mw-col-container">
                    <div class="element" style="width:95%">
                        <p align="justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000
                            years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                            passage, and going through the cites of the word in classical literature, discovered the
                            undoubtable source.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="element"></div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
