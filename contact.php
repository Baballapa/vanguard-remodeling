<?php $pageTitle = 'Contact Page' ?>

<?php require 'inc/header.inc.php' ?>

<section id="contact-form">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="send-email.php" method="POST">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Please enter Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Please enter Email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Please enter Subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control" placeholder="How can I help you" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<?php require 'inc/footer.inc.php' ?>