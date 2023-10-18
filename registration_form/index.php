<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <h1>REGISTER HERE</h1>
        <form action="" onsubmit="inputData(event)">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
            <br>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
