

<script src="<?php //echo base_url('assets/countdownTimer/countdown/jquery.countdown.ReadMode.js')?>"></script>
<script src="<?php //echo base_url('assets/countdownTimer/js/ReadModeCountdownScript.js')?>"></script>


<div id='navigationDiv'>

<!--

<span id="lessionNumberSpan1">
	<span id="lessionNumberSpan2">
		
	</span>  of 5
</span>

-->

<div id='navProgressDiv'>


<!-------------------------- progressDiv --------------------------->
	<div id="progressOutDiv">
		<div id="progressInDiv">
		</div>
	</div>
</div>

<nav> <?php /*echo anchor('usercontroller/startQuiz', 'Start test', array('id'=>'startTest') ) . " | "; */if($this->session->userdata('account_type') =="f") {echo anchor('/usercontroller/registerFBUser', 'Register') ;} /*. " | "; } echo anchor('usercontroller/logout', 'Logout', array('class'=>'focus') ); */?> </nav>
</div>

<!------------------------- mainDiv, centralni div u koji se ucitava tekst ------------------------->
<div id='mainDiv'>

<script>
	// slanje informacije o akciji poktretanja sistema za ucenje
	sendUserActionsLessions(currentLessionNumber, "start_dsi", null);
</script>

    
	<?php $attributes = array('class' => 'chooseanswer');
			
		echo form_open("UserController/login", $attributes); 
	?>
			
		<br />
			
		<div class="testDiv">
					
			<span class="close">&times;</span>
						
		<!--  <h4>Choose one answer:</h4>-->
						
			<span class="testSpan" id="idbr1"> 1. Izaberite <input type="text" size="3"></input> opciju jedan </span> <br />
			<span class="testSpan" id="idbr2"> 2. Opcija dva je izabrana </span> <br />
			<span class="testSpan" id="idbr3"> 3. Treci izbor je najpamentiji </span> <br />
						
			<input type="submit" id="submitAnswerButton" value="Submit answer!" />
			<input type="submit" id="submitNoAnswerButton" value="FALSE!" />
					
		</div>
				
		        
		               
	<?php echo form_close(); ?>
	
	
	
	


	
	<script>

		var addOrRemove = true;

		$(".testSpan").hover(function() {
			
			$(this).css('cursor','pointer');
			
			}, function() {
			
			$(this).css('cursor','auto');
			
		});
		
		$(".testSpan").click(function()
		{
				$(".testSpan").css('background', '#fff');
				$(".testSpan").css('color', '#000');

				$(this).css('background', '#F26000');
				$(this).css('color', '#fff');

		//alert( "Ovo je ID kliknutog odgovora " + this.id + " "  );
		});

		function selectAnswer()
		{
			
		}
	</script>


</div>

<!--  
<div id="countDiv">
	<div id="countdown"> </div>
</div>
-->

<div id="bottomDiv">

		 <span class="close">&times;</span>
		 
		 <div id="statementDiv"> </div>
		 
</div>