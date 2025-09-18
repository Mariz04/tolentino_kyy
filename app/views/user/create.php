<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Create</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #000000, #0f2027, #203a43, #2c5364);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #e0f7ff;
        }

        .form-container {
            background: #0d1117;
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 191, 255, 0.6);
            width: 360px;
            animation: fadeIn 0.6s ease-in-out;
            border: 2px solid #00bfff;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            color: #00bfff;
            text-shadow: 0px 0px 8px rgba(0, 191, 255, 0.8);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            color: #87cefa;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #00bfff;
            border-radius: 12px;
            outline: none;
            transition: 0.3s;
            font-size: 15px;
            background: #111827;
            color: #e0f7ff;
            box-shadow: inset 0px 0px 8px rgba(0,191,255,0.3);
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #1e90ff;
            box-shadow: 0px 0px 12px rgba(30,144,255,0.8);
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #00bfff, #1e90ff);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(0,191,255,0.7);
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #1e90ff, #00bfff);
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(0,191,255,1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create New User</h1>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <input type="submit" value="Create User">
        </form>
    </div>
</body>
</html>
