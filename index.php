<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/04/2020
 * Time: 16:20
 */
include("includes/header.php");
?>

<div class="home-page">
    <div class="home-page__wrapper">
        <div class="confession">
            <h1 class="uk-heading-medium uk-text-center">Covid Confessions</h1>
            <form id="confession-form">
                <textarea type="text" placeholder="Write your confession here..." class="confession__input uk-textarea"></textarea>
                <button class="uk-button uk-button-default">Submit</button>

                <p id="response"></p>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>