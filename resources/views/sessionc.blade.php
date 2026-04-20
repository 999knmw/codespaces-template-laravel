<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جلسة العداد - Session Counter</title>
    <style>
        body {
            font-family: 'Tahoma', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
        }
        
        h2 {
            color: #667eea;
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .counter {
            font-size: 48px;
            color: #764ba2;
            font-weight: bold;
            margin: 20px 0;
        }
        
        .session-id {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            margin: 20px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        
        .btn-refresh {
            background: #667eea;
            color: white;
        }
        
        .btn-clear {
            background: #dc3545;
            color: white;
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        @php
            // زيادة العداد في كل زيارة
            $counter = session('page_views', 0) + 1;
            session(['page_views' => $counter]);
        @endphp

        <h2>🔢 عدد زياراتك: <span class="counter">{{ $counter }}</span></h2>
        
        <div class="session-id">
            🆔 معرف الجلسة: <strong>{{ session()->getId() }}</strong>
        </div>

        <hr>

        <div>
            <a href="{{ url('/session') }}" class="btn btn-refresh">🔄 تحديث الصفحة ← جرب تضغط هنا</a>
        </div>
        
        <div>
            <a href="{{ url('/clear-session') }}" class="btn btn-clear">🗑️ مسح الجلسة ← لتبدأ من جديد</a>
        </div>
        
        <p style="margin-top: 20px; color: #666; font-size: 14px;">
            💡 ملاحظة: العداد يزيد كل مرة تقوم فيها بتحديث الصفحة!
        </p>
    </div>
</body>
</html>