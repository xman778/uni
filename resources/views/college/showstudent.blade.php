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
                    <form class="card-body cardbody-color p-lg-5" action="{{route('addstudent')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="text-center">
                         <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                           width="200px" alt="profile">
                       </div>
            
                       <div class="mb-3">
                         <input type="text" class="form-control"  name="name" required aria-describedby="nk name"
                           placeholder="name">
              
                         </div>
                         <div class="mb-3">
                           <input type="text" class="form-control"  name="national_id" required aria-describedby="description "
                             placeholder="national_id">
                
                           </div>
                           <div class="mb-3">
                            <select required type="text" class="form-control"  name="college" >
                                                  
                                @foreach($college as $category)
                                        
                                         <option value="{{$category->id}}">{{$category->collegename}}</option>
                                 @endforeach
                                </select>
                           </div>
                           <div class="mb-3">
                            <select required type="text" class="form-control"  name="stage" >
                                                  
                                @foreach($xx as $x)
                                        
                                         <option value="{{$x->id}}">{{$x->stage}}</option>
                                 @endforeach
                                </select>
                           </div>
                         <div class="mb-3">
                         <input type="text" class="form-control"  name="age" required aria-describedby="description "
                             placeholder="age">
                
                           </div>
                           <div class="mb-3">
                           <input type="text" class="form-control"  name="address" required aria-describedby="description "
                           placeholder="address">
              
                         </div>
                         <div class="mb-3">
                         <input type="text" class="form-control"  name="phonenumber" required aria-describedby="description "
                         placeholder="phone number">
            
                       </div>
                       <div class="mb-3">
                       <input type="text" class="form-control"  name="homenumber" required aria-describedby="description "
                       placeholder="home number">
          
                     </div>
                         <div class="">
                           <button style=" padding:10px;background:teal;color:white; " type="submit"
                           >add</button>
                         </div>                
                     </form>
             </div>    
            
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