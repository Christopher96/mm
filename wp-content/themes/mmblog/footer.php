
    <footer class="row site-footer">
      <a href="marinam.se">marinam.se</a> | Marina Mäkelä | &#169; Copyright <span class="marked">2017</span>
    </footer>

    </div> <!-- .container -->

	  <?php wp_footer(); ?>

    <script type="text/javascript">

    $(document).ready(function(){
      $("#navbar-menu li[data-page='<?= $page ?>']").addClass("active");
    });

    </script>

    <script>
      lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'alwaysShowNavOnTouchDevices': true
      });
    </script>

</body>
</html>
