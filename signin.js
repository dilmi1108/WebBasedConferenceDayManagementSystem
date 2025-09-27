document.querySelector('form').addEventListener('submit', function(e) {
    const username = document.getElementById('name').value.trim();
    const Email = document.getElementById('Email').value.trim();

    if (!username || !password) {
        e.preventDefault(); // Prevent form submission
        alert("Please fill out both username and password fields.");
    } else {
        alert("Welcome, " + username + "!");
    }
});
