<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(135deg, blueviolet, #6a3093);
            color: white;
            padding: 1rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        nav a {
            color: white;
            background-color: blueviolet;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #333;
        }

        main {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .content,
        .sidebar {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: blueviolet;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        footer {
            background: #2C9AB3;
            padding: 20px 0;
            margin-top: auto;
            text-align: center;
        }

        .footer_content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .sidebar_content {
            background: #f9f9f9;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid blueviolet;
        }

        .sidebar h3 {
            color: blueviolet;
            margin-top: 0;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        .sidebar ul {
            padding-left: 20px;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .container {
            padding: 0 15px;
        }

        nav {
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="container">
            Personal Data
        </h1>
    </header>

    <nav class="container">
        <a href="/">Home</a>
        <a href="/aboutme">About Me</a>
        <a href="/acadbackground">Academic Background</a>
    </nav>
    <br>
    <main class="container">
        <div class="content">
            <h2>Skill Proficiency</h2>
            <table>
                <tr>
                    <th>Skill</th>
                    <th>Proficiency</th>
                    <th>Date Attained</th>
                </tr>
                <tr>
                    <td>Java</td>
                    <td>Beginner</td>
                    <td>Last Academic Year</td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>Beginner</td>
                    <td>Last Academic Year</td>
                </tr>
                <tr>
                    <td>HTML</td>
                    <td>Beginner</td>
                    <td>This Academic Year</td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td>Beginner</td>
                    <td>This Academic Year</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>Beginner</td>
                    <td>This Academic Year</td>
                </tr>
            </table>

            <h2>My Hobbiess</h2>
            <ul>
                <li>Playing video games (FPS, MOBA, and rhythm games like Osu! and Geometry Dash)</li>
                <li>Watching Anime <a href="#" alt="Anime Recommendations XD">Anime Recommendations</a></li>
                <li>Reading Manga/Manhwa/Manhua/Light Novels</li>
                <li>Playing Volleyball and other sports</li>
                <li>Listening to J-pop and Rock music</li>
            </ul>
        </div>

        <aside class="sidebar">
            <div class="sidebar_content">
                <h3>Recent Projects</h3>
                <ul>
                    <li>Terminal Based Game</li>
                    <li>Anime Recommendation Site</li>
                </ul>
            </div>

            <div class="sidebar_content">
                <h3>Currently Learning</h3>
                <ul>
                    <li>Beginner CSS & HTML</li>
                    <li>JavaScript Frameworks</li>
                    <li>Web Development</li>
                </ul>
            </div>

            <div class="sidebar_content">
                <h3>Favorite Anime</h3>
                <ul>
                    <li>Frieren: Beyond Journey's End</li>
                    <li>Attack on Titan</li>
                    <li>Demon Slayer</li>
                    <li>Code Geass</li>
                    <li>One Punch Man</li>
                    <li>Hunter x Hunter</li>
                    <li>Death Note</li>
                    <li>GATE</li>
                    <li>One Piece</li>
                    <li>Black Clover</li>
                </ul>
            </div>
        </aside>
    </main>
    <br>
    <footer>
        <div class="container footer_content">
            <h4>&copy;2025 JR Balmaceda. All rights reserved.</h4>
        </div>
    </footer>
</body>

</html>