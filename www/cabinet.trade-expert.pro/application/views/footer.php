<div class="well well-large"> <?php echo lang('CopyrightDate');?>  &copy; <?php echo lang('sitename');?> </div>
</div>
<script src="/media/js/bootstrap.min.js"></script>
<script src="/media/js/bootstrap-dropdown.js"></script>
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
