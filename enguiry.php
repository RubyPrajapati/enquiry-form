<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enquery form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<style>
    *{
        background-image: linear-gradient(to left,rgb(173, 173, 70),rgb(119, 90, 37));
    }
    .para1{
        line-height: 2.6; 
    }
    
</style>
<body>
    <div class="container">
        <div class="header">
            <h1 class=" para font-weight-bold">Enqery Form</h1>
            <p class="para1 font-weight-bold">please fill in your information and will the sending your order in no time</p>
            <hr>
            <form action="config.php" method="post">
             <div class="form-group">
                 <div class="col-lg-3">
                     <label class="font-weight-bold">Your Name</label>
                     <input type="text" name="name" placeholder="enter your name" class="form-control font-weight-bold" required="">   
                 </div>
             </div>
             <div class="form-group">
                <div class="col-lg-3">
                    <label class="font-weight-bold">Your email</label>
                    <input type="email" name="emails" placeholder="enter your email" class="form-control font-weight-bold" required="">   
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3">
                    <label class="font-weight-bold">Your password</label>
                    <input type="password" name="password"  placeholder="enter your password" class="form-control font-weight-bold" required="">   
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3">
                    <label class="font-weight-bold">Your contact</label>
                    <input type="number" name="num" placeholder="enter your contact" class="form-control font-weight-bold" required="">   
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3">
                    <label class="font-weight-bold">Your dob</label>
                    <input type="date" name="dob" placeholder="enter your dob" class="form-control font-weight-bold" required="">   
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3  font-weight-bold">
                Gender:
      <input type="radio" name="gender"  value="female">Female
      <input type="radio" name="gender"   value="male">Male
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-3">
                    <label class="font-weight-bold">comment</label>
                    <textarea name="textarea" name="comment" placeholder="enter your fill details" class="form-control font-weight-bold" required="">   
                </textarea>
            </div>
            <input type="submit" class="btn btn-warning mt-3 font-weight-bold" value="submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html>