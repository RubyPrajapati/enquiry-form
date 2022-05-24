<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enquiry form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="stylesheet" href="fulldbms.css">
<script src="fulldbms1.js"></script>

</head>
<body>
    <div class="fluid-container">
        <div class="col-lg-8">
        <h1 class="text-primary font-weight-bold">Green Advanced Manufacturing Collaborative</h1>
        <h3 class="text-dark font-weight-bold">Student Enquiery Form</h3>
        <form action="" method="post" onsubmit="return validate()">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    Username:<input type="text" name="name" placeholder="username" class="form-control" autocomplete="off" id="user"><span id="username"></span>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                   Date: <input type="data" name="date" placeholder="enter a date" class="form-control " autocomplete="off" id="date"><span id="dates"></span>
                   </div>
                   </div>
                   <div class="row">
                   <div class="col-lg-6">
                       <div class="form-group">
                   Phone-No:<input type="number" name="num" placeholder="Phone num" class="form-control" autocomplete="off" id="phone"><span id="p-num"></span>
                   </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                   Ulternate-Num: <input type="number" name="ult" placeholder="ulternate num" class="form-control" autocomplete="off" id="ulternate"><span id="ulter"></span>
                   </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-6">
                           <div class="form-group">
                   Email-Address: <input type="email" name="email" placeholder="enter a email" class="form-control" autocomplete="off" id="email"><span id="emails"></span>
                   </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="form-group">
                   Home-Address: <input type="text" name="hom" placeholder="enter a address" class="form-control" autocomplete="off" id="homes"><span id="home"></span>
                   </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-8">
                           <div class="form-group">
                   Employment Address:
                       <input type="checkbox" name="chk[]" value="part time" id="em">Part Time
                       <input type="checkbox" name="chk[]" value="full time" id="em">Full Time
                       <input type="checkbox" name="chk[]" value="part time" id="em">Unemployed
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                Company Name: <input type="text" name="com" placeholder="Comapany name" class="form-control" autocomplete="off" id="com"><span id="comp"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                Are you comapny vertern:?
                                <input type="checkbox" name="chk1" value="yes" id="check">yes
                                <input type="checkbox" name="chk1" value="No" id="check">No
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    Your English skills are:?
                                    <input type="checkbox" name="chk2" value="Beginner" id="chk">Beginner
                                    <input type="checkbox" name="chk2" value="Intermidate" id="chk">Intermidate
                                    <input type="checkbox" name="chk2" value="Advanced" id="chk">Advanced
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        Are you Eligible Work in U.S:?
                                        <input type="checkbox" name="chk3" value="Yes" id="ch">Yes
                                        <input type="checkbox" name="chk3" value="No" id="ch">No
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            Father Name: <input type="text" name="fat" placeholder="Father name" autocomplete="off" class="form-control" id="fat"><span id="fath"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            Mother Name: <input type="text" name="mot" placeholder="Mother name" autocomplete="off" class="form-control" id="mo"><span id="ma"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                Highest Degree you Have Earned:?
                                                <input type="checkbox" name="chk4" value="UG" id="ug">UG
                                                <input type="checkbox" name="chk4" value="PG" id="ug">PG
                                                <input type="checkbox" name="chk4" value="Diploma" id="ug">Diploma
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    How did you learn about program:?
                                                    <input type="text" name="pro" placeholder="program about" class="form-control" autocomplete="off" id="pro"><span id="program"></span><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <input type="submit" name="submit" value="submit" class="bg-success col-sm-1 me-5 mb-2">
            
        </form>
        </div>
    </div>
</body>
</html>
