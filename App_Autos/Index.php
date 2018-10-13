<!DOCTYPE html>
<html lang="en">
<head>
  <title>App | Autos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script language="JavaScript" type="text/javascript" src="jquery-3.1.1.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="scripts.js"></script>
 
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<body>
  

</section>
 

 <!--menu de opciones-->
 
                  <div class="accordion" class="col-sm-4" style="align-content:left" >
                        <section class="accordion-item">
                            <h1>Rango de Precios <i class="fas fa-dollar-sign"></i></h1>
                            <div class="accordion-item-content">
                              <p>  
                                
                                
<ul class="a">
    <li> 
                                <label>$40,000 - $50,000 Mxn
                                    <input type="checkbox" id="40-50" value="40,000-50,000">
                                   </label></li>
    <li> 
                                  <label>$30,000 - $40,000 Mxn
                                    <input type="checkbox" id="30-40" value="30,000-40,000">
                                  </label></li>
                                  <li> 
                                  <label>$20,000 - $30,000 Mxn
                                    <input type="checkbox" id="20-30" value="20,000-30,000">
                                  </label></li>

    <li>                          </label>$10,000 - $20,000 Mxn
                                    <input type="checkbox" id="10-20" value="10,000-20,000">
                                  </label></li>
   <li> 
                                  <label>$1,000 - $10,000 Mxn 
                                    <input type="checkbox" id="1-10" value="1,000-10,000">
                                </label></li>
  </ul>
                               
                                   
                                
                                 
                              
                               
                                </p>
                            </div>
                        </section>

                        <section class="accordion-item">
                            <h1>Marca <i class="fas fa-car"></i></h1>
                            <div class="accordion-item-content">
                                    <label>Ford
                                            <input type="checkbox" id="ford" value="ford">
                                            
                                          </label>
                                          <label class="container">Chevrolet
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                          </label>
                                          <label class="container">Nissan
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                          </label>
                                          <label class="container">Kia
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                          </label>
                            </div>
                        </section>
                        <section  class="accordion-item accordion-item--default">
                            <h1>Año&nbsp;<i class="fas fa-search-dollar"></i></h1>
                            <div class="accordion-item-content">
                              <p>
                                    <ul style="list-style-type:none">
                                      <li>2019</li>
                                      <li>2018</li>
                                      <li>2017</li>
                                      <li>2016</li>
                                      <li>2015</li>
                                      <li>2014</li>
                                    </ul>  
                                    .</p>
                            </div>
                        </section>
                        <section class="accordion-item">
                            <h1>Transmision&nbsp;<i class="fas fa-cogs"></i></h1>
                            <div class="accordion-item-content">
                              <p>
                                    <ul style="list-style-type:none">
                                      <li>Automatico</li>
                                      <li>Manual</li>
                                
                                            <li>Electrico</li>
                                            <li>Hibrido</li>
                                          </ul>  
                                      
                                    </ul>  </p>
                            </div>
                        </section>
                    </div>
                   
               
               
           
                    <div class="contenedor" class="col-sm-4"><p id="cont"></p>
                       
                            </div>
                            
        

        <table class="tableinfo">
         
          
                         
                                                    
          <td> <?php include 'functions.php';?></td>
          
        </table> 

          
                                            
                          
                                                    
                                                


</body>
</html>


