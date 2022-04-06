<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mailchimp newletter</title>
    <style>
        /* Importing Google Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Mono&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Red+Hat+Mono&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

        * {
        margin: 0;
        padding: 0;
        }

        body {
        background: linear-gradient(To Right, rgb(193, 230, 32), rgb(113, 214, 45));
        }

        .container {
        opacity: 95%;
        position: relative;
        display: flex;
        justify-content: center;
        background: linear-gradient(To Right, rgb(241, 241, 241), rgb(238, 238, 238));
        overflow: hidden;
        border-radius: 20px;
        padding: 7% 8%;
        margin: 0% 25%;
        margin-top: 7%;
        font-family: "Red Hat Mono", monospace;
        box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.171);
        }

        .container h3 {
        color: rgb(0, 204, 0);
        font-size: 40px;
        /* position: absolute; */
        font-family: "Poppins", sans-serif;
        top: 5%;
        text-align: center;
        /* left: 44%; */
        }

        .container input[type="text"],
        input[type="password"] {
        height: 30px;
        margin: 2% 0;
        padding: 0 3%;
        outline: none;
        font-size: 13px;
        border: 2px solid rgb(104, 197, 104);
        box-sizing: content-box;
        }

        .container label {
        font-weight: "Montserrat", sans-serif;
        font-weight: bold;
        }

        .container h5 {
        font-size: 15px;
        text-align: center;
        margin: 5% 0;
        }

        .container button {
        border-radius: 4px;
        font-size: 20px;
        color: white;
        border: none;
        font-family: "Red Hat Mono", monospace;
        padding: 1% 2%;
        margin: 0 5%;
        transition: all 0.1s ease-in-out;
        }
        .container #submit {
        margin-left: 25%;
        background: rgb(89, 206, 89);
        }
        .container #cancel {
        background: rgb(206, 93, 89);
        }

        .container #submit:hover {
        background: rgb(74, 173, 74);
        transition: all 0.1s ease-in-out;
        }

        .container #cancel:hover {
        background: rgb(161, 71, 68);
        transition: all 0.1s ease-in-out;
        }

        .shape1,
        .shape2,
        .shape3,
        .shape4 {
        background: rgb(49, 49, 49);
        opacity: 10%;
        transition: all 0.1s ease-in-out;
        }

        .shape1 {
        position: absolute;
        left: 85%;
        top: 70%;
        height: 200px;
        width: 200px;
        border-radius: 200px;
        }

        .shape2 {
        position: absolute;
        left: -20%;
        top: -5%;
        height: 200px;
        width: 200px;
        border-radius: 200px;
        }

        .shape3 {
        position: absolute;
        left: 82%;
        opacity: 5%;
        top: 10%;
        height: 100px;
        width: 100px;
        border-radius: 100px;
        }

        .shape4 {
        position: absolute;
        left: -5%;
        opacity: 5%;
        top: 70%;
        height: 200px;
        width: 200px;
        border-radius: 200px;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('newsletterPost') }}" method="post">
          @csrf
          <h3>Newsletter subscription</h3>
          <br><br>

          <label for="username">Name:</label>
          <input name="name" type="text" placeholder="Enter name" size="40" required>
          <br><br>

          <label for="username">Business Name:</label>
          <input name="username" type="text" placeholder="Enter business name" size="40" required>
          <br><br>

          <label for="username">Email:</label>
          <input name="contact" type="text" placeholder="Enter Email" size="40" required>
          <br><br>

          <label for="username">Phone number:</label>
          <input name="phone" type="text" placeholder="Enter phone number" size="40" required>
          <br><br>

          <button id="submit">Submit</button>
          <button id="cancel">Cancel</button>

          <div class="shape1"></div>
          <div class="shape2"></div>
          <div class="shape3"></div>
          <div class="shape4"></div>
        </form>
      </div>
</body>
</html>
