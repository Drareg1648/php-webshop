<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webshop Sportschoolartikelen</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/index.css">
        <script src="/assets/js/index.js"></script>
      </head>
<body>
    <div>
        <header><h1>The admin page</h1></header>
        <form id="m_inlog data" target="_blank:">
            <p>To be able to log in, please enter your name.</p>
            <label for="m_yourname?">What is your name?</label>
            <input id="m_yourname?" type="text">

            <br>
            <br>
            <br>
            <p>To be able to log in, please enter your password.</p>

            <label for="m_yourpassword?">What is your password?</label>
            <input id="m_yourpassword?" type="password">
    </div>
    <div>
        <h2>Voer uw naam in</h2>
        <form method="post" actions="/names">
            <input name="name"></input>
            <button type="Verstuur"></button>
        </form>
    </div>
</body>
</html>