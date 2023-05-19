<?php

function component($propertytype,$propertyimg,$price,$zone,$city, $district,$bed,$bath,$kitchen){
   $element="<div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
   <div class='property-item rounded overflow-hidden'>
       <div class='position-relative overflow-hidden'>
           <a href=''><img class='img-fluid' src='$propertyimg' alt=''></a>
           
           <div class='bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3'>$zone</div>
       </div>
       <div class='p-4 pb-0'>
           <h5 class='text-primary mb-3'>Rs. $price</h5>
           <a class='d-block h5 mb-2' href=''>$propertytype</a>
           <p><i class='fa fa-map-marker-alt text-primary me-2'></i>$city, $district</p>
       </div>
       <div class='d-flex border-top'>
       
       <small class='flex-fill text-center border-end py-2'><i class='fa fa-bed text-primary me-2'></i>$bed Bed</small>
       <small class='flex-fill text-center border-end py-2'><i class='fa fa-home text-primary me-2'></i> $kitchen Kitchen</small>
           <small class='flex-fill text-center py-2'><i class='fa fa-bath text-primary me-2'></i>$bath Bath</small>
           
       </div>
   </div>
</div>";
    
   echo $element;
}



?>