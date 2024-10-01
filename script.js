function displayContent() {
    const queryString = location.search;
    const urlParams = new URLSearchParams(queryString);
    const userInput = urlParams.get('input');

    // Checking if the user input contains a script tag
    if (userInput && userInput.includes('<script>')) {
        alert('Congratulations! You found the DOM XSS vulnerability.');
        
        // Displaying the flag
        document.getElementById('content').innerHTML = '<h3>Flag: FLAG-12345-XYZ</h3>';
    } else {
        // If not solved, display the user input
        document.write('<div>' + userInput + '</div>');
    }
}
