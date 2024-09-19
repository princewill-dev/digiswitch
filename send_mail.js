// This JavaScript code would typically be placed in a separate .js file or within a <script> tag in your HTML

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const fromEmail = "support@digiswitch.tech";
        const to = "support@digiswitch.tech";
        const subject = "New Contact Form Message";

        const name = document.querySelector('input[name="name"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const message = document.querySelector('textarea[name="message"]').value;

        // Input validation
        if (!name || !email || !message) {
            window.location.href = 'contact-us.html?msg=error_missing_fields';
            return;
        }

        // Sanitize inputs (basic example, consider using a library for more robust sanitization)
        const contactName = name.replace(/[^\w\s]/gi, '');
        const contactEmail = email.trim();
        const contactMessage = message.replace(/<\/?[^>]+(>|$)/g, "");

        // Construct message body
        const messageBody = `
        New enquiry:
        <br>
        Name: ${contactName}
        <br>
        Email address: ${contactEmail}
        <br>
        Message: <br> ${contactMessage}
        `;

        // In a real-world scenario, you would typically send this data to a server-side API
        // Here, we're simulating a successful submission
        // You would replace this with an actual AJAX call to your server

        // Simulating server response
        setTimeout(() => {
            // Simulating successful submission
            window.location.href = 'contact-us.html?msg=message_sent';
        }, 1000);

        // Note: In a real implementation, you would use fetch or XMLHttpRequest to send data to a server
        // The server would then handle the email sending process
    });
});