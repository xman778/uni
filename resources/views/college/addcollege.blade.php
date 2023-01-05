<!DOCTYPE html>
<html lang="en">
        <base href="/public" >
    <head>
    
       @include('uni.unicss')
    
    </head>
    
    <body id="page-top">
    

        <div id="wrapper">

           @include('uni.sidebar')
        


            @include('uni.header')




    
        

        
            <div class="container-fluid">


              
      <div class="container">
        <form class="card-body cardbody-color p-lg-5" action="{{route('add.college')}}" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="text-center">
             <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
               width="200px" alt="profile">
           </div>

           <div class="mb-3">
             <input type="text" class="form-control"  name="name" required aria-describedby="nk name"
               placeholder="college name">
  
             </div>
             <div class="mb-3">
               <input type="text" class="form-control"  name="description" required aria-describedby="description "
                 placeholder=" description">
    
               </div>
    
             <div class="">
               <button style=" padding:10px;background:teal;color:white; " type="submit"
               >add</button>
             </div>                
         </form>
 </div>    
 <table  class="table table-dark text-center">
    <thead>
      <tr>
        <th scope="col">colleges</th>
        <th scope="col">description</th>
        <th scope="col">operation</th>

      </tr>
    </thead>   
        @foreach ($co as $co)
            
                   
        <tbody class="text-center">
        <tr>                
          <th>{{$co->collegename}}</th>
          <th>{{$co->description}}</th>
          <th><a href="{{route('deletecollege',$co->id)}}" class="btn btn-danger">delete</a></th>
      </tr>
      @endforeach  
    </tbody>
</table>

            
                <div class="row">
            
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->

                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->

                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">

                            </div>
                        </div>
                    </div>

                   
                </div>
            
                
            
            </div>

            
            </div>








         
        </div>

      
    @include('uni.unijs')
    </body>
    
</html>