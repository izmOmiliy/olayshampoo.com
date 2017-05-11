

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="navigationHead">
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="100">
         <div class="container container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="index.php"><img src="images/Olay-logo1.png" alt="" width="150px"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
               <li class="active"><a href="index.php">Home</a></li>
               <!-- <li class="dropdown">
                  <a href="#aboutUs">About Us</a>
                </li>
                <li><a href="#products">Products</a></li>
                <li><a href="#contactUs">Contact Us</a></li>-->
              </ul>             
            </div>
          </div>
        </nav>
    </div>

    

    <div class="tab">
      <button class="tablinks">Menu</button>
      <button class="tablinks" onclick="openCity(event, 'Income')" id="defaultOpen">Income</button>
      <button class="tablinks" onclick="openCity(event, 'Products')">Products</button>
      <button class="tablinks" onclick="openCity(event, 'Debtors')">Debtors</button>
      <button class="tablinks" onclick="openCity(event, 'Creditors')">Creditors</button>
      <button class="tablinks" onclick="openCity(event, 'Fund')">Fund</button>
      <button class="tablinks" onclick="openCity(event, 'Taxes')">Taxes</button>
      <button class="tablinks" onclick="openCity(event, 'Expences')">Expences</button>

    </div>
    <h2 class="w3-xxlarge companyWelcome">Welcome to company information</h2>
    <div id="Income" class="tabcontent">
        <h3><b>Income</b></h3>
        <table>
            <tr class="active">
                <td >ID</td>
                <td >Agent name</td>
                <td>Income value</td>
                <td >Product</td>           
            </tr>
            <tr>
                <td>120 </td>
                <td>Moosy Nousy Ltd</td>
                <td>$ 1730</td>
                <td>Olay anti-dandruff shampoo</td>           
            </tr>
            <tr>
                <td>121 </td>
                <td>Melcomb  Sons Ltd</td>
                <td>$ 3000</td>
                <td>Olay body wash</td>           
            </tr>
            <tr>
                <td>122 </td>
                <td>Malcolm  X Ltd</td>
                <td>$ 2500</td>
                <td>Olay apple soaps</td>           
            </tr>
            <tr>
                <td>133 </td>
                <td>Geotech Co</td>
                <td>$ 970</td>
                <td>Olay softening shampoo</td>           
            </tr>

            <tr>
                <td>134 </td>
                <td>Miserable Founded</td>
                <td>$ 1915</td>
                <td>Olay shampoo aloe</td>           
            </tr>
        </table>
    </div>

    <div id="Products" class="tabcontent">
        <h3><b>Products</b></h3>
        <table>
            <tr class="active">
                <td >Product name</td>
                <td >Cost Price</td>
                <td>Selling Price value</td>
                <td >Shelf Life</td>   
                <td>Income</td>        
            </tr>
            <tr>
                <td>Olay softening shampoo</td>
                <td>$ 5.60</td>
                <td>$ 11.99</td>
                <td>12 months</td>
                <td>$ 4.00</td>         
            </tr>
            <tr>
                <td>Olay apple soaps</td>
                <td>$ 6.90</td>
                <td>$ 15.99</td>
                <td>18 months</td> 
                <td>$ 8.00</td>       
            </tr>
            <tr>
                <td>Olay anti-dandruff shampoo</td>
                <td>$ $ 6.50</td>
                <td>$ 12.59</td>
                <td>12 months</td> 
                <td>$ 5.50</td>          
            </tr>
             <tr>
                <td>Olay shampoo aloe</td>
                <td>$ 9.50</td>
                <td>$ 15.59</td>
                <td>24 months</td> 
                <td>$ 8.50</td>          
            </tr>
             <tr>
                <td>Olay softening shampoo</td>
                <td>$ 5.30</td>
                <td>$ 9.59</td>
                <td>16 months</td> 
                <td>$ 3.50</td>          
            </tr>
        </table>
    </div>

    <div id="Debtors" class="tabcontent">
        <h3><b>Debtors</b></h3>
        <table>
            <tr class="active">
               
                <td >Agent name</td>
                <td>Debt value</td>
                <td >Product</td>           
            </tr>
            <tr>
                
                <td>Moosy Nousy Ltd</td>
                <td>$ 1930</td>
                <td>Olay anti-dandruff shampoo</td>           
            </tr>
            <tr>
               
                <td>Melcomb  Sons Ltd</td>
                <td>$ 1700</td>
                <td>Olay body wash</td>           
            </tr>
            <tr>
               
                <td>Malcolm  X Ltd</td>
                <td>$ 2300</td>
                <td>Olay apple soaps</td>           
            </tr>
            <tr>
               
                <td>Geotech Co</td>
                <td>$ 890</td>
                <td>Olay softening shampoo</td>           
            </tr>

            <tr>
               
                <td>Miserable Founded</td>
                <td>$ 1195</td>
                <td>Olay shampoo aloe</td>           
            </tr>
        </table>
    </div>
    <div id="Creditors" class="tabcontent">
        <h3><b>Creditors</b></h3>
       <table>
            <tr class="active">
               
                <td >Creditor name</td>
                <td>Credit value</td>
                <td >Product</td>           
            </tr>
            <tr>
                
                <td>Moosy Nousy Ltd</td>
                <td>$ 830</td>
                <td>Olay anti-dandruff shampoo</td>           
            </tr>
            <tr>
               
                <td>Melcomb  Sons Ltd</td>
                <td>$ 890</td>
                <td>Olay body wash</td>           
            </tr>
            <tr>
               
                <td>Malcolm  X Ltd</td>
                <td>$ 810</td>
                <td>Olay apple soaps</td>           
            </tr>
            <tr>
               
                <td>Geotech Co</td>
                <td>$ 1280</td>
                <td>Olay softening shampoo</td>           
            </tr>

            <tr>
               
                <td>Miserable Founded</td>
                <td>$ 1195</td>
                <td>Olay shampoo aloe</td>           
            </tr>
        </table>
    </div>

    <div id="Fund" class="tabcontent">
        <h3><b>Fund</b></h3>
        <p>Calculating...</p> 
    </div>

    <div id="Taxes" class="tabcontent">
        <h3><b>Taxes</b></h3>
        <p>No taxes yet...</p>
    </div>
     <div id="Expences" class="tabcontent">
        <h3><b>Expences</b></h3>
        <p>Too much expences.. Going to bankrupty!</p>
    </div>



    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img class="img-responsive" src="images/logo.png" width="200px" alt="">
                        <h5>(99871) 236-89-04</h5>
                        <h5>(99871) 236-88-90</h5>
                        <p>contact@olayproduction.com</p>
                        <h5>Taraqqiyot street 14, Tashkent, Uzbekistan </h5>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-3 col-sm-3col-md-3 col-lg-3">
                        <h3>Our Team</h3>
                        <ul>
                            <li><a href="">Muslima Irmukhamedova</a></li>
                            <li><a href="">Ismoil Omiliy</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <h3>Inha University In Tashkent</h3>
                        <ul class="gallery-img">
                            <li><img src="images/inha.jpg" class="img-responsive" alt=""></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row">
                    <div class="copyright">
                        <p class="text-center">Copyright 2017 © Olay production. All rights reserved.</p>
                    </div>
            </div>
        </div>
    </footer>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>