<!DOCTYPE html>
<html>
<head>
    <title>Student Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top left, #2d0b52, #0f0323 70%);
            overflow: hidden;
            position: relative;
        }

        /* Floating glow orbs */
        body::before, body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.5;
            z-index: 0;
        }
        body::before {
            width: 350px; height: 350px;
            background: #9b30ff;
            top: -80px; left: -80px;
        }
        body::after {
            width: 300px; height: 300px;
            background: #6a11cb;
            bottom: -60px; right: -60px;
        }

        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 60px 50px;
            box-shadow: 0 8px 40px rgba(0,0,0,0.5);
            max-width: 480px;
        }

        .badge {
            display: inline-block;
            background: linear-gradient(135deg, #a259ff, #6a11cb);
            color: #fff;
            font-size: 12px;
            letter-spacing: 2px;
            padding: 6px 16px;
            border-radius: 20px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        h1 {
            font-size: 32px;
            background: linear-gradient(135deg, #d6b3ff, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 12px;
        }

        p.desc {
            color: #cbb8e8;
            font-size: 15px;
            margin-bottom: 35px;
            line-height: 1.5;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #a259ff, #6a11cb);
            color: #fff;
            box-shadow: 0 4px 20px rgba(162, 89, 255, 0.5);
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(162, 89, 255, 0.7);
        }

        .btn-outline {
            background: transparent;
            color: #d6b3ff;
            border: 1px solid rgba(214, 179, 255, 0.5);
        }
        .btn-outline:hover {
            background: rgba(214, 179, 255, 0.1);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <span class="badge">Student Portal</span>
        <h1>Welcome to My Student Page</h1>
        <p class="desc">Explore my student profile, achievements, and personal information — all in one place.</p>
        <div class="btn-group">
            <a href="<?= site_url('student'); ?>" class="btn btn-outline">Home</a>
            <a href="<?= site_url('student/profile'); ?>" class="btn btn-primary">View Profile</a>
        </div>
    </div>
</body>
</html>