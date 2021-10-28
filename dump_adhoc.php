<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
	
</head>




<body>
 
 <section class="content">
        <div class="container-fluid">
            
            <!-- Widgets -->
			 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Automation Dashboard					    
                            </h2>                            
                        </div>
						<div class="body">
						<div class="row clearfix">
						
						<form name="myForm" method="POST" action="dum_test.php">
						
						<div class="col-sm-6">                       						
						<label for="email_address">Select Execution</label>
						<div class="form-group">
						<div class="form-line">
						<select class="form-control  show-tick"  name="exec" required>
						<option value="">Select Execution</option>
						<option value= 'auto'>Automation</option>
						<option value= 'sd'>servicedesk</option>
					 
						</select>
						</div>
						</div>								
						</div>		
						
						
						<div class="col-sm-6">
						<label for="email_address">Select Execution</label>
						<div class="form-group">
						<div class="form-line">
						<select class="form-control  show-tick"  name="execution" required>
						<option value="">Select Execution</option>
						<option value= 'hyderabad'>hyderabad</option>
						<option value= 'chennai'>chennai</option>
						<option value= 'delhi'>delhi</option>
						<option value= 'banglore'>banglore</option>
					 <!--   <option value= 11>Tree Size</option>-->
						</select>
						</div>
						</div>									
						</div>	
						             
						                <div class="hyd">
										<div class="col-sm-6">
										<label for="email_address">Select Execution</label>
										<div class="form-group">
										<div class="form-line">
										<select class="form-control  show-tick"  name="execution1" required>
										<option value="">Select Execution</option>
										<option value= 'kukk'>kukkatpully</option>
										<option value= 'Ameerpet'>Ameerpet</option>
										
										</select>
										</div>
										</div>									
										</div>	
										</div>
						
						
						
                      
                                    <div class="hyd_emp">
										<div class="col-sm-6">
											<label for="email_address">Select Execution</label>
											<div class="form-group">
											<div class="form-line">
											<select class="form-control  show-tick"  name="employee" required>
											<option value="">Select Execution</option>
											<option value= 'mahesh'>Mahesh</option>
											<option value= 'arun'>Arun</option>
											</select>
											</div>
											</div>									
											</div>	
									</div>
						
						
						
					    <div class = "emp">
						<div class="col-sm-6">						
						<label>Employee Name</label>
						<div class="form-group">
						<div class="form-line">
						<input type="text" class="form-control" name="emp_name" value="Mahesh"  />
						</div>
						</div>							
						</div>
						
						<div class="col-sm-6">						
						<label>Employee ID</label>
						<div class="form-group">
						<div class="form-line">
						<input type="text" class="form-control" name="emp_id" value="908730"  />
						</div>
						</div>							
						</div>
						</div>	
						
						
						<div class="col-sm-12" style="text-align: center">
						<button type="submit" name="submit"  class="btn btn-primary waves-effect" >Submit</button>
						</div> 
						
						</form>
						</div>
						</div>
						</div>
						</div>		
           
        </div></div>				
		</section>          
				
                                
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	              
       	
</body>

</html>

<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue == "" || optionValue == "chennai" || optionValue == "delhi" || optionValue == "bangalore"){                
                $(".hyd").hide();
                $(".hyd_emp").hide();	
                $(".emp").hide();				
            } else if(optionValue == "hyderabad"){
				 $(".hyd_emp").show();
                 $(".hyd").show();
				 $(".emp").hide();
				 
				 }else if(optionValue == "mahesh"){
				 $(".emp").show();
				 
            }
			
        });
    }).change();
});
</script>










