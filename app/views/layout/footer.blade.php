<footer id="footer-bar" class="row">
<p id="footer-copyright" class="col-xs-12">
&copy; 2014 <a href="http://www.adbee.sk/" target="_blank">Adbee digital</a>. Powered by Centaurus Theme.
</p>
</footer>
</div>
</div>
</div>
</div>
<div id="config-tool" class="closed">
<a id="config-tool-cog">
<i class="fa fa-cog"></i>
</a>
<div id="config-tool-options">
<h4>Layout Options</h4>
<ul>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-header"/>
<label for="config-fixed-header">
Fixed Header
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-sidebar"/>
<label for="config-fixed-sidebar">
Fixed Left Menu
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-footer"/>
<label for="config-fixed-footer">
Fixed Footer
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-boxed-layout"/>
<label for="config-boxed-layout">
Boxed Layout
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-rtl-layout"/>
<label for="config-rtl-layout">
Right-to-Left
</label>
</div>
</li>
</ul>
<br/>
<h4>Skin Color</h4>
<ul id="skin-colors" class="clearfix">
<li>
<a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
</a>
</li>
<li>
<a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
</a>
</li>
</ul>
</div>
</div>
 
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
 
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/hogan.js"></script>
<script src="js/typeahead.min.js"></script>
<script src="js/jquery.pwstrength.js"></script>
 
<script src="js/scripts.js"></script>
<script src="js/pace.min.js"></script>
 
<script>
	$(function($) {
		//tooltip init
		$('#exampleTooltip').tooltip();

		//nice select boxes
		$('#sel2').select2();
		
		$('#sel2Multi').select2({
			placeholder: 'Select a Country',
			allowClear: true
		});
	
		//masked inputs
		$("#maskedDate").mask("99/99/9999");
		$("#maskedPhone").mask("(999) 999-9999");
		$("#maskedPhoneExt").mask("(999) 999-9999? x99999");
		$("#maskedTax").mask("99-9999999");
		$("#maskedSsn").mask("999-99-9999");
		
		$("#maskedProductKey").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
		
		$.mask.definitions['~']='[+-]';
		$("#maskedEye").mask("~9.99 ~9.99 999");
	
		//datepicker
		$('#datepickerDate').datepicker({
		  format: 'mm-dd-yyyy'
		});

		$('#datepickerDateComponent').datepicker();
		
		//daterange picker
		$('#datepickerDateRange').daterangepicker();
		
		//timepicker
		$('#timepicker').timepicker({
			minuteStep: 5,
			showSeconds: true,
			showMeridian: false,
			disableFocus: false,
			showWidget: true
		}).focus(function() {
			$(this).next().trigger('click');
		});
		
		//autocomplete simple
		$('#exampleAutocompleteSimple').typeahead({                              
			prefetch: '/data/countries.json',
			limit: 10
		});
		
		//autocomplete with templating
		$('#exampleAutocomplete').typeahead({                              
			name: 'twitter-oss',                                                        
			prefetch: '/data/repos.json',                                             
			template: [                                                              
				'<p class="repo-language"></p>',                              
				'<p class="repo-name"></p>',                                      
				'<p class="repo-description"></p>'                         
			].join(''),                                                                 
			engine: Hogan                                                               
		});
		
		//password strength meter
		$('#examplePwdMeter').pwstrength({
			label: '.pwdstrength-label'
		});
		
	});
	</script>
</body>


</html>