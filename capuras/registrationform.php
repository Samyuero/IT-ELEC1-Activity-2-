<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1e1e1e, #2b2b2b, #3a3a3a);
            color: #fff;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
            width: 400px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            color: #fff;
            letter-spacing: 1px;
        }

        .input-group {
            margin-bottom: 18px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: none;
            outline: none;
            background: #2b2b2b;
            color: #fff;
            font-size: 14px;
            transition: background 0.3s, transform 0.2s;
        }

        .input-group input::placeholder {
            color: #aaa;
        }

        .input-group input:focus,
        .input-group select:focus {
            background: #3a3a3a;
            transform: scale(1.02);
            border: 1px solid #555;
        }

        .name-group {
            display: flex;
            gap: 10px;
        }

        .dob-group {
            display: flex;
            gap: 10px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #000;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
        }

        button:hover {
            background: #fff;
            color: #000;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            font-size: 13px;
            color: #ccc;
        }

        .remember-me input {
            margin-right: 6px;
        }

        .login-link a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: #aaa;
        }

        .bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <img src="cat.jpg" class="bg">
    <div class="form-container">
        <h2>REGISTRATION FORM</h2>
        <form action="result.php" method="POST">
            <div class="input-group name-group">
                <input type="text" name="fname" placeholder="Firstname" required>
                <input type="text" name="lname" placeholder="Lastname" required>
            </div>
            <div class="input-group">
                <input type="number" name="studentid" placeholder="Student ID" required>
            </div>
            <div class="input-group">
                <select id="course" name="course" required>
                    <option value="" disabled selected>Course</option>
                    <option value="Nursing">Nursing</option>
                    <option value="Marine Transportation">Marine Transportation</option>
                    <option value="Marine Engineering">Marine Engineering</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Electronics and Communications Enginnering">Electronics and Communications
                        Enginnering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Industrial Engineering">Industrial Engineering</option>
                    <option value="Elementary Education (BEEd)">Elementary Education (BEEd)</option>
                    <option value="Secondary Education (BSEd)">Secondary Education (BSEd)</option>
                    <option value="Criminology">Criminology</option>
                    <option value="Commerce">Commerce</option>
                    <option value="Accountancy">Accountancy</option>
                    <option value="Hotel and Restaurant Management">Hotel and Restaurant Management</option>
                    <option value="Customs Administration">Customs Administration</option>
                    <option value="Computer Secretarial">Computer Secretarial</option>
                </select>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-group dob-group">
                <select id="month" name="month" required>
                    <option value="" disabled selected>Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>

                <select id="day" name="day" required>
                    <option value="" disabled selected>Day</option>
                    <?php for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='$i'>$i</option>";
                    } ?>
                </select>

                <select id="year" name="year" required>
                    <option value="" disabled selected>Year</option>
                    <?php
                    $currentYear = date("Y");
                    for ($y = $currentYear; $y >= 1900; $y--) {
                        echo "<option value='$y'>$y</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="input-group">
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <button type="submit">Register</button>
            <div class="options">
                <div class="remember-me">
                    <input type="checkbox" id="remember-me-checkbox">
                    <label for="remember-me-checkbox">Remember me</label>
                </div>
                <div class="login-link">
                    <p>Already have an account? <a href="#">Login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>