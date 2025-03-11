<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .form-group {
            margin: 15px 0;
        }

        .radio-group, .checkbox-group {
            display: flex;
            gap: 20px;
            margin: 10px 0;
        }

        .radio-group label, .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .group-label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="/submit" method="post">
        @csrf
        <h2 style="text-align: center; color: #333;">Registration Form</h2>
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        
        <div class="form-group">
            <span class="group-label">Gender:</span>
            <div class="radio-group">
                <label>
                    <input type="radio" name="gender" value="male" required>
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female" required>
                    Female
                </label>
                <label>
                    <input type="radio" name="gender" value="other" required>
                    Other
                </label>
            </div>
        </div>

        <div class="form-group">
            <span class="group-label">Interests:</span>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="interests[]" value="sports">
                    Sports
                </label>
                <label>
                    <input type="checkbox" name="interests[]" value="music">
                    Music
                </label>
                <label>
                    <input type="checkbox" name="interests[]" value="reading">
                    Reading
                </label>
            </div>
        </div>

        <div class="form-group">
            <span class="group-label">Experience Level:</span>
            <div class="radio-group">
                <label>
                    <input type="radio" name="experience" value="beginner" required>
                    Beginner
                </label>
                <label>
                    <input type="radio" name="experience" value="intermediate" required>
                    Intermediate
                </label>
                <label>
                    <input type="radio" name="experience" value="advanced" required>
                    Advanced
                </label>
            </div>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>