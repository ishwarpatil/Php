<html>

<head>

    <script src="bootStrap/jquery.min.js"></script>
    <script src="bootStrap/bootstrap.min.css"></script>
    <script src="bootStrap/bootstrap.min.js"></script>

    <style>

        fieldset
        {
            width: 30%;
            margin: 0 auto;
            margin-top: 5%;
        }

    </style>

</head>

<body>

    <fieldset>
        <legend align="center">Registration</legend>
        <form action="" name="myform" method="post">
            <table>
                <tr>
                    <th>First Name :- </th>
                    <td><input name="text" name="fname" id="fname"></td>
                </tr>
                <tr>
                    <th>Last Name :- </th>
                    <td><input name="text" name="lname" id="lname" ></td>
                </tr>
                <tr>
                    <th>Your Email :- </th>
                    <td><input name="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <th>New Password :- </th>
                    <td><input name="text" name="password" id="password" required></td>
                </tr>
                <tr>
                    <th>I Am :- </th>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>
                <tr>
                    <th>Birthday :- </th>
                    <td>
                        <select name="month">
                            <option>Month</option>
                            <?php

                                for($i=1;$i<=12;$i++)
                                {
                                    echo "<option value=$i>$i</option>";
                                }

                            ?>
                        </select>
                        <select name="day">
                            <option>Day</option>
                            <?php

                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option value=$i>$i</option>";
                                }

                            ?>
                        </select>
                        <select name="Year">
                            <option>Year</option>
                            <?php

                                for($i=1950;$i<=2020;$i++)
                                {
                                    echo "<option value=$i>$i</option>";
                                }

                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="Submit" name="Submit" value="Sign Up"></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>

</html>