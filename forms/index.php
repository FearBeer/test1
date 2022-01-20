<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms in php</title>
</head>
<body>
    <form style="display: flex; flex-direction: column; gap: 20px; width: 200px" action="source.php" method="POST">
        <input type="text" placeholder="email" required>
        <div >
            <input type="checkbox" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe</label>
        </div>
        <button>Send</button>
    </form>
</body>
</html>