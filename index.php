<?php
function getDelay($url) {
    $start_time = microtime(true);
    $response = file_get_contents($url);
    if ($response === false) {
        return "无法获取";
    }
    $end_time = microtime(true);
    $delay = ($end_time - $start_time) * 1000; // 转换为毫秒
    return $delay . " 毫秒";
}
?>
<?php echo '<!DOCTYPE html>' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            font-size: 48px;
            font-weight: bold;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            animation: fadeIn 4s forwards;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        @keyframes fadeIn {
            from {
                color: transparent;
            }
            to {
                color: #000000;
            }
        }
        .delay {
            font-size: 16px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello</h1>
        <p class="delay">延迟：<?php echo getDelay('http://154.44.25.212:6689/tv.txt'); ?></p>
    </div>
</body>
</html>