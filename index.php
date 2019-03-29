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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for ..." aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn bg-primary" type="submit">
                            <i class="fa fa-search text-light"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light" href="admin/sale.php"><i class="fas fa-check-circle"></i> Sales <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="admin/product.php"><i class="fas fa-box"></i> Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="admin/message.php"><i class="fas fa-comments"></i> Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="admin/blog.php"><i class="fas fa-blog"></i> Blog</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Content -->
    <div class="row">
        <div class="col-md-4 card mr-3 bg-light ">
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
            <div class="card-body row">
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
        <div class="col-md-4 card mr-3">
        <div class="">
            <div class="hero-unit bg-light pt-2 pb-2" id="calculator-wrapper">
                <div class="row">
                    <div class="col-md-4 bg-white">
                    <div id="calculator-screen" class="uneditable-input pl-1"></div>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                    <div class="visible-phone">
                        =
                    </div>
                    </div>
                    <div class="col-md-4 bg-white p-1">
                    <div id="calculator-result"  class="uneditable-input">0</div>
                    </div>
                </div>
            </div>

            <div class="row">

            <div class="col-md-8">
                <div id="calc-board">
                <div class="row-fluid">
                    <a href="#" class="btn btn-outline-dark" data-constant="SIN" data-key="115">sin</a>
                    <a href="#" class="btn btn-outline-dark" data-constant="COS" data-key="99">cos</a>
                    <a href="#" class="btn btn-outline-dark" data-constant="MOD" data-key="109">md</a>
                    <a href="#" class="btn btn-danger" data-method="reset" data-key="8">C</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="55">7</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="56">8</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="57">9</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-constant="BRO" data-key="40">(</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-constant="BRC" data-key="41">)</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="52">4</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="53">5</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="54">6</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-constant="MIN" data-key="45">-</a>
                    <a href="#" class="btn btn-outline-dark" data-constant="SUM" data-key="43">+</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="49">1</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="50">2</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="51">3</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-constant="DIV" data-key="47">/</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-constant="MULT" data-key="42">*</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="46">.</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-key="48">0</a>
                    <a href="#" class="btn btn-outline-dark mr-1" data-constant="PROC" data-key="37">%</a>
                    <a href="#" class="btn btn-primary" data-method="calculate" data-key="61">=</a>
                </div>
                </div>
            </div>

            <div class="col-md-4 bg-light">
                <legend class="text-center">History</legend>
                <div id="calc-panel">
                <div id="calc-history">
                    <ol id="calc-history-list"></ol>
                </div>
                </div>
            </div>
            <hr>

            </div>
            </div>
            <hr>

            <blockquote class="border-left ml-2">
                <p>
                    “
                </p>
                <p class="quote-text pl-1">
                    Don't believe anything that you read on the internet, it may be fake. 
                </p>
                <hr>
                <div>
                    <p class="pl-1">
                    Abraham Lincoln
                    </p>
                </div>
            </blockquote>
        </div>
        <div>
            <div class="alert alert-primary" role="alert">
            This is a primary alert—check it out!
            </div>
            <div class="alert alert-secondary" role="alert">
            This is a secondary alert—check it out!
            </div>
            <div class="alert alert-success" role="alert">
            This is a success alert—check it out!
            </div>
            <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
            </div>
            <div class="alert alert-warning" role="alert">
            This is a warning alert—check it out!
            </div>
            <div class="alert alert-light" role="alert">
            This is a light alert—check it out!
            </div>
            <div class="alert alert-dark" role="alert">
            This is a dark alert—check it out!
            </div>
            <div class="alert alert-warning" role="alert">
            This is a warning alert—check it out!
            </div>
            <div class="alert alert-primary" role="alert">
            This is a primary alert—check it out!
            </div>
        </div>
    </div>

    <div class="table-responsive-sm table-bordered">
        <div class="table-responsive-md">
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Discount</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Coca cola</td>
                <td>3</td>
                <td>0</td>
                <td>4.50</td>
                <td>
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Sausage </td>
                <td>2</td>
                <td>0</td>
                <td>5.00</td>
                <td>
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Verna water</td>
                <td>12</td>
                <td>0</td>
                <td>8.50</td>
                <td>
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"> <i class="fas fa-times"></i></button>
                </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <!-- End Content-->
    <br><br>
    <!-- Start Footer-->
    <div class="footer">
        <p> copyright &copy; my manager 2019 </p>
    </div>

    <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>