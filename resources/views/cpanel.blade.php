<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPanel - User Dashboard</title>
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
            max-width: 800px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }
        
        .welcome {
            text-align: center;
            color: #667eea;
            margin-bottom: 30px;
            font-size: 18px;
        }
        
        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .info-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        
        .info-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .info-label {
            font-weight: bold;
            width: 150px;
            color: #555;
        }
        
        .info-value {
            color: #333;
            flex: 1;
        }
        
        .btn-logout {
            display: inline-block;
            padding: 10px 20px;
            background: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        
        .btn-home {
            display: inline-block;
            padding: 10px 20px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: 10px;
        }
        
        .features {
            margin-top: 30px;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .feature-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎛️ Control Panel (CPanel)</h1>
        <div class="welcome">Welcome to your secure dashboard!</div>
        
        <div class="info-card">
            <div class="info-title">👤 User Information</div>
            <div class="info-row">
                <div class="info-label">First Name:</div>
                <div class="info-value">{{ $user['first_name'] }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Last Name:</div>
                <div class="info-value">{{ $user['last_name'] }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Full Name:</div>
                <div class="info-value">{{ $user['first_name'] }} {{ $user['last_name'] }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Email Address:</div>
                <div class="info-value">{{ $user['email'] }}</div>
            </div>
            <div class="info-row">
                <div class="info-label">Age:</div>
                <div class="info-value">{{ $user['age'] }} years old</div>
            </div>
        </div>
        
        <div class="features">
            <div class="info-title">✨ Available Features</div>
            <div class="feature-grid">
                <div class="feature-item">📊 Dashboard Analytics</div>
                <div class="feature-item">⚙️ Settings Management</div>
                <div class="feature-item">📁 File Manager</div>
                <div class="feature-item">🔒 Security Controls</div>
            </div>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ url('/') }}" class="btn-home">🏠 Home</a>
            <a href="{{ route('logout') }}" class="btn-logout">🚪 Logout</a>
        </div>
        
        <p style="text-align: center; margin-top: 30px; color: #666; font-size: 14px;">
            🔐 This is a protected area. Only logged-in users can access this page.
        </p>
    </div>
</body>
</html>