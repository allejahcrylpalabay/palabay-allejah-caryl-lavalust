<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top left, #2d0b52, #0f0323 70%);
            position: relative;
        }

        body::before, body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.45;
            z-index: 0;
        }
        body::before {
            width: 300px; height: 300px;
            background: #9b30ff;
            top: -80px; right: -80px;
        }
        body::after {
            width: 260px; height: 260px;
            background: #6a11cb;
            bottom: -60px; left: -60px;
        }

        .card {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 22px 28px;
            width: 100%;
            max-width: 440px;
            max-height: 96vh;
            box-shadow: 0 8px 40px rgba(0,0,0,0.5);
        }

        .avatar {
             width: 120px;
             height: 120px;
             border-radius: 50%;
             margin: 0 auto 15px;
             display: block;
             object-fit: cover;
             border: 3px solid rgba(214, 179, 255, 0.5);
             box-shadow: 0 4px 20px rgba(162, 89, 255, 0.5);
        }

        h1 {
            text-align: center;
            font-size: 20px;
            background: linear-gradient(135deg, #d6b3ff, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 3px;
        }

        .subtitle {
            text-align: center;
            color: #cbb8e8;
            font-size: 11px;
            font-style: italic;
            margin-bottom: 12px;
            padding: 0 6px;
            line-height: 1.3;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(214,179,255,0.4), transparent);
            margin: 10px 0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .info-item {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 10px;
            padding: 6px 10px;
        }

        .info-item.full {
            grid-column: 1 / -1;
        }

        .info-label {
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #a887d6;
            margin-bottom: 2px;
        }

        .info-value {
            font-size: 12px;
            color: #f0e8ff;
            font-weight: 500;
            word-break: break-word;
            line-height: 1.3;
        }

        .socials {
            margin-top: 12px;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .socials a {
            text-decoration: none;
            color: #d6b3ff;
            font-size: 11px;
            font-weight: 600;
            padding: 5px 12px;
            border: 1px solid rgba(214,179,255,0.4);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .socials a:hover {
            background: rgba(214,179,255,0.15);
            transform: translateY(-2px);
        }

        .nav {
            margin-top: 12px;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .nav a {
            text-decoration: none;
            font-weight: 600;
            font-size: 12px;
            padding: 7px 18px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .nav a:first-child {
            background: transparent;
            color: #d6b3ff;
            border: 1px solid rgba(214,179,255,0.5);
        }

        .nav a:last-child {
            background: linear-gradient(135deg, #a259ff, #6a11cb);
            color: #fff;
            box-shadow: 0 4px 20px rgba(162, 89, 255, 0.5);
        }

        .nav a:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="<?php echo base_url('assets/image/IMG_20240710_111153.jpg'); ?>" alt="<?= $name; ?>" class="avatar">
        <h1><?= $name; ?></h1>
        <p class="subtitle">"<?= $description; ?>"</p>

        <div class="divider"></div>

        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Student ID</div>
                <div class="info-value"><?= $student_id; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Course</div>
                <div class="info-value"><?= $course; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Year Level</div>
                <div class="info-value"><?= $year; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Section</div>
                <div class="info-value"><?= $section; ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Email</div>
                <div class="info-value"><?= $email; ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Address</div>
                <div class="info-value"><?= $address; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Contact</div>
                <div class="info-value"><?= $contact; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Hobbies</div>
                <div class="info-value"><?= $hobbies; ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Skills</div>
                <div class="info-value"><?= $skills; ?></div>
            </div>
        </div>

        <div class="socials">
            <a href="<?= $facebook; ?>" target="_blank">Facebook</a>
            <a href="<?= $instagram; ?>" target="_blank">Instagram</a>
            <a href="<?= $github; ?>" target="_blank">GitHub</a>
        </div>

        <div class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Profile</a>
        </div>
    </div>
</body>
</html>