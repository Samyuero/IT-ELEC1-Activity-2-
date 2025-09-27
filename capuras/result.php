<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 8 / 23 / 2025 -->
    <meta charset="UTF-8">
    <title>Registration Result</title>
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

        .container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
            width: 450px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: left;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        p {
            margin: 10px 0;
            font-size: 15px;
        }

        strong {
            color: #fff;
        }

        .intro {
            font-style: italic;
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
    </style>
</head>

<body>
    <img src="cat.jpg" class="bg">
    <div class="container">
        <h1>USER INFORMATION</h1>
        <p class="intro">Hello, <?php echo htmlspecialchars($_POST["fname"] . " " . $_POST["lname"]); ?>!</p>

        <p><strong>Student ID:</strong> <?php echo htmlspecialchars($_POST["studentid"]); ?></p>
        <p><strong>Course:</strong> <?php echo htmlspecialchars($_POST["course"]); ?></p>
        <p><strong>Date of Birth:</strong>
            <?php echo htmlspecialchars($_POST["month"]) . " " . htmlspecialchars($_POST["day"]) . ", " . htmlspecialchars($_POST["year"]); ?>
        </p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST["gender"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></p>
    </div>
</body>

</html>