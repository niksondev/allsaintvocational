<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Saints School of Vocational studies</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<meta name="description" content="All Saints School of Vocational studies is designed to provide vocational education, or technical skills required to perform the tasks of a particular and specific job. It is one option for students interested in practical postsecondary education and job training. All Saints School of Vocational studies typically offer relatively short, career-focused programs that quickly prepare graduates for the workforce. ">
	<meta name="author" content="Matthew Samson Philip">
    <meta name="keyword" content="Tailoring, Cattering, Baking, Food and Nutrition,Cake Making, Cooking">
    <link rel="shortcut icon" href="assets/images/allsaint.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--//icon-->
 
    <link href = "css/transcript.css" rel = "stylesheet" type = "text/css">
</head>
<body>
    <div class = "container">
        <div class ="row">
            <div class ="col-sm-2"></div>
                <div class ="col-sm-8 contact_wrap">
                        <div class ="row">
                            <div class ="col-sm-4">
                                <img src ="images/image.png" style = "width:100px;">

                            </div>
                            <div class ="col-sm-8">
                                <p style = "font-size:35px;">Transcript / Certificate</p>
                                <p style = "font-size:20px;"><a href = "verification.php" style = "text-decoration:none;"><span style = "background:orange;font-size:25px;border:2px solid red;border-radius:5px;">Click Here</span></a> to verify any of our students transcript</p>

                            </div>
                            
                        </div>
                        <form method ="POST" action ="transcript_process.php">
                                <div class ="row">
                                    <div class ="col-sm-6">
                                        <input type ="text" name ="firstname" class ="form-control" placeholder ="Firstname"><br>
            
                                    </div>
                                    <div class ="col-sm-6">
                                            <input type ="text" name ="lastname" class ="form-control" placeholder ="Lastname">
                                        
                                    </div>
                                </div>

                                <div class ="row">
                                    <div class ="col-sm-6">
                                        <input type ="text" name ="reg" class ="form-control" placeholder ="Registration No"><br>
            
                                    </div>
                                    <div class ="col-sm-6">
                                            <input type ="email" name ="email" class ="form-control" placeholder ="Email">
                                        
                                    </div>
                                </div>
                               

                                <div class ="row">
                                    <div class ="col-sm-6">
                                        <input type ="text" name ="phone" class ="form-control" placeholder ="Phone Number"><br>
            
                                    </div>
                                    <div class ="col-sm-6">
                                            <select name = "cert" class = "form-control" style = "border:2px solid grey;">
                                                <option>Certificate/Transcript</option>
                                                <option value = "CERTIFICATE"> Certificate </option>
                                                <option value = "TRANSCRIPT"> Transcript </option>
                                            </select>
                                        
                                    </div> 
                                </div>
                                <div class ="row">
                                    <div class ="col-sm-6">
                                        <input type ="text" name ="department" class ="form-control" placeholder ="Course Offered/Department"><br>
            
                                    </div>
                                    <div class ="col-sm-6">
                                            <input type ="text" name ="year" class ="form-control" placeholder ="Year of Graduation">
                                        
                                    </div>
                                </div><br>
                                <br>
                                <div class ="contact_button">
                                    <input type ="submit" name ="submit" value ="Submit">
                                </div>
                        </form>

                </div>
            <div class ="col-sm-2"></div>
        </div>
    </div>
</body>
</html>