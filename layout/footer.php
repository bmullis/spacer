<?php
if (isset($_SESSION['user']) && $current_page !== "index" && $current_page !== "about" && $current_page !== "contact") {
    include_once ('layout/footer_widget.php');
}
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                <p>&copy; 2016 Spacer, All Rights Reserved</p>
                <p>Spacer was created by <a target="_blank" href="http://www.brianmullis.net">Brian Mullis</a>.</p>
            </div>
        </div>
    </div>
</footer>

<!--jquery-->
<script src="jquery/dist/jquery.min.js"></script>
<script src="js/jquery.leanModal.min.js"></script>
<!--bootstrap js-->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!--custom scripts-->
<script src="js/scripts.js"></script>

</body>
</html>