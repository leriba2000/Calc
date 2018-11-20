   <html>
<head>
   <title>Calculadora</title
<style type="text/css">
    
</style>
<style type="text/css">
   .linha{
		padding: 5px;
	}

	input{
		border: 2px black;
		background-color: #33FFFF;
		color: black;
		font-family: sans-serif;
		font-weight: bold;
		cursor: pointer;
		transition: ease-out;
		transition-duration: .5s; 
	}
	
		table{
		border: 4px solid #dddddd;
		background-color: 	#3399FF;
		padding: 10px;
	}
	

	.result{
		padding: 5px;
		cursor: default !important;
	}
	
		.linha input:hover{
		color: #FF00FF;
		background-color: #00FF00;
	}
</style>

</head>
<body>
<CENTER>
   <FORM NAME="Calc">
      <TABLE>
      	<TR>
      		<TD ALIGN="CENTER">
      			<INPUT TYPE="text" CLASS="result"  NAME="Input" SIZE="25" readonly="readonly">
      		</TD>
      	</TR>
      	<TR>
      		<TD ALIGN="CENTER">
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="one" VALUE="  1  " onClick="Calc.Input.value += '1'">
      				<INPUT TYPE="button" NAME="two" VALUE="  2  " onClick="Calc.Input.value += '2'">
      				<INPUT TYPE="button" NAME="three" VALUE="  3  " onClick="Calc.Input.value += '3'">
      				<INPUT TYPE="button" NAME="plus" VALUE="  +  " onClick="Calc.Input.value += ' + '">
      			</DIV>
      			
      			
      			
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="four" VALUE="  4  " onClick="Calc.Input.value += '4'">
      				<INPUT TYPE="button" NAME="five" VALUE="  5  " onClick="Calc.Input.value += '5'">
      				<INPUT TYPE="button" NAME="six" VALUE="  6  " onClick="Calc.Input.value += '6'">
      				<INPUT TYPE="button" NAME="minus" VALUE="  -   " onClick="Calc.Input.value += ' - '">
      			</DIV>
      			
      			
      			
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="seven" VALUE="  7  " onClick="Calc.Input.value += '7'">
      				<INPUT TYPE="button" NAME="eight" VALUE="  8  " onClick="Calc.Input.value += '8'">
      				<INPUT TYPE="button" NAME="nine" VALUE="  9  " onClick="Calc.Input.value += '9'">
      				<INPUT TYPE="button" NAME="times" VALUE="  x  " onClick="Calc.Input.value += ' * '">
      			</DIV>
      
      			
      			<DIV class="linha">
      				<INPUT TYPE="button" NAME="clear" VALUE="  Resetar  " onClick="Calc.Input.value = ''">
      				<INPUT TYPE="button" NAME="zero" VALUE="  0  " onClick="Calc.Input.value += '0'">
      				<INPUT TYPE="button" NAME="div" VALUE="  /   " onClick="Calc.Input.value += ' / '">
      				<INPUT TYPE="button" NAME="DoIt" VALUE="  =  " onClick="Calc.Input.value = eval(Calc.Input.value)">
      			</DIV>
        	</TD>
      	</TR>
      </TABLE>
   </FORM>
</CENTER>
</body>
</html> 
