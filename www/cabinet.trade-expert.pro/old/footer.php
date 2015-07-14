<? $year=date("Y"); ?>
<div class="well well-large"> <? echo $year; ?> &copy; Trade-Expert.Pro </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script>
	$(function() {
  // Setup drop down menu
  $('.dropdown-toggle').dropdown();
 
  // Fix input element click problem
  $('.dropdown input, .dropdown label').click(function(e) {
    e.stopPropagation();
  });
});
</script>
</body>
</html>