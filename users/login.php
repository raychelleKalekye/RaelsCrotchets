

<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <style>

        </style>
    </head>
    <body>
        <?php if ($is_invalid):?>
            <em>INVALID LOGIN</em>
        <?php endif;?>
      <form class="login" method="POST">
        <div>      
                    <label for="phoneNo">Phone Number:</label>
                    <input type="tel" name="phoneNo" id="phoneNo">
        </div>   
        <div>
            <label for="Password">Password:</label>
            <input type="password" name="Password" id="Password">
        </div>
        <button>LOG IN</button>
      </form>

    </body>
</html>