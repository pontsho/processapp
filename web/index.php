<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | ProcessFlow</title>
    <meta name="keywords" content="ProcessFlow" />
    <meta name="description" content="ProcessFlow">
    <meta name="author" content="tkguesslife">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="bower_components/magnific-popup/dist/magnific-popup.css" />
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="bower_components/jquery-ui/themes/dark-hive/jquery-ui.min.css" />
    <link rel="stylesheet" href="bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="bower_components/morrisjs/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/theme-custom.css">

    <!-- Head Libs -->
<!--    <script src="bower_components/modernizr/" > </script>-->
</head>
<body>
<section class="body">

    <!-- start: header -->
    {% include 'menus/top_nav.html.twig' %}
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        {% include 'menus/left_nav.html.twig' %}
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            {% block header %}
            {% endblock header %}

            {% block body %}
            {% endblock body %}
        </section>

    </div>


</section>

<!-- Vendor -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-mobile-bower/js/jquery.mobile-1.4.5.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>

<!-- Specific Page Vendor -->
<script src="bower_components/jquery-ui/themes/dark-hive/jquery-ui.min.css"></script>
<script src="bower_components/jqueryui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="bower_components/jquery_appear/jquery.appear.js"></script>
<script src="bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Theme Custom -->
<script src="js/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>


<!-- Examples -->
<script src="js/dashboard/examples.dashboard.js"></script>
</body>
</html>