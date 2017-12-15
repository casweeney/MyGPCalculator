<?php
	///////////// NULL VALUES
	$select = "Select Credit Unit";
	
	///////////// TENARY OPERATORS aka IF ELSE SHORTCUT
	//$tenary_variable = condition ? true : false ;
	
	///////////// Assign the values recieved
	if(isset($_POST['calculate_gp_btn'])){
		$credit_unit1 = $_POST['credit_unit1'] == $select ? 0 : $_POST['credit_unit1'];
		$credit_unit2 = $_POST['credit_unit2'] == $select ? 0 : $_POST['credit_unit2'];
		$credit_unit3 = $_POST['credit_unit3'] == $select ? 0 : $_POST['credit_unit3'];
		$credit_unit4 = $_POST['credit_unit4'] == $select ? 0 : $_POST['credit_unit4'];
		$credit_unit5 = $_POST['credit_unit5'] == $select ? 0 : $_POST['credit_unit5'];
		$credit_unit6 = $_POST['credit_unit6'] == $select ? 0 : $_POST['credit_unit6'];
		$credit_unit7 = $_POST['credit_unit7'] == $select ? 0 : $_POST['credit_unit7'];
		$credit_unit8 = $_POST['credit_unit8'] == $select ? 0 : $_POST['credit_unit8'];
		$credit_unit9 = $_POST['credit_unit9'] == $select ? 0 : $_POST['credit_unit9'];
		$credit_unit10 = $_POST['credit_unit10'] == $select ? 0 : $_POST['credit_unit10'];
		$credit_unit11 = $_POST['credit_unit11'] == $select ? 0 : $_POST['credit_unit11'];
		$credit_unit12 = $_POST['credit_unit12'] == $select ? 0 : $_POST['credit_unit12'];
		$credit_unit13 = $_POST['credit_unit13'] == $select ? 0 : $_POST['credit_unit13'];
		
		$grade1 = $_POST['grade1'];
		$grade2 = $_POST['grade2'];
		$grade3 = $_POST['grade3'];
		$grade4 = $_POST['grade4'];
		$grade5 = $_POST['grade5'];
		$grade6 = $_POST['grade6'];
		$grade7 = $_POST['grade7'];
		$grade8 = $_POST['grade8'];
		$grade9 = $_POST['grade9'];
		$grade10 = $_POST['grade10'];
		$grade11 = $_POST['grade11'];
		$grade12 = $_POST['grade12'];
		$grade13 = $_POST['grade13'];
		
		// $course_score is multiplication of CREDIT UNIT and GRADE VALUE
		$course_score1 = $credit_unit1 * $grade1;
		$course_score2 = $credit_unit2 * $grade2;
		$course_score3 = $credit_unit3 * $grade3;
		$course_score4 = $credit_unit4 * $grade4;
		$course_score5 = $credit_unit5 * $grade5;
		$course_score6 = $credit_unit6 * $grade6;
		$course_score7 = $credit_unit7 * $grade7;
		$course_score8 = $credit_unit8 * $grade8;
		$course_score9 = $credit_unit9 * $grade9;
		$course_score10 = $credit_unit10 * $grade10;
		$course_score11 = $credit_unit11 * $grade11;
		$course_score12 = $credit_unit12 * $grade12;
		$course_score13 = $credit_unit13 * $grade13;
		
		// Lets total all the $course_score
		$total_course_score = $course_score1 + $course_score2 + $course_score3 + $course_score4 + $course_score5 + $course_score6 + $course_score7 + $course_score8 + $course_score9 + $course_score10 + $course_score11 + $course_score12 + $course_score13;
		
		// Lets get all the total credit units
		$total_credit_unit = $credit_unit1 + $credit_unit2 + $credit_unit3 + $credit_unit4 + $credit_unit5 + $credit_unit6 + $credit_unit7 + $credit_unit8 + $credit_unit9 + $credit_unit10 + $credit_unit11 + $credit_unit12 + $credit_unit13;
		
		// Lets divide the total_course_score by total_credit_unit to get the GP
		$gp = $total_course_score / $total_credit_unit;
		$msg = "Your GPA is <b>{$gp}</b>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mygp.com</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="description" content="mygp" />
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/.css" />
		<link rel="shortcut icon" href="img/toxa.png">
		<link type="text/css" rel="stylesheet" href="css/defined.css" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						
					</div>
					
					<div class="col-md-6">
						
					</div>
					
					<div class="col-md-3 text-center">
						
					</div>
				</div>
			</div>
			<br />
		</header>
		<div class="container">
			<div class="col-md-2">
			
			</div>
			
			<div class="col-md-8">
				<div class="panel panel-success">
					<div id="p_head" class="panel-heading">
						<h4>CALCULATE YOUR GP NOW</h4>
						<?php
							if(isset($msg)){
								echo $msg;
							}
						?>
					</div>
					<div class="panel-body">
						<form id="gp_form" action="" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit1" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade1" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit2" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade2" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit3" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade3" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit4" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade4" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit5" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade5" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit6" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade6" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit7" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade7" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit8" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade8" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit9" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade9" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit10" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade10" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit11" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade11" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit12" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade12" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="credit_unit13" class="form-control">
											<option><?php echo $select; ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="grade13" class="form-control">
											<option>Select Grade</option>
											<option value='5'>A</option>
											<option value='4'>B</option>
											<option value='3'>C</option>
											<option value='2'>D</option>
											<option value='1'>E</option>
											<option value='0'>F</option>
										</select>
									</div>
								</div>
							</div>
						
							<input type="submit" id="gp_btn" name="calculate_gp_btn" value="CALCULATE GP" class="btn btn-success text-center" />
							<a href="index.php" id="bk" class="btn btn-warning text-center"><i class="fa fa-home"></i></a>
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-md-2">
			
			</div>
		</div>
	</body>
</html>