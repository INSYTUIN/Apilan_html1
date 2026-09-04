    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
        <div class="indexbackground">

            <div class="container">

                <div class="title">Welcome to My Website</div>


                <h4>LOGIN</h4>
                <p>Fill out the necessary information.</p>

                <form action="home.php" method="post">

                    <label for="name">Name:</label>
                    <br><br>
                    <input type="text" id="name" name="name" class="textfield" required>
                    <br><br>

                    <label for="email">Email:</label>
                    <br><br>
                    <input type="email" id="email" name="email" class="textfield" required>
                    <br><br>

                    <label for="password">Password:</label>
                    <br><br>
                    <input type="password" id="password" name="password" class="textfield" required>
                    <br><br>    

                    <label for="birthdate">Birthdate:</label>
                    <br><br>
                    <input type="date" id="birthdate" name="birthdate" class="textfield" required>
                    <br><br>

                    <label for="number">Number:</label>
                    <input
                        class="textfield"
                        type="number"
                        name="number"
                        id="number"
                        min="1"
                        max="100"
                        step="0.01"
                        required>
                    <br><br>

                    <label for ="gender">Gender:</label>
                    <br><br>
                    <select id="gender" name="gender" class="textfield" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <br><br>

                    <label for="status">Status:</label>
                    <br><br>
                    <input type="radio" id="status1" name="status" class="" value="Active" required>
                    <label for="status1">Active</label>
                    <input type="radio" id="status2" name="status" class="" value="Inactive" required>
                    <label for="status2">Inactive</label>
                    <br><br>

                    <label for="terms">
                        <input type="checkbox" id="terms" name="terms" required>
                        I agree to the <a href="terms.php">terms and conditions</a>.
                    </label>
                    <br><br>

                    <input type="submit" value="Submit" class="button">
                    
                </form>
        </div>

        </div>
    </body>
    </html>