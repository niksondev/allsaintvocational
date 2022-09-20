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
                            <p style = "font-size:35px;">Transcript Verification</p>
                            <p style = "font-size:20px;">Verify any of our students transcript</p><br>
                            </div>
                            <div class ="col-sm-3"></div>
                        </div>
                        <form method ="POST" action ="verification_process.php" enctype="multipart/form-data" autocomplete="on">
                        <div class ="row">
                                    <div class ="col-sm-6">
                                        <div class = "form-group">
                                            <label for = "vname" class = "float-left" style = "font-size:18px;">Verifier Fullname:</label>
                                            <input type ="text" name ="vname" id = "vname" class ="form-control" placeholder ="Enter your name" required>
                                        </div>
                                    </div>
                                    <div class ="col-sm-6">
                                        <div class = "form-group">
                                            <label for = "add" class = "float-left" style = "font-size:18px;">Verifier Address:</label>
                                            <input type ="text" name ="add" class ="form-control" id = "add" placeholder ="Enter your address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class ="row">
                                    <div class ="col-sm-6">
                                        <div class = "form-group">
                                            <label for = "phone" class = "float-left" style = "font-size:18px;">Verifier Phone Number:</label>
                                            <input type ="text" name ="phone" id = "phone" class ="form-control" placeholder ="Enter your phone number" required>
                                        </div>
                                    </div>
                                    <div class ="col-sm-6">
                                        <div class = "form-group">
                                            <label for = "email" class = "float-left" style = "font-size:18px;">Verifier Email:</label>
                                            <input type ="email" name ="email" class ="form-control" id = "email" placeholder ="Email you want us to reply to" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>

                                <div class ="row">
                                    
                                    <div class ="col-sm-6">
                                        <div class = "form-group">
                                            <label for = "name" class = "float-left" style = "font-size:18px;">Student Fullname:</label>
                                            <input type ="text" name ="sname" id = "name" class ="form-control" placeholder ="Enter the Student Fullname you want to verify" required>
                                        </div>
                                    </div>
                                    <div class ="col-sm-6">
                                        <div class = "form-group">
                                            <label for = "image" class = "float-left" style = "font-size:18px;">Upload Transcript:</label>
                                            <input type ="text" name ="image" class ="form-control" id = "image" placeholder ="Upload the transcript you want to verify" onclick="(this.type='file')" required>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <textarea class ="form-control text_wrap" name="message" maxlength="300" placeholder="Message" required></textarea><br>
                                <div class ="contact_button">
                                    <input type ="submit" name ="submit" value ="Send Transcript">
                                </div><br>
                                
                        </form>

                </div>
            <div class ="col-sm-2"></div>
        </div>
    </div>
</body>
</html>