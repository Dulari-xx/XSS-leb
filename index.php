<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS Vulnerability Lab</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <img src="img.png" alt="Logo" class="logo">
        <h1>DOM XSS Vulnerability Lab</h1>
    </header>
    <main>
        <h2>Welcome to the Lab</h2>
        <p>To exploit the DOM XSS vulnerability, manipulate the URL parameters.</p>
        <button onclick="displayContent()">Show Content</button>
        <div id="content"></div> <!-- This will display the flag when solved -->
    </main>
    <footer>
        <p><a href="instructions.html">Instructions for Solving the Lab</a></p>
        <p><a href="hint.html">Need a Hint?</a></p>
    </footer>
</body>
</html>
