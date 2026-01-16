<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .form-container {
            background: #16213e;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            max-width: 450px;
            width: 100%;
            border: 2px solid #0f3460;
        }
        h1 {
            margin-bottom: 30px;
            color: #e94560;
            text-align: center;
            font-size: 2rem;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #e94560;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }
        input {
            width: 100%;
            padding: 14px;
            border: 2px solid #0f3460;
            border-radius: 10px;
            font-size: 15px;
            background: #0f3460;
            color: white;
            transition: border 0.3s;
        }
        input:focus {
            outline: none;
            border-color: #e94560;
        }
        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #e94560 0%, #c72c48 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 15px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.02);
        }
        .error {
            background: #e94560;
            color: white;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create New User</h1>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="error">Failed to create user. Please try again.</div>
        <?php endif; ?>

        <form action="/users/store" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Create User</button>
        </form>
    </div>
</body>
</html>
