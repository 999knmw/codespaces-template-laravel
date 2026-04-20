<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data - GET Method Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        .data-table tr {
            border-bottom: 1px solid #eee;
        }
        
        .data-table td {
            padding: 12px;
        }
        
        .data-table td:first-child {
            font-weight: bold;
            width: 40%;
            background: #f8f9fa;
        }
        
        .data-table td:last-child {
            color: #555;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        
        .url-info {
            margin-top: 20px;
            padding: 15px;
            background: #e7f3ff;
            border-radius: 5px;
            font-family: monospace;
            font-size: 12px;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✅ Data Received via GET Method</h1>
        
        <table class="data-table">
            <tr>
                <td>First Name:</td>
                <td>{{ $userData['first_name'] }}</td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>{{ $userData['last_name'] }}</td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td>{{ $userData['first_name'] }} {{ $userData['last_name'] }}</td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td>{{ $userData['email'] }}</td>
            </tr>
            <tr>
                <td>Age:</td>
                <td>{{ $userData['age'] }} years old</td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>{{ $userData['password'] }}</td>
            </tr>
        </table>
        
        <div style="text-align: center;">
            <a href="{{ route('form.show') }}" class="btn">← Go Back to Form</a>
            <a href="/" class="btn">🏠 Home</a>
        </div>
        
        <div class="url-info">
            <strong>📋 URL Parameters (GET Data):</strong><br>
            {{ request()->fullUrl() }}
        </div>
    </div>
</body>
</html>