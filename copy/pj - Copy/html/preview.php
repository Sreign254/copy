<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	
    

	
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



	<title>Track</title>
	<include class="team html"></include>
</head>
<body>
	


	<!-- SIDEBAR -->
	
	
	<!-- SIDEBAR -->

	



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			<!--<a href="#" class="profile onclick="menuToggle();">">
				
				<img src="../image/tren-lg-2.jpg">-->

				
		
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main class="bg-secondary">
			<div class="head-title">
				<div class="left">
					<h1>Project details</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Project Details</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Upload PDF</span>
				</a>
			</div>
			<div class="row col-md-12"> 
        
            <div class="form-group col-md-6">
                <label for="first_name">Site ID</label>
                <input type="text" class="form-control" id="Site ID" name="Site ID" placeholder="Site ID">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Site Name</label>
                <input type="text" class="form-control" id="Site Name" name="Site Name" placeholder="Site Name">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Site GPS</label>
                <input type="text" class="form-control" id="Site GPS" name="Site GPS" placeholder="Site GPS">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Carrier Name</label>
                <input type="text" class="form-control" id="Carrier Name" name="Carrier Name" placeholder="Carrier Name">
            </div>
           
            <div class="form-group col-md-6">
                <label for="last_name">Tower height</label>
                <input type="text" class="form-control" id="Tower height" name="Tower height" placeholder="Tower height">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Sector</label>
                <input type="text" class="form-control" id="Sector" name="Sector" placeholder="Sector">
            </div>
            <div class="row form-group col-md-12 ">
                <label for="dropdown"
                  >Type of Scoop</label
                >
                <select name="dropdown" id="dropdown" 
                class="form-control col-md-12" required>
                  <option value="">Select Scoop</option>
                  <option value="Swap">Swap</option>
                  <option value="cut over">cut over</option>
                  <option value="Installation">Installation</option>
                  <option value="Installation">Allignment</option>
                  <option value="Other">Other</option>
                </select>
              </div>
     
        </div>
          
        <div class="form-outline">
                           
            <label class="form-label" for="Message">Message</label>
            <textarea class="form-control" id="Message" rows="8" placeholder="Message"></textarea>
            <br>
		
        </div>
		<div class=" form-group text-center">
            <button onclick="window.location.href='picturepreview.html' " class="btn btn-primary"> next</button>
			 

          </div>
        
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../js/script.js"></script>
</body>
</html>