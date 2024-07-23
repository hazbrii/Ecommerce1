<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Confirmation Modal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- Trigger Button -->
    <button id="openModalBtn">Delete Account</button>

    <!-- Modal -->
    <div id="passwordModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Confirm Password</h2>
            <form id="passwordForm">
                <label for="password">Current Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Confirm</button>
                <div id="message" class="message"></div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>