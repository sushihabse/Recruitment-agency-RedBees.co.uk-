<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
          .con1{
                background-image: url('images/redbees2.jpg');
                width: 100%;
                height:800px;
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;
                }
        #headlin{
                text-align:center;
                padding:90px;
                margin:60px;
                font-size:50px;
                font-family:Fantasy;
        }
        #headText{
                text-align:center;
                padding:0px;
                margin:20px;
                font-size:20px;
                font-family:times;
        }
    </style>
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
        <p class="mid_text text-light" id="headlin">Team of RedBees</p>
        <p class="mid_text text-light" id="headText">Recruitment agency, We Provide Waiter / Waitress, Housekeeping <br> Breakfast Employee
            Banquet Employee</p>
    </div>
  </div>
</div>
<!--End manu bar-->


<!--Start details about Redbees(Card)-->
<div class="container d-flex justify-text-center me-5">
     <div class="row mt-5 d-flex">
         <h1 class="text-center mt-5">Our Servieces</h1>
             <div class="col-4 mt-5 ">
                 <div class="card" style="width: 18rem;">
                    <img src="images/ad1.jpg" class="card-img-top" alt="image">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
               </div>
           </div>

           <div class="col-4 mt-5">
               <div class="card" style="width: 18rem;">
                   <img src="images/ad2.jpg" class="card-img-top" alt="...">
                       <div class="card-body">
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       </div>
                   </div>
                </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/ad3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/add4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/ad5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/ad7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
         <div>
     </div>
</div>
</div>
<!--End details about Redbees-->


<div class="container">
    <div class="row">
        <div class="col-1"></div>
            <div class="col-10"><br><br>
                <h2 class="text-center mt-5">Lorem History</h2>
                    <p class="text-center mt-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis suscipit praesentium corrupti beatae est!
                        Deserunt eius praesentium explicabo rem quos corporis impedit nulla consectetur officia exercitationem omnis 
                        quas veniam sequi, nesciunt sapiente, suscipit ea distinctio non? Voluptatibus, saepe molestias? Reprehenderit 
                        accusamus sint ipsum voluptate nemo atque voluptates, in architecto cum. Ab hic similique, quaerat voluptate
                        cupiditate, architecto quos adipisci exercitationem eaque nulla quasi beatae iste pariatur in officia qui commodi 
                        obcaecati? Incidunt sit eum exercitationem enim, obcaecati, provident delectus maxime architecto reiciendis 
                        laborum, in nostrum? Accusantium Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga rem quo sapiente ut, asperiores optio accusantium blanditiis. Ullam nobis quaerat nam iste fugiat suscipit
                        recusandae quasi blanditiis eum iure voluptates quibusdam minima soluta autem, est maxime, eius adipisci commodi! Earum blanditiis ab animi adipisci ipsa fugit pariatur accusantium consequatur, 
                        delectus corrupti itaque fugiat rerum inventore cumque a magnam provident qui nemo. Enim necessitatibus beatae at saepe, minus ut voluptates dolores consequatur ex non autem deserunt quos, neque quaerat,
                        tempore sunt facilis minima voluptas sit corporis! Voluptatibus porro excepturi vero, fuga molestias velit cum ad assumenda architecto, illo neque quae cupiditate.
                        reprehenderit deserunt voluptas asperiores libero aliquid veritatis aut explicabo nisi non. Quas, sed recusandae!
                    </p>
            </div>
        <div class="col-1"></div>
    </div>
</div>

<!--Start Footer-->
<footer class="p-5 bg-dark text-light mt-5">
<div class="container">
    <div class="row">
        <div class="col-3">
            <h5 class="ms-2">Our services</h5><br>
                1: Waiter / Waitress<br> 
                2: Housekeeping <br>
                3: Breakfast Employee<br> 
                5: Banquet Employee <br>
        </div>
        <div class="col-3">
                6: Poter <br> 
                7: Kitchen Staff<br>
                8: Receptionist<br>
                9: Administrator <br>
                10: Factory Worker<br>
                Copyright by Sushihab 2022      
        </div>
        <div class="col-2">
                <br><br><br><td><br><i class="fa-solid fa-envelope ms-3 btn btn-success btn-sm"></i> info@redbees.co.uk</td>
        </div>
        <div class="col-lg-4 col-md-12 mt-2 d-block d-flex justify-content-end">
            <table>
                <tr>
                    <br><br><br><br>
                    <td><a href="" class="text-decoration-none"><i class="fa-brands fa-square-facebook fs-4 text-light"></i></a></td>
                    <td><a href="" class="text-decoration-none"><i class="fa-brands fa-twitter ms-1 fs-4 text-light"></i></a></td>
                    <td><a href="" class="text-decoration-none"><i class="fa-brands fa-instagram ms-1 fs-4 text-light"></i></a></td>
                    <td><a href="" class="text-decoration-none"><i class="fa-brands fa-linkedin ms-1 fs-4 text-light"></i></a></td>
                </tr>
            </table>
        </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--End Footer-->

</body>
</html>

    