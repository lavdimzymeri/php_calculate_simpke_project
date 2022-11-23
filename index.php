<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavdim's Calculator</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="formm">
    <form action="function.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="oper">
            
            <option value="add"> Add: </option>
            <option value="sub"> Substract: </option>
            <option value="multiply"> Multiply: </option>
            <option value="division"> Division: </option>
            <option value="module"> Module: </option>
            <option value="exponentiation"> Exponentiation: </option>
            
            
            

        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <button type="submit">Calculate!</button>

    </form>
    </div>
</body>
</html>