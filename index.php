<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Shop Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="#">MY SHOP MANAGER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            <i class="fa fa-bars text-light"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for ..." aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn bg-primary" type="button">
                            <i class="fa fa-search text-light"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="pl-0">
                <li class="text-white font-weight-bold">
                    <span>
                        <span>
                            <!--<i class="fa fa-user p-2 "></i>-->
                        </span>  
                         Record all transactions here
                    </span>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Content -->
    <div class="row mt-0 mb-0">
        <div class="col-md-4 card bg-light ">
            <img class="card-img-top" src="assets/business.png" alt="sales image cap">
            <div class="card-body">
                <h5 class="card-title">Record Sales</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <form>
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">Product: </div>
                                </div>
                                <input type="text" style="width: 60%;" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter Product name...">
                            </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="list-group-item">
                    <form>
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">Quantity: </div>
                                </div>
                                <input type="number" style="width: 60%;" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter Quantity bought...">
                            </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="list-group-item">
                    <form>
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">Amount: </div>
                                </div>
                                <input type="number" style="width: 60%;" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter Amount bought...">
                            </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="list-group-item">
                    <form>
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">Discount: </div>
                                </div>
                                <input type="number" style="width: 60%;" class="form-control" id="inlineFormInputGroupUsername" placeholder=" Enter Discount on product...">
                            </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
            <div class="card-body row mb-0 mt-0">
                <div class="col-auto my-1">
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
                <div class="col-auto my-1">
                    <button type="button" class="btn btn-primary">Reset</button>
                </div>
                <div class="col-auto my-1">
                    <button type="button" class="btn btn-primary">Undo All</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">                
                <form name="calculator" class="calc mb-3">         
                    <input type="text" class="calctext" name="answer" />
                    <br>
                    
                    <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
                    <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
                    <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
                    <input type="button" class="signb" value=" + " onclick="calculator.answer.value += '+'" />
                    <br/>
                    
                    <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
                    <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
                    <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
                    <input type="button" class="signb" value=" - " onclick="calculator.answer.value += '-'" />
                    </br>
                
                    <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
                    <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
                    <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
                    <input type="button" class="signb" value=" x " onclick="calculator.answer.value += '*'" />
                    </br>

                    <input type="button" value=" c " onclick="calculator.answer.value = ''" />
                    <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
                    <input type="button" class="signbe" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
                    <input type="button"  class="signb" value=" / " onclick="calculator.answer.value += '/'" />
                    </br>
                </form>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hi Prince!</strong>  A simple success alert—check it out!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        </div>
        
        <!-- Start Table -->
        <div class="col-md-5 ">
            <div class="table-responsive-sm table-bordered">
                <div class="table-responsive-md">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Coca cola</td>
                        <td>3</td>
                        <td>4.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Sausage </td>
                        <td>2</td>
                        <td>5.00</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Verna water</td>
                        <td>12</td>
                        <td>8.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Coca cola</td>
                        <td>3</td>
                        <td>4.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Sausage </td>
                        <td>2</td>
                        <td>5.00</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Verna water</td>
                        <td>12</td>
                        <td>8.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                         <tr>
                        <td>Coca cola</td>
                        <td>3</td>
                        <td>4.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Sausage </td>
                        <td>2</td>
                        <td>5.00</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Verna water</td>
                        <td>12</td>
                        <td>8.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <td>Verna water</td>
                        <td>12</td>
                        <td>8.50</td>
                        <td class="p-1">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Table -->
    </div>
    <!-- End Content-->
    <br><br>
    <!-- Start Footer-->
    <div class="footer">
        <p> copyright &copy; my manager 2019 </p>
    </div>

    <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>