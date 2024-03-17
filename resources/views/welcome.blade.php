<!DOCTYPE html>
<html>
<head>
    <title>Simple Webpage with Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
            background: -webkit-linear-gradient(right, #ffffff, #ff0000);
        }
        h1 {
            text-align: center;
            color: red;
        }
        p {
            margin: 0 auto;
            width: 80%;
            line-height: 1.5;
        }
        form {
            margin: 20px auto;
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Simple Larvel Web</h1>
    
    <form method="post" action="{{ url('/') }}">
    @csrf <!-- Include CSRF token -->
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br>
    <label for="palce">place:</label><br>
    <input type="text" id="city" name="city" required><br>
    <input type="submit" value="Submit">
</form>

    
    <?php
    // PHP code starts here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['place'];

        // Outputting submitted data
        echo "<p>Submitted Data:</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>place: $city</p>";
    }
    ?>

    <script>
       function validateForm() {
    var nameInput = document.getElementById("name").value;
    var ageInput = document.getElementById("age").value;
    var placeInput = document.getElementById("place").value;

    // Name validation
    if (!/^[a-zA-Z]{1,20}$/.test(nameInput)) {
        document.getElementById("nameError").innerHTML = "Please enter a valid name (letters only, maximum 20 characters).";
        return false; // Prevent form submission
    }
    document.getElementById("nameError").innerHTML = ""; // Clear error message

    // Age validation
    if (!/^\d{2}$/.test(ageInput)) {
        document.getElementById("ageError").innerHTML = "Please enter a valid two-digit age.";
        return false; // Prevent form submission
    }
    document.getElementById("ageError").innerHTML = ""; // Clear error message

    // Place validation
    if (!/^[a-zA-Z]{1,10}$/.test(placeInput)) {
        document.getElementById("placeError").innerHTML = "Please enter a valid place (letters only, maximum 10 characters).";
        return false; // Prevent form submission
    }
    document.getElementById("placeError").innerHTML = ""; // Clear error message

    return true; // Allow form submission
}
    </script>
</body>
</html>

