		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/markdown.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-markdown.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-editable.min.js"></script>
		<!-- basic scripts Buttons -->
		<script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/buttons.colVis.min.js"></script>
		<!-- basic scripts JQuey Flot-->

		<!-- basic scripts  -->
		<script src="<?php echo base_url(); ?>assets/js/daterangepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/autosize.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ace-editable.min.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
			jQuery(function($) {
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

			// jQuery(function($) {
				var $overflow = '';
				var colorbox_params = {
					rel: 'colorbox',
					reposition:true,
					scalePhotos:true,
					scrolling:false,
					previous:'<i class="ace-icon fa fa-arrow-left"></i>',
					next:'<i class="ace-icon fa fa-arrow-right"></i>',
					close:'&times;',
					current:'{current} of {total}',
					maxWidth:'100%',
					maxHeight:'100%',
					onOpen:function(){
						$overflow = document.body.style.overflow;
						document.body.style.overflow = 'hidden';
					},
					onClosed:function(){
						document.body.style.overflow = $overflow;
					},
					onComplete:function(){
						$.colorbox.resize();
					}
				};
				
				$(document).one('ajaxloadstart.page', function(e) {
					$('#colorbox, #cboxOverlay').remove();
			   });
			})
		</script>
	</body>
</html>