<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', monospace;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 3rem;
            min-height: 100vh;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        h1 {
            color: white;
            font-size: 3rem;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-left: 5px solid #667eea;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .username {
            font-size: 1.5rem;
            font-weight: bold;
            color: #764ba2;
            margin-bottom: 0.8rem;
            text-transform: uppercase;
        }

        .email {
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 1.2rem;
            font-style: italic;
        }

        .created-at {
            color: #777;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }

        button {
            padding: 0.8rem 1.5rem;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        button:hover {
            background: #764ba2;
        }

        .add-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
        }

        .add-btn button {
            padding: 1.2rem 2rem;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <div class="cards">
            <?php $all = $all ?? []; ?>
            <?php foreach($all as $user): ?>
                <div class="card">
                    <div class="username"><?= htmlspecialchars($user['username']) ?></div>
                    <div class="email"><?= htmlspecialchars($user['email']) ?></div>
                    <div class="created-at"><?= htmlspecialchars($user['created_at']) ?></div>
                    <form method="GET" action="/test/<?= $user['id'] ?>">
                        <button type="submit">Update</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <form method="GET" action="/users/new" class="add-btn">
        <button type="submit">GOO!!!</button>
    </form>
</body>
</html>
