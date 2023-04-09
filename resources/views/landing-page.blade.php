<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to our website</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam feugiat leo, ac facilisis felis pellentesque ac.</p>
                <a href="#" class="cta-button">Learn More</a>
            </div>
        </section>
        <section class="features">
            <div class="feature">
                <img src="{{ asset('images/feature1.jpg') }}" alt="Feature 1">
                <h2>Feature 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam feugiat leo, ac facilisis felis pellentesque ac.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/feature2.jpg') }}" alt="Feature 2">
                <h2>Feature 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam feugiat leo, ac facilisis felis pellentesque ac.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/feature3.jpg') }}" alt="Feature 3">
                <h2>Feature 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam feugiat leo, ac facilisis felis pellentesque ac.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Company Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
