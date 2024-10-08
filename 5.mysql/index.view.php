<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body class="container my-5">
    <h1>Query and Results</h1>

    <!-- <h2>Query String</h2> -->
    <pre><?php echo htmlspecialchars($queryString); ?></pre>

    <h2>Results</h2>
    <pre><?php echo htmlspecialchars(json_encode($results, JSON_PRETTY_PRINT)); ?></pre>
</body>
</html>