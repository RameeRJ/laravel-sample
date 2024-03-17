<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Webpage with Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #007bff;
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
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Simple PHP Webpage with Form</h1>
    
    <form method="post" action="{{ url('/') }}">
    @csrf <!-- Include CSRF token -->
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br>
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" required><br>
    <input type="submit" value="Submit">
</form>

    
    <?php
    // PHP code starts here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        // Outputting submitted data
        echo "<p>Submitted Data:</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
        echo "<p>City: $city</p>";
    }
    ?>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var age = document.getElementById("age").value;
            var city = document.getElementById("city").value;

            if (name === "" || age === "" || city === "") {
                alert("Please fill out all fields.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

