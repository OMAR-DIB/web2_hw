<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display page</title>
</head>

<body>
    <?php
    function sanitizeInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (isset($_POST["field-1"]) && isset($_POST["field-2"]) && isset($_POST["field-3"])) {
        $firstField = sanitizeInput($_POST['field-1']);
        $secondField = sanitizeInput($_POST['field-2']);
        $thirdField = sanitizeInput($_POST['field-3']);
    }
    echo <<<EOF
        <div class="container">
        <select class="items">
            <option value=" $firstField "> $firstField </option>
            <option value=" $secondField "> $secondField </option>
            <option value=" $thirdField "> $thirdField </option>
        </select>
        </div>
        EOF;
    ?>
</body>
</html>