<div class="container mt-2">
 
    <div class="row">
       @foreach ($properties as $property )
              
              
              <div class="col-12 col-md-6 col-lg-4 col-xl-3  mb-2 ">
                
                     <x-property-item :property="$property" />
              
              </div>     
              
       @endforeach

 </div>
</div>
