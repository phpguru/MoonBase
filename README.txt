	
In order to start creating a page layout you must first create a
contatiner, so use the following 'container' class:

	<body>
		<div class="container">		
		</div>
	</body>

	
Next, create a row where your columns are going to exsist by using
a 'row' class:

	<body>
		<div class="container">
		
			<div class="row">			
			</div>	
			
		</div>
	</body>
	
Note: Row's are needed to relatively contain your columns.


Finially start creating your columns:

	<body>
		<div class="container">
			<div class="row">
			
				<div class="four columns">
					My four column content.				
				</div>
				
				<div class="eight columns">
					My eight column content.				
				</div>	
				
			</div>			
		</div>
	</body>

Note: All columns within a row need to add up to 12 or less
(less because you can always offset smaller columns respectively
to add up to 12).


You're going to have multiple row's and columns - again, it all
depends on what your building:
	
	<body>
		<div class="container">
		
			<div class="row">
				<div class="twelve columns">
					My header content...				
				</div>		
			</div>
			
			<div class="row">
				<div class="one-third column">
					My left navigation...				
				</div>
				<div class="two-thirds column">
					My content column...				
				</div>						
			</div>
			
			<div class="row">
				<div class="one-third column">
					My one-third column content.				
				</div>
				<div class="one-third column">
					My one-third column content.				
				</div>
				<div class="one-third column">
					My one-third column content.				
				</div>				
			</div>	
			
		</div>
	</body>