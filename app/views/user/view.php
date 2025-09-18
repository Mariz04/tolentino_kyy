<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #000000, #0f2027, #203a43, #2c5364);
            margin: 0;
            padding: 20px;
            color: #e0f7ff;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0px 0px 8px rgba(0,191,255,0.8);
            color: #00bfff;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 20px rgba(0,191,255,0.6);
            border-radius: 15px;
            overflow: hidden;
            background: #0d1117;
            color: #e0f7ff;
        }

        th, td {
            padding: 15px 20px;
            text-align: center;
        }

        th {
            background: linear-gradient(135deg, #00bfff, #1e90ff);
            color: white;
            font-size: 18px;
            text-shadow: 0 0 6px rgba(0,0,0,0.4);
        }

        tr {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        tr:nth-child(even) {
            background: #111827;
        }

        tr:nth-child(odd) {
            background: #0d1117;
        }

        tr:hover {
            transform: scale(1.02);
            box-shadow: 0px 0px 15px rgba(0,191,255,0.6);
            background: #112233;
        }

        a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            transition: 0.3s;
        }

        a[href*="update"] {
            background: #00bfff;
            color: white;
            box-shadow: 0 0 10px rgba(0,191,255,0.6);
        }

        a[href*="update"]:hover {
            background: #1e90ff;
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(0,191,255,1);
        }

        a[href*="delete"] {
            background: #ff4d6d;
            color: white;
            box-shadow: 0 0 10px rgba(255,77,109,0.6);
        }

        a[href*="delete"]:hover {
            background: #d6336c;
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(255,0,102,0.8);
        }

        .create-btn {
            background: linear-gradient(135deg, #00bfff, #1e90ff);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 0 15px rgba(0,191,255,0.6);
            transition: all 0.3s ease;
            display: inline-block;
        }

        .create-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(0,191,255,1);
        }

        .btn-container {
            width: 80%;
            margin: 0 auto 30px auto;
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>Welcome to User Page</h1>
    
    <div class="btn-container">
        <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create New User</a>
    </div>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['email']; ?></td>
                <td>
                    <a href="<?= site_url('user/update/'.$user['id']); ?>">Edit</a> |
                    <a href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
