<?php
include "include/layout/header.php";
?>

<div class="error">
  <div class="error__content">
    <!-- h1(data-h1='400') 400 -->
    <!--p(data-p='BAD REQUEST') BAD REQUEST-->
    <!--h1(data-h1='401') 401-->
    <!--p(data-p='UNAUTHORIZED') UNAUTHORIZED-->
    <!--h1(data-h1='403') 403-->
    <!--p(data-p='FORBIDDEN') FORBIDDEN -->
    <h1 data-h1="404">404</h1>
    <p data-p="NOT FOUND">NOT FOUND</p>
    <a href="main">GO BACK</a>
    <!--h1(data-h1='500') 500-->
    <!--p(data-p='SERVER ERROR') SERVER ERROR-->
    <div id="particles-js"></div>
  </div>
</div>

<?php
include "include/layout/footer.php";
?>