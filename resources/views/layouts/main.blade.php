<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulokozi High School</title>
    <style>
        body { font-family: Arial, sans-serif; margin:0;
            background-image: url('{{ asset("images/gallery/School1.jpg") }}'); 
            background-size: cover;
            background-attachment: fixed;
        }
        nav { background:#c1d3e6; padding:15px; }
        nav a { color:white; margin-right:15px; text-decoration:none; font-weight:bold; }
        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            padding: 20px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
        }
        .hero { background:#f4f6f8; padding:60px; text-align:center; }
        .hero a {
            display: inline-block;
            border-radius: 5px;
        }
        .section { padding:40px; }
        .cards { display:flex; gap:20px; }
        .staff-card img{
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .card { background:#f9f9f9; padding:20px; flex:1; border-radius:5px; }
        footer { background:#003366; color:white; text-align:center; padding:15px; }
        .btn { background:#0066cc; color:white; padding:10px 20px; text-decoration:none; }

        .news {
            display: grid;
            grid-template: repeat(3, 1fr);
            gap: 20px;
        }
        .news-item {
            background: #f9f9f9;
            padding: 20px;
            border-left: 4px solid #2e91f5;
        }
        .news-item h4 {
            margin-top: 0;
        }
        .news-date {
            font-size: 0.9em;
            color: #555;
        }

        @media (max-width: 768px) {
            nav {
                text-align: center;
            }
             nav a {
                display: block;
                margin: 10px 0;
             }
             .hero {
                padding: 30px;
             }
             .cards {
                flex-direction: column;
             }
             .section{
                padding: 20px;
             }
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
            .cards {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
            h1 {
                font-size: 1.8em;
            }
            h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/about">About Us</a> 
    <a href="/contact">Contact Us</a>
</nav>

@yield('content')

<hr>
<footer>
    <p>&copy; 2026 Mulokozi High School | Excellence & Discipline</p>
</footer>

</body>
</html>
