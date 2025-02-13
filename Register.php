<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="Register.php" method="post">
    <h1>Register Form</h1>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Add User</button>
    </form>
</body>

<style>
    form{

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    input{
        margin: 10px;
        padding: 10px;  
    }
    button{

        margin: 10px;
        padding: 10px;
        background-color: green;
    }
</style>
</html>