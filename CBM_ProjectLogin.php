<!DOCTYPE html>

<html>

<head>
    <title>CBM_Project</title>
    <meta charset="utf-8">
    <meta name="random" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/CBM_Project.css" type="text/css">

</head>

<body>

    <div class="header">
        <ul>
            <li style="display:inline-block;">
                <a href="CBM_ProjectContact.php" style="text-decoration:none; color:#ffffff;">
                    <pre>  Contact us  </pre>
                </a>
            </li>
        </ul>
    </div>

    <br></br>
    <br></br>
    <h4>Hamburg</h4>
    <br></br>
    <br></br>

    <div class="content">

        <form action="CBM_ProjectMail.php" method="post">
            <pre class="text2">What is your name <input name="name" ></pre>
            <pre class="text2">What is your E-Mail <input name="email" ></pre>
    </div>


    <div class="abfrage">

        <select name="age" id="age">
            <option value="1">less then 25</option>
            <option value="2">less then 40</option>
            <option value="3">less then 60</option>
            <option value="4">Almost dead!</option>
        </select>
        <select name="gender" id="gender">
            <option value="w">Women</option>
            <option value="m">Men</option>
        </select>
        <select name="budget" id="budget">
            <option value="1">25€</option>
            <option value="2">50€</option>
            <option value="3">100€</option>
            <option value="4">I am rich!</option>
        </select>

        <p><input type="submit" name="Ready!"></p>
    </div>
    </form>






    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>

    <footer>
        <h3>All Rights are not Reserved.</h3>
    </footer>

</body>

</html>