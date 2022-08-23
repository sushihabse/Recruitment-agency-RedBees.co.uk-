<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
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

    

    <!---Contact form Start-->   
    <h4 class="text-center mt-5">Let's Talk</h4>
        <form action="#">
            <div class="row justify-content-center">
                <div class="col-5">
                    <label for="name" class="mb-2">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Full Name" aria-label="First name">
                </div>
                <div class="col-5">
                    <label for="email" class="mb-2">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" aria-label="Last name">
                </div>
                <div class="col-10">
                    <label for="email" class="mb-2"></label>
                    <textarea type="areatext" class="form-control" id="email" rows="5" placeholder="How can I help you type here" aria-label="Last name"></textarea>
                </div>
                <div class="col-3">
                    <label for="email" class="mb-2 text-info"></label>
                    <input type="submit" class="form-control text-center text-primary mb-5" id="email" value="Send Message" aria-label="Last name">
                </div>
            </div>
        </form>
</div>
    <!--Contact form Start-->
        

    <!--Start Footer-->
    @include('include.footer')
    <!--End Footer-->
   
    

    <!--Start Js link-->
    @include('include.js')
    <!--Start Js link-->
    
        
</body>
</html>