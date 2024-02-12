<?php error_reporting(0); ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once dirname (__FILE__) . "/config/connection.php"; ?>

<?php
if(empty($_SESSION['username']))
{
	echo "<script>window.location='login.php'</script>";
}

$user = $_SESSION['username'];

$fisadmin = $_SESSION['fisadmin'];

if($fisadmin != 1)
{
	echo "<script>alert('Anda bukan Admin!');window.location='login.php'</script>";
}

?>

<title>
	Keyboard Virtual
</title> 

<?php include('includes/header.php'); ?>

  
    <style>

input[type=submit] {
    background-color: #2c3e50;
    color: white;
}

#message {
    display:block;
   
    position: relative;
    padding:10px 20px;
   
    margin:auto;
    margin-top:-20px;
}
#message p {
    padding: 0px 0px;
    font-size: 10px;
	margin-left : 20px;
}

#messagex {
    display:block;
   
    position: relative;
    padding:10px 20px;
   
    margin:auto;
    margin-top:-20px;
}
#messagex p {
    padding: 0px 0px;
    font-size: 10px;
	margin-left : 20px;
}



.valid {
    color: green;
}
.valid:before {
    position: relative;
    left: -5px;
    content: "V";
}
.invalid {
    color: red;
}
.invalid:before {
    position: relative;
    left: -5px;
    content: "X";
}

p:hover{
	background : black !important;
	color : white !IMPORTANT;
	cursor: pointer;
}	
  </style>
  
  
  <body style="padding : 20px !important;background :#eaeaea">
	<div class="row">
	

		
		<div class="col-lg-12">

			<a href="setting.php" style="float : right !important;" class="btn btn-success"><i class="fas fa-arrow-left">&nbsp; Back to Setting</i></a><br/>
			<center>&nbsp;<h1 style="color : #000"><b>KEYBOARD VIRTUAL</b></h1></center><hr/>
		</div>	
		<div class="col-lg-3">
		</div>
		<div class="col-lg-9 text-center">
		<br/>

		
		<?php
								$A = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'A'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'A'){
										$A = 'background : green; color : #fff;';
									}
								}	
								
								$B = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'B'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'B'){
										$B = 'background : green; color : #fff;';
									}
								}	
								
								$C = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'C'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'C'){
										$C = 'background : green; color : #fff;';
									}
								}	
								
								$D = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'D'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'D'){
										$D = 'background : green; color : #fff;';
									}
								}	
								
								
								$E = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'E'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'E'){
										$E = 'background : green; color : #fff;';
									}
								}	
								
								$F = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'F'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'F'){
										$F = 'background : green; color : #fff;';
									}
								}	
								
								
								$G = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'G'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'G'){
										$G = 'background : green; color : #fff;';
									}
								}	
								
								
								$H = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'H'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'H'){
										$H = 'background : green; color : #fff;';
									}
								}	
								
								
								$I = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'I'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'I'){
										$I = 'background : green; color : #fff;';
									}
								}	
								
								
								$J = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'J'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'J'){
										$J = 'background : green; color : #fff;';
									}
								}	
								
								$K = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'K'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'K'){
										$K = 'background : green; color : #fff;';
									}
								}

								$L = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'L'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'L'){
										$L = 'background : green; color : #fff;';
									}
								}	
								
								$M = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'M'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'M'){
										$M = 'background : green; color : #fff;';
									}
								}	
								
								
								$N = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'N'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'N'){
										$N = 'background : green; color : #fff;';
									}
								}	
								
								$O = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'O'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'O'){
										$O = 'background : green; color : #fff;';
									}
								}	
								
								
								$P = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'P'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'P'){
										$P = 'background : green; color : #fff;';
									}
								}	
								
								$Q = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'Q'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'Q'){
										$Q = 'background : green; color : #fff;';
									}
								}	
								
								
								$R = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'R'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'R'){
										$R = 'background : green; color : #fff;';
									}
								}	
								
								
								$S = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'S'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'S'){
										$S = 'background : green; color : #fff;';
									}
								}	
								
								
								$T = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'T'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'T'){
										$T = 'background : green; color : #fff;';
									}
								}	
								
								$U = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'U'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'U'){
										$U = 'background : green; color : #fff;';
									}
								}	
								
								$V = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'V'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'V'){
										$V = 'background : green; color : #fff;';
									}
								}	
								
								$W = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'W'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'W'){
										$W = 'background : green; color : #fff;';
									}
								}	
								
								
								$X = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'X'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'X'){
										$X = 'background : green; color : #fff;';
									}
								}	
								
								$Y = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'Y'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'Y'){
										$Y = 'background : green; color : #fff;';
									}
								}	
								
								$Z = 'background : #fff; color : #000;';
								 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard where FKEYBOARD = 'Z'");
									while($queryku2=mysqli_fetch_array($queryku))
									{									
									$FKEYBOARD = $queryku2['FKEYBOARD'];			
								
									if($FKEYBOARD == 'Z'){
										$Z = 'background : green; color : #fff;';
									}
								}	
								
		?>						
		
		
			<table class="text-center">
				<tr>
					<td><p onclick="inputQ('Q')" style="<?php echo $Q; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">Q</p></td>
					<td><p onclick="inputW('W')" style="<?php echo $W; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">W</p></td>
					<td><p onclick="inputE('E')" style="<?php echo $E; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">E</p></td>
					<td><p onclick="inputR('R')" style="<?php echo $R; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">R</p></td>
					<td><p onclick="inputT('T')" style="<?php echo $T; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">T</p></td>
					<td><p onclick="inputY('Y')" style="<?php echo $Y; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">Y</p></td>
					<td><p onclick="inputU('U')" style="<?php echo $U; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">U</p></td>
					<td><p onclick="inputI('I')" style="<?php echo $I; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">I</p></td>
					<td><p onclick="inputO('O')" style="<?php echo $O; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">O</p></td>
					<td><p onclick="inputP('P')" style="<?php echo $P; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">P</p></td>
				</tr>
			</table>
			<table class="text-center">
				<tr>
					<td style="width : 40px;"></td>
					<td><p onclick="inputA('A')" style="<?php echo $A; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">A</p></td>
					<td><p onclick="inputS('S')" style="<?php echo $S; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">S</p></td>
					<td><p onclick="inputD('D')" style="<?php echo $D; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">D</p></td>
					<td><p onclick="inputF('F')" style="<?php echo $F; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">F</p></td>
					<td><p onclick="inputG('G')" style="<?php echo $G; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">G</p></td>
					<td><p onclick="inputH('H')" style="<?php echo $H; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">H</p></td>
					<td><p onclick="inputJ('J')" style="<?php echo $J; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">J</p></td>
					<td><p onclick="inputK('K')" style="<?php echo $K; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">K</p></td>
					<td><p onclick="inputL('L')" style="<?php echo $L; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">L</p></td>
				</tr>
			</table>
			
			<table class="text-center">
				<tr>
					<td style="width : 120px;"></td>
					<td><p onclick="inputZ('Z')" style="<?php echo $Z; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">Z</p></td>
					<td><p onclick="inputX('X')" style="<?php echo $X; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">X</p></td>
					<td><p onclick="inputC('C')" style="<?php echo $C; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">C</p></td>
					<td><p onclick="inputV('V')" style="<?php echo $V; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">V</p></td>
					<td><p onclick="inputB('B')" style="<?php echo $B; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">B</p></td>
					<td><p onclick="inputN('N')" style="<?php echo $N; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">N</p></td>
					<td><p onclick="inputM('M')" style="<?php echo $M; ?> padding : 10px; font-size : 30px; border-radius : 10px; width : 70px; margin :5px; box-shadow: 0px 2px 5px 2px #888888;">M</p></td>
				</tr>
			</table>
		<br/>
		<br/>	
		<br/>	
		<div class="text-center" style="display : flex;">
		<h1>NOTE : </h1>&nbsp;
		<div class="text-center "style="width : 300px; height : 50px; background : green; color : white; box-shadow: 0px 2px 5px 2px #888888; vertical-align : middle;"><h1>AKTIF</h1></div> &nbsp; 
		<div class="text-center "style="width : 300px; height : 50px; background : white; color : black; box-shadow: 0px 2px 5px 2px #888888; vertical-align : middle;"><h1>TIDAK AKTIF</h1></div> 
		</div>
		<br/>
			
		</div>
	</div>
	

	
	 <script src="assets/datatables/jquery-3.5.1.js" ></script>
	<script src="assets/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/datatables/dataTables.buttons.min.js"></script>
	<script src="assets/datatables/buttons.flash.min.js"></script>
	<script src="assets/datatables/jszip.min.js"></script>
	<script src="assets/datatables/pdfmake.min.js"></script>
	
	<script src="assets/datatables/buttons.html5.min.js"></script>
	<script src="assets/datatables/buttons.print.min.js"></script>
	

	

<script>
function inputA(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputB(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputC(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputD(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputE(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputF(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputG(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputH(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputI(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputJ(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputK(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputL(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputM(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputN(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputO(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputP(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}


function inputQ(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}	

function inputR(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputS(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputT(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputU(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputV(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputW(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputX(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputY(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

function inputZ(cek){	
	var dataString = 'keyboard='+cek;
	//alert(dataString);					
				$.ajax({
				type: "POST",
				url: "exec_change_keyboard.php",
				data: dataString,
				cache: false,
				success: function(html) {
				window.location="keyboard_virtual.php";
					
				}
			});	
}

var myInput = document.getElementById("myInput2");
var myInput2 = document.getElementById("myInput3");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onkeyup = function() {
	//alert('test');
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  
   if(myInput.value.length >= 8 && myInput.value.match(numbers) && myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters)){
	 document.getElementById("ceked").value = 1;
 }else{
	 document.getElementById("ceked").value = 0;
	 document.getElementById("buttonx").disabled = true; 
 }	 

}

myInput2.onkeyup = function() {
	var cek1 = document.getElementById("myInput2").value;
	var cek2 = document.getElementById("myInput3").value;	
	var cek3 = document.getElementById("ceked").value;	

	if(cek3 = 1 && cek1 == cek2){
		 document.getElementById("buttonx").disabled = false; 
	}else{
		 document.getElementById("buttonx").disabled = true; 
	}		

}


function editFunct(idx){
	//alert(idx);	
	document.getElementById('fidx').value = idx;
}	


var myInputx = document.getElementById("myInput2x");
var myInput2x = document.getElementById("myInput3x");
var letterx = document.getElementById("letterx");
var capitalx = document.getElementById("capitalx");
var numberx = document.getElementById("numberx");
var lengthx = document.getElementById("lengthx");

myInputx.onkeyup = function() {
	//alert('test');
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInputx.value.match(lowerCaseLetters)) {  
    letterx.classList.remove("invalid");
    letterx.classList.add("valid");
  } else {
    letterx.classList.remove("valid");
    letterx.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInputx.value.match(upperCaseLetters)) {  
    capitalx.classList.remove("invalid");
    capitalx.classList.add("valid");
  } else {
    capitalx.classList.remove("valid");
    capitalx.classList.add("invalid");
  }
  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInputx.value.match(numbers)) {  
    numberx.classList.remove("invalid");
    numberx.classList.add("valid");
  } else {
    numberx.classList.remove("valid");
    numberx.classList.add("invalid");
  }
  
  // Validate length
  if(myInputx.value.length >= 8) {
    lengthx.classList.remove("invalid");
    lengthx.classList.add("valid");
  } else {
    lengthx.classList.remove("valid");
    lengthx.classList.add("invalid");
  }
  
   if(myInputx.value.length >= 8 && myInputx.value.match(numbers) && myInputx.value.match(upperCaseLetters) && myInputx.value.match(lowerCaseLetters)){
	 document.getElementById("cekedx").value = 1;
 }else{
	 document.getElementById("cekedx").value = 0;
	 document.getElementById("buttonxx").disabled = true; 
 }	 

}

myInput2x.onkeyup = function() {
	var cek1 = document.getElementById("myInput2x").value;
	var cek2 = document.getElementById("myInput3x").value;	
	var cek3 = document.getElementById("cekedx").value;	

	if(cek3 = 1 && cek1 == cek2){
		 document.getElementById("buttonxx").disabled = false; 
	}else{
		 document.getElementById("buttonxx").disabled = true; 
	}		

}





</script>	
	
<!-- JS code -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>



   

 
 <!-- Page level plugin JavaScript-->
    <script src="assets/sbadmin/vendor/chart.js/Chart.js"></script>
    <!-- Custom scripts for all pages-->

    <!-- Demo scripts for this page-->
    <script src="assets/sbadmin/js/demo/datatables-demo.js"></script>
    <script src="assets/sbadmin/js/demo/chart-area-demo.js"></script>

    <script src="assets/chartjs/chart.min.js"></script>
<script src="assets/chartjs/chartjs-plugin-datalabels.min.js"></script>

	<script>
var KeyboardGW = [
	<?php
	 $idx = 0; 
	 $queryku = mysqli_query($con, "select FKEYBOARD from t_keyboard");
	while($queryku2=mysqli_fetch_array($queryku))
	{									
	$FKEYBOARD = $queryku2['FKEYBOARD'];
    echo "'$num': '$FKEYBOARD',";	   		
	$num++;
	}	
    ?>
];

KioskBoard.Run('.virtual-keyboard', {
  keysArrayOfObjects: KeyboardGW,
  // keysJsonUrl: 'kioskboard-keys-english.json',
  language: 'en',
  keysFontFamily: 'Barlow',
  keysFontWeight: '500',
   // "light" || "dark" || "flat" || "material" || "oldschool"
  theme: 'dark', 
  capsLockActive: true,
  allowRealKeyboard: true,
  cssAnimations: true,
  cssAnimationsDuration: 360,
  cssAnimationsStyle: 'slide', 
  keysAllowSpacebar: true,
  keysSpacebarText: 'Space',
  keysFontFamily: 'sans-serif',
  keysFontSize: '22px',
  keysFontWeight: 'normal',
  keysIconSize: '25px',
  allowMobileKeyboard: true,
  autoScroll: true
});

  </script>
	
	
	<script>
	$(document).ready(function() {
		$('#example').DataTable( {
        "pagingType": "full_numbers",
		"pageLength": 10,
		
       
    } );
		
	} );
	
	</script>

  </body>
  
  <?php
if (isset($_POST['submit']))
{
	$fusername = $_POST["fusername"];
    $fpassword = sha1($_POST["fpassword"]);
    mysqli_query($con, "insert into t_users (fusername, fhashed_pwd, fisadmin) values ('$fusername', '$fpassword', '2')");

	echo "<script>window.location='setting.php'</script>";    
	
}


if (isset($_POST['submit2']))
{
	$fid = $_POST["fid"];
    $fpassword = sha1($_POST["fpassword"]);
    mysqli_query($con, "update t_users set fhashed_pwd = ' $fpassword' where fid = '$fid'");

	echo "<script>window.location='setting.php'</script>";    
	
}
?>

</html>

