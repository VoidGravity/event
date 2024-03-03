<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>
<body>
    <div style="text-align: center; padding: 20px;">
        <h4>Click the button below to reset your password</h4>
        <!-- Ensure you generate the URL dynamically to include the reset token -->
        <a href="{{url('password/reset/'.$token)}}" class="button">Reset Password</a>
        <p>You will be redirected to a secure page to choose a new password.</p>
    </div>
</body>
</html>
