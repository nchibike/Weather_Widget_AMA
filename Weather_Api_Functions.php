
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container">
         
           <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="form-group">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-1"></div>
                <div class="col-md-5">
                   <input type="text" class="form-control" placeholder="Enter Zip Code"  name="zip" value="<?php echo $zip?>"/>
                   <?php echo $msg?>
                </div>
                <div class="col-md-4">
                   <input type="submit" value="Submit" class="form-control btn-primary"  name="submit"/>
                </div>
                      <div class="col-md-2"></div>
              </div>
           
           
       
         </form>
               </div>
                 <?php if($status=="yes"){?>
                 <div class="">
                    <div class="card-body bg-info">
                        <CENTER><img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png"/></CENTER>
                    </div>
                    <div class="card-footer bg-dark text-white" style="line-height: 18px; ">
                       <div class="row">
                         <div class="col-md-12 text-center" style="font-size: 20px">
                          <?php echo round($result['main']['temp']-273.15)?>°C
                        </div>
                        
                       
                         
                       </div>
                    </div>
                  </div>
           </div>
            <div class="col-md-2"></div>

        </div>
      <?php } ?>
  