<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8"> 
   <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
   <script src="jquery-ui.min.js" type="text/javascript"></script>
   <script src="jquery.validate.js" type="text/javascript"></script>
   
   <script src="javascript.js" type="text/javascript"></script>
   <link href="style.css" rel="stylesheet" />
   <title>Test</title>
  </head>
  <body>
  <div> 
    <form id="input-form">    
	  <p>Фамилия:</p>
	  <input type="text" name="last_name" id="lastname"/>

	  <p>Имя:</p>
	  <input type="text" name="first_name" id="firstname" />

	  <p>Отчество:</p>
	  <input type="text" name="middle_name" id="middlename" />

	  <p><font color="red">*</font>Телефон</p>
	  <input type="tel" name="phone" id="phone" pattern="[\+]375[\(][0-9]{2}[\)][0-9]{3}[\-][0-9]{2}[\-][0-9]{2}" />	

	  <p><font color="red">*</font>Email:</p>
	  <input type="email" name="email" id="email" /><br/>
	  <button type="submit" name="submit" value="Submit">Done!</button>
	</form>
	<div id="modal">
		<div id="modal-content">
			<h2 id="name"></h2>
		</div>
	</div>
	<div id="errors">
	</div>
	</div>
	
  </body>
 </html>

