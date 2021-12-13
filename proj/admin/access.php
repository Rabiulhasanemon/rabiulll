<?php
require_once('function/manage.php');
needLogged();
get_header();
get_sidebar();

 ?>
 <div class="alert alert-danger" role="alert">
<strong>Access Denied</strong> you have no permission visited this page...
</div>
<?php

get_footer(); ?>
