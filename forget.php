<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>

            function valid() {
                var email;
                email = document.form.txtemail.value;

                if (email == '')
                {
                    alert("Please Enter a Email Id");
                    return false;
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
            margin-top:180px;
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
    <body style="background-image: url('b2.png');" >
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
                                    <p> Recover your password </p>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:0 0 20px 0;">
                                    <input type="email" name="txtemail" placeholder="Email" class="email" height="48">  
                                </td>
                            </tr>

                            <tr align="center">
                                <td style="padding-top:10px;"> <button> SEND ME EMAIL </button> </td>
                            </tr>

                            <tr>
                                <td class="keep" align="center"> Don't have an account? <a href="register.html" style="color:#D4D4D4;font-size:15;" > Register </a></td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>