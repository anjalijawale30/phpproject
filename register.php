<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function valid()
            {
                var pwd, pwd, number, name, lname, email, address, dateofbirth, business;
                pwd = document.form.txtpwd.value;
                confirmpwd = document.form.txtconfirm.value;
                number = document.form.txtphone.value;
                name = document.form.txtfirstname.value;
                lname = document.form.txtlastname.value;
                email = document.form.txtemail.value;
                address = document.form.txtaddress.value;
                dateofbirth = document.form.txtdateofbirth.value;
                business = document.form.txtbusiness.value;

                if (name == '')
                {
                    alert("Please Enter a First Name");
                    return false;
                }
                if (lname == '')
                {
                    alert("Please Enter a Last Name");
                    return false;
                }

                if (email == '')
                {
                    alert("Please Enter a Email Id");
                    return false;
                }
                if (address == '')
                {
                    alert("Please Enter a Address");
                    return false;
                }
                if (dateofbirth == '')
                {
                    alert("Please Enter a Date Of Birth");
                    return false;
                }
                if (business == '')
                {
                    alert("Please Enter a User Type");
                    return false;
                }


                if (number.length != 10)
                {
                    alert(" Please Enter The 10 Digits Phone Number");
                }

                if (pwd != confirmpwd)
                {
                    alert("Please Enter The Same Password");

                }

                return true;
            }

        </script>
    </head>
    <style>
        .logo {
            width:150px;
            padding-left:50px;

        }

        .main{
            width:80%;
            margin-top:50px;
            background-color: #000000CC;
            border-radius: 20px;
            height:500px;
            margin-bottom: 50px;

        }


        .img{
            margin-left:270px;
            margin-top:29px;
        }

        p{
            font-family:candara;
            font-size:25;
            color:white;
            padding-left:10px;

        }

        .email{
            background:none;
            width:100%;
            height:10%;
            color:white;
            padding:10px 0px 10px 0px;
            font-size:19;
            border:1px solid #B9B9B9;
            border-radius:7px;
            padding : 15px 0px 15px 15px ;
            outline:none;
        }
        ::placeholder {
            color: #B9B9B9;
        }

        .keep{
            color:#D4D4D4;
            font-size:17;
            padding: 20px 0px 20px 10px;
            font-family:candara;


        }

        input.largerCheckbox {
            width: 16px;
            height: 16px;
        }


        button{
            background-color:#FFBD3F;
            margin:0px 0px 10px;
            padding:10px 36px;
            font-family:robonto;
            font-size:17;
            width:524px;
            height:48px;
            color:white;
            border-radius:7px;
            border:2px solid #FFBD3F;
        }



        
    </style>

    <body style="background-image: url('b2.png');background-repeat: no-repeat;background-size: cover   ;" >
        <form name="form" action="home.html" method="post " onsubmit="return valid()" >

            <table class="main" align="center">
                <tr>
                    <td class="logo" > 
                        <img src="xmee.png" class="img">
                    </td>

                    <td width="57%" style="border-left:1px solid #B9B9B9;">
                        <table  width="40%" height="100%" style="padding-left:60px;" >

                            <tr>
                                <td style="padding-top:30px;padding-bottom:30px;">
                                    <p style="font-family: candara;"> Register For New Account </p>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="text" name="txtfirstname" placeholder="FirstName" class="email" height="48">  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="text" name="txtlastname" placeholder="LastName" class="email" height="48">  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="number" name="txtphone" placeholder="Contact No" class="email" height="48">  
                                </td>
                            </tr>


                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="email" name="txtemail" placeholder="Email" class="email" height="48">  
                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                            </tr>


                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="text" name="txtaddress" placeholder="Address" class="email" height="48" style="padding: 30px;padding-left: 15px;">  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="date" name="txtdateofbirth" placeholder="Date Of Birth" class="email" height="48"  style="color: #B9B9B9;">  
                                </td>
                            </tr>

                            <tr>
                                <td style="padding-top:10px;padding-bottom:20px;">
                                    <p style="font-size: 19px;"> What's your purpose for registration? </p>
                                </td>
                            </tr>
                            <tr>

                                <td style="padding:10 0 20px 40px;" >
                                    <input type="radio" name="txtbusiness"   ><font style="color:white;font-size: 16px;padding: 10px;font-family: candara;"> For Business</font>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <input type="radio" name="txtbusiness"  > <font style="color:white;font-size: 16px;padding: 10px;font-family: candara;">As a Customer</font> 

                            </tr>


                            <tr>
                                <td style="padding-top: 15px;">
                                    <input type="password" name="txtpwd" placeholder="Password" class="email" height="48">
                                    <i class="fa fa-eye-slash" style="font-size:20;color:#B9B9B9;position: relative;bottom:38px;left:490px;"></i>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding-top: 5px;">
                                    <input type="password" name="txtconfirm" placeholder="Confirm Password" class="email" height="48">
                                    <i class="fa fa-eye-slash" style="font-size:20;color:#B9B9B9;position: relative;bottom:38px;left:490px;"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="keep" ><input type="checkbox" class="largerCheckbox" name="checkBox" checked> Keep me logged in <a href="forget.html" style="padding-left:210px;color:#D4D4D4;"> Forgot Password </a></td>
                            </tr>

                            <tr align="center">
                                <td style="padding-top:10px;"> <button type="submit"> LOG IN </button> </td>
                            </tr>

                            <tr>
                                <td class="keep" align="center"> Don't have an account? <a href="login.html" style="color:#D4D4D4;font-size:15;" > log in </a></td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>