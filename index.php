
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staple | Farmer's Portal</title>
    <link rel="stylesheet" href="sstyle.css">
    <style>
        body{
            background-color: #E6EECA;
            accent-color: #3E5902;
        }

        @import url('https://fonts.googleapis.com/css2?family=Sintony:wght@400;700&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');


        .text {
            font-weight: bold;
            color: red;
            visibility: hidden;
        }

        legend {
            padding: 9px 30px;
            color: black;
            border: 1px solid black;
            font-family: 'Sintony', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 23.5576px;
            line-height: 31px;
            margin-bottom: 50px;
        }

        fieldset {
            display: grid;
            grid-gap: 10px;
            padding: 43px;
            border: 1px solid black;
        }

        input {
            background: transparent;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            padding: 2%;
            width: 100%;
        }

        form {
            max-width: 711px;
            margin-left: auto;
            margin-right: auto;
            font-family: 'Sintony', sans-serif;
        }

        ::placeholder {
            color: black;
            font-family: 'Sintony', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 23.5576px;
            line-height: 31px;
        }

        .gender-label {
            display: flex;
            justify-content: flex-start;
            gap: 40px;
            padding: 10px 0;
        }

        .radio-inline {
            display: flex;
            gap: 12%;
        }

        label {
            font-family: 'Sintony', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 23.5576px;
            line-height: 31px;
        }

        label:not(.radio-inline) {
            padding-left: 15px;
        }

        select {
            background: transparent;
            width: 60%;
            height: 51px;
            color: black;
            cursor: pointer;
            border: 1px solid black;
            padding: 10px 29px;
            font-family: 'Sintony';
            font-style: normal;
            font-weight: 400;
            font-size: 23.5576px;
            line-height: 31px;
        }

        option {
            font-family: 'Sintony';
            font-style: normal;
            font-weight: 400;
            font-size: 23.5576px;
            line-height: 31px;
        }

        button:hover {
            cursor: pointer;
            opacity: 80%;
        }

        button {
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 31px;
            text-align: center;
            font-family: 'Source Sans Pro', sans-serif;
            ;
            color: #D9C5A0;
            background: #3E5902;
            border: 1px solid #000000;
            border-radius: 66px;
            padding: 20px 30px;
            max-width: 250px;
            margin: auto;
        }

        .sp {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .sp span {
            padding-left: 5%;
        }

        input[type='checkbox'] {
            width: min-content;
            margin-top: 2%;
            transform: scale(2);
        }

        input[type='radio'] {
            transform: scale(1.5);
        }

        #firstname{
            z-index: 3;
        }

        #lastname{
            z-index: 3;
        }

        #phone{
            z-index: 3;
        }
        #phone1{
            z-index: 2;
            position: relative;
            left: -155px; 
        }
        #phone2{
            z-index: 1;
            position: relative;
            left: -375px; 
        }
        #pin{
            z-index: 3;
        }
        #pin1{
            z-index: 2;
            position: relative;
            left: -155px; 
        }
        #pin2{
            z-index: 1;
            position: relative;
            left: -375px; 
        }
        #adharcard{
            z-index: 3;
        }
        #adharcard1{
            z-index: 2;
            position: relative;
            left: -155px; 
        }
        #adharcard2{
            z-index: 1;
            position: relative;
            left: -375px; 
        }
        #firstname1{
            z-index: 2;
            position: relative;
            left: -145px;    
        }
        #lastname1{
            z-index: 2;
            position: relative;
            left: -155px;    
        }
    </style>
</head>
<body>
    <section class="portal-header">
        <img src="main-icon.svg" alt="main-icon">
        <img src="portal-main.svg" alt="portal-intro">
        <nav class="portal-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Farmer's Portal</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </section>
    <p class="portal-info">Lorem ipsum dolor sit amet. Et enim molestiae non neque illum non perspiciatis dolorem est optio molestias a delectus quaerat? Qui reprehenderit fugiat et iste doloribus et fugiat porro. Lorem ipsum dolor sit amet. Et enim molestiae non neque illum non perspiciatis dolorem est optio molestias a delectus quaerat? Qui reprehenderit fugiat et iste doloribus et fugiat porro. </p>

    <div class="container">
        <form name="myform" action="connection.php" onsubmit="return validation()" autocomplete="off" method="post">
            <fieldset>
                <legend>Fill the form below</legend>
                <div class="form-group">
                    <!-- <label for="">First Name:</label> -->
                    <input type="text" placeholder="First Name" id="first" name="firstname"><br>
                    <span id="firstname" class="text">Please fill the field</span>
                    <span id="firstname1" class="text">Only characters are allowed</span>
                </div><br>

                <div class="form-group">
                    <!-- <label for="">last Name:</label> -->
                    <input type="text" placeholder="Last Name" id="last" name="lastname"><br>
                    <span id="lastname" class="text">**Please fill the field</span>
                    <span id="lastname1" class="text">**Only characters are allowed</span>
                </div><br>

                <div class="form-group gender-label">
                    <label for="gender">Gender</label>
                    <label for="male" class="radio-inline">
                        <input type="radio" name="gender" value="Male" id="male" />Male</label>
                    <label for="female" class="radio-inline">
                        <input type="radio" name="gender" value="female" id="female" />Female</label>
                    <label for="others" class="radio-inline">
                        <input type="radio" name="gender" value="Other" id="others" />Others</label>
                        <span id="radio-btn" class="text">**please select any one</span>
                </div>

                <div class="form-group">
                    <!-- <label for="">Phone Number:</label> -->
                    <input type="text" placeholder="Phone number" id="phone-no" name="phone"><br>
                    <span id="phone" class="text">**Please fill the field</span>
                    <span id="phone1" class="text">**user must write only digits</span>
                    <span id="phone2" class="text">**user must write only 10 digits</span>
                </div><br>
                <div class="form-group">
                    <!-- <label for="">Email:</label> -->
                    <input type="email" placeholder="Email" id="email" name="email"><br>
                    <span id="emailid" class="text"></span>
                </div><br><br>

                <div class="form-group">
                    <!-- <label for="">Aadhar Card:</label> -->
                    <input type="text" placeholder="Aadhar Card" id="adhar" name="adharcard"><br>
                    <span id="adharcard" class="text">**Please fill the field</span>
                    <span id="adharcard1" class="text">**user must write only digits</span>
                    <span id="adharcard2" class="text">**user must write only 12 digits</span>
                </div><br>

                <div class="form-group">
                    <!-- <label for="">PinCode:</label> -->
                    <input type="text" placeholder="Pincode" id="pincode" name="pincode"><br>
                    <span id="pin" class="text">**Please fill the field</span>
                    <span id="pin1" class="text">**user must write only digits</span>
                    <span id="pin2" class="text">**user must write only 6 digits</span>
                </div><br>

                <div class="form-group">
                    <!-- <label for="">State:</label> <br> -->
                    <select id="" name="state" required>
                        <option>Select your state</option>
                        <option>Andhar Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Chhattisgarh</option>
                        <option>Gujrat</option>
                        <option>Goa</option>
                        <option>kerale</option>
                        <option>Odisha</option>
                    </select>
                </div><br><br>



                <div class="form-group">
                    <!-- <label for="">I am Interested In:</label> -->
                    <select id="" name="interest" required>
                        <option>I am interested in</option>
                        <option>Medicinal varities found in C.G</option>
                        <option>Bhaji's found in C.G</option>
                        <option>Latest varities</option>
                        <option>Other</option>
                    </select>
                </div><br><br>

                <div class="form-group">
                    <label class="sp"><input type="checkbox" class="check_box" id="" required><span>I agree to receive a call from a Professional within 2-3 working days.</span></label>
                </div><br>
                <button type="submit" class="submit-btn" name="register">Register</button>
            </fieldset>
        </form>
    </div>
    <script src="index.js"></script>
    <section class="footer" style="margin-top: 5%;">
        <img src="main-icon.svg" alt="icon">
        <div>
            <a href="#header">back to top.</a>
            <a href="#header">back home.</a>
        </div>
    </section>
</body>
</html>