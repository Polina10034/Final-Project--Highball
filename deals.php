<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300&display=swap" rel="stylesheet">    <link rel="stylesheet" href="includes/style.css">
	<title>my places vesper page</title>
</head>
<body id="myPlacesPage">
	<header>
		<a href="adminMain.html" id="adminLogo" class="rounded mx-auto d-block"></a>
    </header>
    <ul class="breadcrumb">
        <li><a href="adminMain.html">Home &nbsp;>></a></li>
        <li><a href="myPlaces.html">My Places &nbsp;>></a></li>
        <li><a href="myPlacesVesper.html">Vesper &nbsp;>></a></li>
        <li><a href="#">Deals &nbsp;>></a></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="sidenav">
        <a href="#">Revenue</a>
        <a href="#">Statistics</a>
        <a href="#">Top Charts</a>
        <a href="#">Menu</a>
        <a href="#">Deals</a>            
        <a href="#">Schedule</a>
    </div>
	<main>
        <a href="#">    
            <section class="section1">
                <img src="images/Image_12.png" class="rounded mx-auto d-block" alt="logo">
                <h4>Period - Weekend</h4>
                <h4>Description - 4$ for a Beer</h4>
            </section>
        </a>      
        <a href="#">    
            <section class="section2">
                <img src="images/Image_13.png" class="rounded mx-auto d-block" alt="logo">
                <h4>Period - 10:00-14:00</h4>
                <h4>Description - 50% discount on all alcohol</h4>
            </section>
        </a>   
        <a href="#">    
            <section class="section3">
                <img src="images/Image_15.png" class="rounded mx-auto d-block" alt="logo">
                <h4>Period - 20:00 till 21:00</h4>
                <h4>Description - 1 + 1 for everything</h4>
            </section>
        </a>   
        <a href="#">    
            <section class="section4">
                <img src="images/Image_14.png" class="rounded mx-auto d-block" alt="logo">
                <h4>Period - Every Friday</h4>
                <h4>Description - 20%   discount for all coctails</h4>
            </section>
        </a>          

        <section>
        <?php
            $imagName = $_GET['imageName'];
            $salePeriod = $_GET['salePeriod'];
            $saleDescription = $_GET['saleDescription'];

            echo "<a href='#'>    
            <section class='section5'>
                <img src='images/" . $imagName . ".png' class='rounded mx-auto d-block' alt='logo'>
                <h4>Period - " . $salePeriod . "</h4>
                <h4>Description - " . $saleDescription . "</h4>
            </section>
            </a>"
        ?>
        </section>
        
        <div class="w3lightBox">
            <section class="section6">
                <button id="make"><img src="images/deales5.png" class="rounded mx-auto d-block" alt="logo"></button>
            </section>
    
            <div id="id01" class="modal">
            <span class="close w3lightBox">&times;</span>
            <form action="deals.php" method="GET" class="modal-content">  
                
                <div class="container .w3lightBox">
                <h1>Add New Sale</h1>
                <p>Please fill in this form to create the sale</p>
                <hr>

    
                <label for="imageNameInput"><b>Image Name</b></label>
                <input type="text" placeholder="deales6.png" id="imageNameInput" name="imageName">
                <label for="salePeriodInput"><b>Sale Period</b></label>
                <input type="text" placeholder="every monday" id="salePeriodInput" name="salePeriod">
                <label for="saleDecriptionInput"><b>Sale Decription</b></label>
                <input type="text" placeholder="30% discount on all wines" id="saleDecriptionInput" name="saleDecription">
    
                <div class="clearfix">
                    <button type="submit" class="signupbtn">Let Us Do the Rest...</button>
                </div>
                </div>
            </form>
            </div>
            </div>           
        
    </main>
    </div>
  </body>
  <script src="scripts.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
