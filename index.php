<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Kaski(Pokhara)" label="&raquo; Kaski(Pokhara)"></optgroup><option value="Ranipauwa" >Ranipauwa</option><option value="Mahendrapool" >Mahendrapool</option><option value="New Road" >New Road</option><option value="Bagar" >Bagar</option><option value="Hospital chowk" >Hospital chowk</option><option value="Sarangkot" >Sarangkot</option><option value="Lakeside" >Lakeside</option><option value="Lekhnath" >Lekhnath</option><option value="Lamachaur" >Lamachaur</option><optgroup title="Kathmandu" label="&raquo; Kathmandu"></optgroup><option value="Kalanki" >Kalanki</option><option value="Balkhu" >Balkhu</option><option value=kritipur" >kritipur</option><option value="Swayambhu" >Swayambhu</option><option value="Sitapaila" >Sitapaila</option><option value="Balaju" >Balaju</option><option value="Pashupatinath" >Pashupatinath</option><option value="Boudha" >Boudha</option><option value="New Baneshwor" >New Baneshwor</option><option value="Basantapur" >Basantapur</option><option value="Patan" >Patan</option><option value="NewRoad" >NewRoad</option><option value="Bhaktapur" >Bhaktapur</option><option value="Lalitpur" >Lalitpur</option>
	<optgroup title="Chitwan" label="&raquo; Chitwan"></optgroup><optgroup title="Dang" label="&raquo; Dang"></optgroup>
	<optgroup title="Jhapa" label="&raquo; Jhapa"></optgroup></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						Donating blood is important because it can save lives. Blood is needed for a wide range of medical procedures, including surgeries, cancer treatments, and treating medical conditions such as anemia and blood disorders. When you donate blood, you are helping to ensure that there is a sufficient supply of blood for those who need it.
						Donating blood is an important act of kindness and generosity that can make a significant difference in the lives of others.
					</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Our main vission is to ensure that there is a consistent and adequate supply of safe blood for patients in need. This system should be easy to use and accessible to all stakeholders involved in the blood donation process, including donors, healthcare professionals, and blood bank staff.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Our main goal is to ensure the timely and efficient supply of safe blood and blood products to patients in need. It is optimize the blood donation process, ensure the safety of blood products, and improve patient outcomes through efficient and effective blood supply.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Our main mission is to ensure the safe, efficient, and effective collection, storage, testing, and distribution of blood and blood products to meet the needs of patients in a timely and cost-effective manner.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>