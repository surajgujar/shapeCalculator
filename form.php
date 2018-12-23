<div style="padding-top: 10%;padding-right: 30%;padding-bottom: 10%;padding-left: 30%;">
<p>Shape Calculator</p> 
<?php
if($this->submit == '') {
?>
<form method="post" action=""> 
	<fieldset>
		<p>Step 1 : Select your shape</p>
		<p>
			Please select the shape that you would like to calculate the area of and press the button "Go to step 2"
		</p>
		<p><input type="radio" name="shape" value="Rectangle" required>Rectangle</p>
		<p><input type="radio" name="shape" value="Circle" required>Circle</p>
		<p><input type="radio" name="shape" value="Square" required>Square</p>
		<p><input type="radio" name="shape" value="Ellipse" required>Ellipse</p>
	 <p><input type="submit" name="submit" value="Go to step 2"> or <a href="index.php">Cancel</a></p> 
	</fieldset> 
</form>
<?php
}
if($this->submit == 'Go to step 2') {
?>
<form method="post" action=""> 
	<fieldset>
		<p>Step 2 : Insert your values</p>
		<p>
			You have selected a <b><?=$this->choice?></b>, please input the required variables.
		</p>
		<?php
			switch ($this->choice) {
				case 'Circle':
					echo '<p>Radius:<input type="number" name="params[radius]" required></p>';
					break;
				case 'Rectangle':
					echo '<p>Width:<input type="number" name="params[width]" required></p>';
					echo '<p>Length:<input type="number" name="params[length]"></p>';
					break;
				case 'Square':
					echo '<p>Side:<input type="number" name="params[side]" required></p>';
					break;
				case 'Ellipse':
					echo '<p>a Axis:<input type="number" name="params[a_axis]" required></p>';
					echo '<p>b Axis:<input type="number" name="params[b_axis]" required></p>';
					break;	
			}
		?>
		
	 <p><input type="hidden" name="shape" value="<?=$this->choice?>"><input type="submit" name="submit" value="Go to step 3"> or <a href="index.php">Cancel</a></p> 
	</fieldset> 
</form>
<?php
}
if($this->submit == 'Go to step 3') {
?>
<form method="post" action=""> 
	<fieldset>
		<p>Step 3 : Your results</p>
		<p>
			You have calculated the area of a <?=$this->choice?>. Below is your result:
		</p>
		<p><b>The Area is <?=$this->result?>.</b></p>
		<p><input type="button" name="submit" value="Start over" onClick="location.href ='index.php';"></p>
	</fieldset> 
</form>
<?php } ?>
<div>