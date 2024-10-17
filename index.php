<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>input page</title>
</head>
<body>
    <div class="container"> 
    <h2>hw Omar Dib 10220517</h2>
    <form action="display.php" method="POST" class="input-form">
        <label for="field-1">field 1:</label>
        <input type="text" class="field-1" name="field-1" required>
        <label for="field-2">field 2:</label>
        <input type="text" class="field-2" name="field-2" required>
        <label for="field-3">field 3:</label>
        <input type="text" class="field-3" name="field-3" required>
        <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>