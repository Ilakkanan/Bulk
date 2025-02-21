<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Bulk SMS</title>
</head>
<body>
    <h1>Send Bulk SMS</h1>
    <form action="/send-bulk-sms" method="POST">
        @csrf
        <label for="recipients">Recipients (comma-separated):</label><br>
        <input type="text" name="recipients" id="recipients" required><br><br>
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br><br>
        <button type="submit">Send SMS</button>
    </form>
</body>
</html>