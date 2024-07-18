<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="form1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script>
            function validate()
            {
                var email, pwd;
                email = document.form.txtemail.value;
                pwd = document.form.txtpwd.value;

                if (email == '')
                {
                    alert("Please enter a valid email");
                    return false;

                }

                if (pwd == '')
                {
                    alert("Please enter a valid password");
                    return false;
                }

                return true;
            }

        </script>
        <style>


            ::-ms-reveal {
                filter: invert(100%);
               position: relative;
               right:20px;
                width:20px;
            }
            .logo {
                width:150px;
                padding-left:50px;

            }

            .main{
                width:80%;
                margin-top:120px;
                background-color: #000000CC;
                border-radius: 20px;
                height:300px;

            }


            .img{
                margin-left:270px;
                margin-top:29px;
            }

            p{
                font-family:candara;
                font-size:25;
                color:white;
                padding-left:8px;

            }

            .email{
                background:none;
                width:100%;
                height:10%;
                color:white;
                padding:10px 0px 10px 0px;
                font-size:20;
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




            .button{
                background-color:#FFBD3F;
                margin:0px 0px 10px;
                padding:5px 36px;
                font-family:robonto;
                font-size:25;
                width:524px;
                height:48px;
                color:white;
                border-radius:7px;
                border:2px solid #FFBD3F;
            }


        </style>

    </head>

    <body style="background-image: url('b2.png') ;background-repeat: no-repeat;background-size: cover   ;">
        <form name="form" action="hom.html" method="post" onsubmit="return validate()">


            <table class="main" align="center">
                <tr>
                    <td class="logo" > 
                        <img src="xmee.png" class="img">
                    </td>

                    <td width="57%" style="border-left:1px solid #B9B9B9;">
                        <table  width="40%" height="100%" style="padding-left:60px;" >

                            <tr>
                                <td style="padding-top:30px;padding-bottom:30px;">
                                    <p> Login into your account </p>
                                </td>
                            </tr>



                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="text" name="txtemail"  class="email" height="48" placeholder="Email">  
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="password" name="txtpwd"  class="email" height="48" placeholder="**********" style="color:white;">
                                    <!--<i class="fa fa-eye-slash" style="font-size:20;color:#B9B9B9;position:relative;bottom:38px;left:490px;"></i>-->
                                </td>
                            </tr>

                            <tr>
                                <td class="keep" ><input type="checkbox" class="largerCheckbox" name="checkBox" checked> Keep me logged in <a href="forget.html" style="padding-left:210px;color:#D4D4D4;"> Forgot Password </a></td>
                            </tr>

                            <tr align="center">
                                <td style="padding-top:10px;"><input type="submit" value="submit" class="button">  </td>
                            </tr>

                            <tr>
                                <td class="keep" align="center"> Don't have an account? <a href="register.html" style="color:#D4D4D4;font-size:15;" > Sign Up </a></td>
                            </tr>


                        </table>

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>