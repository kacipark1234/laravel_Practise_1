

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body class="antialiased">
        <div>
        <h1>NEW PIZZA</h1>
            <form action="/pizzas" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name"><br>
                <label for="type">Choose pizza type:</label><br>
                <select name="type" id="type">
                    <option value="11111">11111</option>
                    <option value="22222">22222</option>
                    <option value="33333">33333</option>
                    <option value="44444">44444</option>
                        
                </select>
                <label for="base">Choose base type:</label><br>
                <select name="base" id="base">
                    <option value="a11111">a11111</option>
                    <option value="a22222">a22222</option>
                    <option value="a33333">a33333</option>
                    <option value="a44444">a44444</option>
                        
                </select><br>
                <input type="submit" value="Order Pizza">
                
            </form>
        </div>
    </body>
</html>









