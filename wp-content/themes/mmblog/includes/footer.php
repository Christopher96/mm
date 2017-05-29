    
    <footer class="row site-footer">
      <a href="marinam.se">marinam.se</a> | Marina Mäkelä | &#169; Copyright <span class="marked">2017</span>
    </footer>

    </div> <!-- .container -->

    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/lightbox.min.js"></script>
    <script src="scripts/main.js"></script>
    

    <script type="text/javascript">

    $(document).ready(function(){
      $("#navbar-menu li[data-page='<?= $page ?>']").addClass("active");
    });

    </script>
    
    <script>
      lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
      });
    </script>
  </body>
</html>