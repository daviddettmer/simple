<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 102 Template</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <link href="<?php echo base_url('resources/css/bootstrap.min.css')?>" rel="stylesheet" media="screen">
    <style media="screen" type="text/css">

    .nav-glyphish-example .ui-btn .ui-btn-inner {
    padding-top: 40px !important;
    }

    .nav-glyphish-example .ui-btn .ui-icon {
        width: 45px!important;
        height: 35px!important;
        margin-left: -24px !important;
        box-shadow: none!important;
        -moz-box-shadow: none!important;
        -webkit-box-shadow: none!important;
        -webkit-border-radius: none !important;
        border-radius: none !important;
    }

    #add_product .ui-icon {
    background-image: url(http://glyphish.com/images/demo.png);
    background-position: -249px -397px;
    background-repeat: no-repeat;
    }

    #inventory .ui-icon {
    background-image: url(http://glyphish.com/images/demo.png);
    background-position: -9px -61px;
    background-repeat: no-repeat;
    }

    #emails .ui-icon {
    background-image: url(http://glyphish.com/images/demo.png);
    background-position: -58px -540px;
    background-repeat: no-repeat;
    }
    </style>



</head>
<body>
<h1>Hello, worldsd!</h1>

<div>
    Blah blah blah


</div>

<div data-role="page">
    <div data-role="content">
        <h1>Hello, worldsd!</h1>

        <div>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>
            Blah blah blah<br>


        </div>
        <div data-role="footer" class="nav-glyphish-example" data-position="fixed">
            <div data-role="navbar" class="nav-glyphish-example" data-grid="b">
                <ul>
                    <li><a href="#" id="add_product" data-icon="custom">Add Product</a></li>
                    <li><a href="#" id="inventory" data-icon="custom">Inventory</a></li>
                    <li><a href="#" id="emails" data-icon="custom">Emails</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo $this->config->item('base_url').'resources/js/bootstrap.min.js'?>"></script>
</body>
</html>