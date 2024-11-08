

document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting

    // Capture the input values
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Simple check for credentials (In reality, use server-side authentication)
    if (username === 'admin' && password === 'admin') {
        // Redirect to dashboard if credentials match
        window.location.href = 'dashboard.html';
    } else {
        alert('Invalid credentials. Please try again.');
    }
});
