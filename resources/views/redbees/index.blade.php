<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!--start css link-->
    @include('include.style')
    <!--end css link-->

</head>
<body>
<!--Top bar strat-->
<div class="container-fluid con1 mb-5">
     <div class="row bg-dark text-light p-2">
         <div class="col-lg-3 col-md-12 ms-12 text-center mt-2 mb-2 ms-5">
             <table>
                 <tr>
                    <td><i class="fa-solid fa-envelope ms-3 btn btn-success btn-sm"></i> info@redbees.co.uk</td>
                 </tr>
             </table>
         </div>

        <div class="col-4">
        </div>

        <div class="col-lg-4 col-md-12 mt-2 d-flex justify-content-end">
            <table>
                <tr>
                    <td><a href="" class="text-decoration-none text-light me-2"><i class="fa-solid fa-right-to-bracket btn btn-success btn-sm"></i> Login</a></td>
                    <td><a href="" class="text-decoration-none text-light ms-2"><i class="fa-solid fa-user btn btn-success btn-sm"></i> Registration</a></td>    
                </tr>
            </table>
        </div>
    </div>
    <!--End Top bar-->


    <!--Start menu bar-->
    <div class="row mt-3">
         <div class="col-2">
         </div>

         <!--Menu bar-->
         @include('include.manubar')      
         <!--End bar-->  

          <div class="col-2">
          </div>
    </div>
    <div>
        <p class="mid_text text-light">Team of Professional Web Application Developer</p>
    </div>
</div>
<!--End manu bar-->


<!--Start Card-->
<div class="bg-image"></div>
    <div class="bg-text">
        <h2>Welcome Guys</h2>
        <h1 style="font-size:50px">I'm Shihab</h1>
        <p>And I'm a Professional Web Application Developer</p>
    </div>
<!--Card end-->

<br>
<br>
<br>
<br>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-3 mt-5"></div>
               <div class="col-6 mt-5">
                    <h1 class="mt-5">We can Develop Your Dream</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iure aliquid quisquam reprehenderit sed dolores,
                    corporis deserunt, et harum dolor nisi voluptate a adipisci laboriosam similique unde eaque nesciunt, amet tempore id porro. 
                    Harum voluptate est culpa animi iste, deserunt aspernatur neque sed quae? Eum natus fuga ullam perferendis quas voluptates tenetur
                 
                </div>
            <div class="col-3"></div>
        </div>
    </div>
   
   

    <!--Start Carousel-->
    <div class="container">
        <div class="row mt-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                    <div class="carousel-item">
                        <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
    </div>
    <!--End Carousel-->


    <!--Card start-->
    <div class="row mt-5">
         <h2 class="text-center mt-5">Our services</h2>
             <div class="card-group me-4 ms-4 mt-2">
                 <div class="card me-3 mt-5">
                     <img src="images/ad3.jpg" class="card-img-top " alt="image">
                         <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                         </div>
                         <div class="card-footer">
                             <small class="text-muted">Last updated 3 mins ago</small>
                         </div>
                     </div>
                <div class="card me-3 mt-5">
                    <img src="images/ad7.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, in? This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card me-3 mt-5">
                    <img src="images/ad5.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                    <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
    <!--End Card-->


    <!--Start Footer-->
    @include('include.footer')
     <!--End Footer-->

      <!--Start Js link-->
      @include('include.js')
    <!--Start Js link-->


</body>
</html>