<?php

/*

type: layout

name: Contact form

position: 5

*/
?>


<div class="edit safe-mode nodrop" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mw-col-container">
                    <module type="contact_form" class="contact-form"/>
                </div>
            </div>

            <div class="col-md-6">
                <div style="padding-left: 40px;" class="allow-drop">
                    <div>
                        <h3><?php print _lang('Address'); ?></h3>
                        <hr>
                        <p><?php print _lang('10 "Professor Georgi Zlatarski" , bl. B, fl. 3,<br/>Sofia 1700,<br/>Bulgaria'); ?></p>
                        <div class="info-with-icons">
                            <span class="cloneable"><i class="fa fa-phone"></i> <?php print _lang('Phone: +1 (310) 123 4567'); ?><br/></span>
                            <span class="cloneable"><i class="fa fa-envelope"></i> <?php print _lang('help@microweber.com'); ?></span>
                        </div>
                    </div>

                    <h3><?php print _lang('Follow Us'); ?></h3>
                    <hr>
                    <module type="social_links"/>
                </div>
            </div>
        </div>
    </div>
</div>