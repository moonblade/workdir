<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="favicon.ico">
		<title>MultiDatesPicker for jQuery UI</title>
		<meta name="description" content="MDP is a little plugin that enables jQuery UI calendar to manage multiple dates.">
		<meta name="keywords" content="Multiple Dates Picker, jQuery, jQuery UI, javascript, calendar, Luca Lauretta, dubrox">
		<meta name="author" content="Luca Lauretta aka dubrox">
		
		<!-- loads jquery and jquery ui -->
		<!-- -->
		<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-->
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-- -->
		
		<!-- loads mdp -->
		<script type="text/javascript" src="jquery-ui.multidatespicker.js"></script>
		
		<!-- mdp demo code -->
		<script type="text/javascript">
		<!--
			var latestMDPver = $.ui.multiDatesPicker.version;
			var lastMDPupdate = '2014-09-19';
			
			$(function() {
				// Version //
				//$('title').append(' v' + latestMDPver);
				$('.mdp-version').text('v' + latestMDPver);
				$('#mdp-title').attr('title', 'last update: ' + lastMDPupdate);
				
				// Documentation //
				$('i:contains(type)').attr('title', '[Optional] accepted values are: "allowed" [default]; "disabled".');
				$('i:contains(format)').attr('title', '[Optional] accepted values are: "string" [default]; "object".');
				$('#how-to h4').each(function () {
					var a = $(this).closest('li').attr('id');
					$(this).wrap('<'+'a href="#'+a+'"></'+'a>');
				});
				$('#demos .demo').each(function () {
					var id = $(this).find('.box').attr('id') + '-demo';
					$(this).attr('id', id)
						.find('h3').wrapInner('<'+'a href="#'+id+'"></'+'a>');
				});
				
				// Run Demos
				$('.demo .code').each(function() {
					eval($(this).attr('title','NEW: edit this code and test it!').text());
					this.contentEditable = true;
				}).focus(function() {
					if(!$(this).next().hasClass('test'))
						$(this)
							.after('<button class="test">test</button>')
							.next('.test').click(function() {
								$(this).closest('.demo').find('.hasDatepicker').multiDatesPicker('destroy');
								eval($(this).prev().text());
								$(this).remove();
							});
				});
			});
		// -->
		</script>
		
		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="css/mdp.css">
		<link rel="stylesheet" type="text/css" href="css/prettify.css">
		<script type="text/javascript" src="js/prettify.js"></script>
		<script type="text/javascript" src="js/lang-css.js"></script>
		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>
		
	</head>
	<body>
			<div id="demos">
				<h2>Demos</h2>
				<p>
					Here are some demos for you to understand how it works and what you can obtain with it.<br>
					To see how it is implemented simply check the source code of this page: I've tried to keep the code simple and clear :)
				</p>
				
					<li class="demo">
						<h3>Min and Max date</h3>
						<div id="simple-select-min-max" class="box"></div>
						<p class="description">
							As with the jQuery Datespicker, you can define a minimum and maximum date from where to pick dates.<br>
							The values are relative to the current date.
						</p>
						<p class="example">
							In this example the minimum day is set to today and the maximum to 30 days from now.
						</p>
						<div class="code-box">
							<h4>Code used</h4>
							<pre class="code prettyprint">
var today = new Date();
$('#simple-select-min-max').multiDatesPicker({
	minDate: 0,
	maxDate: 30
});</pre>
						</div>
					</li>
				
							</ul>
		</div>
	</body>
</html>