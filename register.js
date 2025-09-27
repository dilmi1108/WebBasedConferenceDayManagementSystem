document.querySelector('form').addEventListener('submit', function (e) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const university = document.getElementById('university').value.trim();

    if (!name || !email || !phone || !university) {
        e.preventDefault();
        alert("Please fill out all required fields!");
    } else {
        alert("Form submitted successfully!");
    }
});
