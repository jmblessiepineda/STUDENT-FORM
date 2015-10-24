<!DOCTYPE html>
<html>
	<head>
		<title> Registration Form </title>



	<link rel="stylesheet" type="text/css" href="register.css">
	</head>
	<body>
	<form method = "POST" action = "form.php">

		
		<center>
		<div  id = "output">
		<h1>Student Registration Form</h1>
		<table border = '2' cellpadding = '5' >
			<tr>
				<td>First Name</td>
				<td>Middle Name</td>
				<td>Last Name</td>
			</tr>
			<tr>
				<td><input type = "text" name = "fname"></td>
				<td><input type = "text" name = "mname"></td>
				<td><input type = "text" name = "lname"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type = 'radio' name = "gender" value='male'>Male </td>
				<td><input type = 'radio' name = "gender" value='female'>Female</td>
			</tr>
			<tr>
				<td colspan = '3'>Birthday</td>
			</tr>
			<tr>
				<td>Month 
					<select name = "filter">
						<option value='january'>January</option>
						<option value = 'february'>February</option>
						<option value = 'march'>March</option>
						<option value = 'april'>April</option>
						<option value = 'may'>May</option>
						<option value = 'june'>June</option>
						<option value = 'july'>July</option>
						<option value = 'august'>August</option>
						<option value =  'september'>September</option>
						<option value = 'october'>October</option>
						<option value = 'november'>November</option>
						<option value = 'december'>December</option>
				</td>
				<td>Day
					<select name = "day">
							<?php
							for ($i=1; $i <= 31 ; $i++):
							 ?>
							<option value = '<?php echo $i; ?>'>
								<?php echo $i; ?>
							</option>
							<?php
							endfor; 
							 ?>
				</td>
				<td>Year
					<select name = "year">
						<?php
						for ($j = 1990 ; $j <= 2015 ; $j++):
						?>
						<option value = '<?php echo $j ;?>'>
							<?php echo $j; ?>
						</option>
						<?php
						endfor;
						?> 	
				</td>
			<tr>
				<td> Program</td>
				<td>
					<select name ="program">
						<option value='ABB'>AB Broadcasting</option>
						<option value = 'BSIS'>BS Information Systems</option>
						<option value = 'BSA'>BS Accountancy</option>
						<option value = 'BSAT'>BS Accounting Technology</option>
						<option value = 'ACT'>Associate in Computer Technology</option>
						<option value = 'IC'>International Cookery</option>
						<option value = 'BSW'>BS Social Works</option>
						<option value = 'MassCom'>Mass Communication Technology</option>
						<option value = 'NA'>Nursing Assistant</option>
						<option value = 'OM'>Office Management</option>
				</td>
			</tr>	
			<tr>
				<td colspan = '3' name = "type">Student Type</td>
			</tr>
			<tr>
				<td colspan = '3'>
					<input type = 'radio' value = 'FulL-Scholar' name='type'>Full-scholar <br>
					<input type = 'radio' value = 'Partial-Scholar' name='type'>Partial-scholar<br>
					<input type = 'radio' value = 'Payee' name='type'>Payee</td>
			</tr>	
			<tr>
				<td colspan = '3'>Address</td>
			</tr>
			<tr>
				<td colspan = '3'>
					<Textarea name ='address' rows= "10"cols="80"></Textarea>
				</td>
			</tr>
			<tr>
				<td colspan = 3><button type = "submit">SUBMIT</button></td>
			</tr>
		</table>
	</div>
	</center>
</form>
	</body>


</html>