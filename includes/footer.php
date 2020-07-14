<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 25/04/2020
 * Time: 21:29
 */
?>

<!-- Confession Template -->
<script id="confession-template" type="x-handlebars-template">

<div class="confession" style="display: none" onmouseover="mouseOver()">
    <p>I confess that...</p>
    <div class="confession__body">
        <span uk-icon="icon: quote-right"></span>
        <div class="confessionsPage__column">
            {{ text }}
        </div>
        <span uk-icon="icon: quote-right"></span>
    </div>
    <div class="confession__footer">
        <small>{{dateAdded}}</small>
    </div>
</div>

</script>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="node_modules/handlebars/dist/handlebars.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

<script src="js/scripts.js"></script>
<script src="js/confession.js"></script>
</body>
</html>
