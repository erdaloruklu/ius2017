<?php include_once("header.html") ?>
<script type="text/javascript">
	function show_pars(par){
		var i=0;
		$('#'+par+"_show").fadeOut('fast');
		$('#'+par+"_hide").fadeIn('slow');
		$('#'+par).fadeIn('slow');
	}
	function hide_pars(par){
		var i=0;
		$('#'+par).fadeOut('fast');
		$('#'+par+"_hide").fadeOut('fast');
		$('#'+par+"_show").fadeIn('slow');

	}
</script>
<div class="row-fluid">
	<h2 class="text-center"> Short Courses </h2>
</div> <!--/row-->
<div class="row-fluid">
	<div id="general" class="span10 offset1 text-center">
		<a class="btn" href=#grp1 style="width:500px; margin: 3px;"> Group 1: Medical Ultrasonics  &raquo;</a><br />
		<a class="btn" href=#grp2 style="width:500px; margin: 3px;"> Group 2: Sensors, NDE, and Industrial Application  &raquo;</a><br />
		<a class="btn" href=#grp3 style="width:500px; margin: 3px;"> Group 3: Physical Acoustics &raquo;</a><br />
		<a class="btn" href=#grp4 style="width:500px; margin: 3px;"> Group 4: Microacoustics - SAW, FBAR, MEMS &raquo;</a><br />
		<a class="btn" href=#grp5 style="width:500px; margin: 3px;"> Group 5: Transducers and Transducer Materials  &raquo;</a><br /><br />
	</div><!--/span-->
</div><!--/row-->
<div class="row-fluid">
	<h3 id=grp1> Group 1: Medical Ultrasonics</h3>
        <p>Information coming soon.</p>
</div><!--/row-->

<div class="row-fluid">
	<br />
	<h3 id=grp2> Group 2: Sensors, NDE & Industrial Applications </h3>
        <p>Information coming soon.</p>
</div><!--/row-->


<div class="row-fluid">
	<br />
	<h3 id=grp3> Group 3: Physical Acoustics </h3>
         <p>Information coming soon.</p>
</div><!--/row-->


<div class="row-fluid">
	<br />
	<h3 id=grp4> Group 4: Microacoustics: SAW, FBAR, MEMS </h3>
         <p>Information coming soon.</p>
</div><!--/row-->



<div class="row-fluid">
	<br />
	<h3 id=grp5> Group 5: Transducers & Transducer Materials </h3>
         <p>Information coming soon.</p>
</div><!--/row-->


<?php include_once("footer.html") ?>
