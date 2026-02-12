<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Background</title>
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
            flex-wrap: wrap;
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
            /* Changed to block/single column for the wide table */
            display: block;
            margin-bottom: 2rem;
        }

        .content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
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

        tr:nth-child(even) {
            background-color: #f9f9f9;
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

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="container">
            Academic Background
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
            <h2>Academic Background</h2>
            <table>
                <tr>
                    <th>Level of Education</th>
                    <th>School</th>
                    <th>Year Graduated</th>
                    <th>Section / Strand / Program</th>
                </tr>
                <tr>
                    <td>Elementary</td>
                    <td>Gayong-Gayong Norte Elementary School</td>
                    <td>2018</td>
                    <td>Regular Class</td>
                </tr>
                <tr>
                    <td>Junior High School</td>
                    <td>(ISAT) Isabela School of Arts and Trades MAIN</td>
                    <td>2022</td>
                    <td>(E.I.M.) Electrical Installation and Maintenance</td>
                </tr>
                <tr>
                    <td>Senior High School</td>
                    <td>(ISAT) Isabela School of Arts and Trades MAIN</td>
                    <td>2024</td>
                    <td>(E.I.M.) Electrical Installation and Maintenance</td>
                </tr>
            </table>
        </div>
    </main>
    <br>
    <footer>
        <div class="container footer_content">
            <h4>&copy;2025 JR Balmaceda. All rights reserved.</h4>
        </div>
    </footer>
</body>

</html>