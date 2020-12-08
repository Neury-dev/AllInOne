<!DOCTYPE html>
<html>
<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="front-css/plantillas-de-codigo/plantillas-de-codigo.css"/>
    <style>
/*        section.n-flex-box {
            display: flex;
            flex-direction: column;
            align-content: space-between;
        }*/
    </style>
</head>
<body>
    <h1><a href="http://localhost/AllInOne/index.php#n-all-in-one">AllInOne</a></h1>
    <h2>form</h2>
    
   
<!--<section class="n-flex-box">-->
<div id="n-form" style="height: 12em;">
    <pre>
        <code>
    &lt;form method="POST" name="form" id="form" enctype="multipart/form-data" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;"&gt;
        &lt;label for="texto"&gt;Texto:&lt;/label&gt;
            &lt;input type="text" name="texto" id="texto" value="Texto"&gt;
        &lt;label for="numero"&gt;Numero:&lt;/label&gt;
            &lt;input type="number" name="numero" id="numero" value="1" min="0" max="100" step="1"&gt;
        &lt;label for="buscar">Buscar:&lt;/label&gt;
            &lt;input type="search" name="buscar" id="buscar" value="Bucar"&gt;
        &lt;button type="submit" name="enviar" id="enviar" value="Enviar"&gt;Enviar&lt;/button&gt;
        &lt;input type="submit" name="enviar" id="enviar" value="Enviar"&gt;
    &lt;/form&gt;
        </code>
    </pre>
</div>
<div id="n-full-stack">
    <pre>
        <code>
        &lt;!DOCTYPE HTML&gt;  
        &lt;html&gt;
        &lt;head&gt;
        &lt;/head&gt;
        &lt;body&gt;  

        &lt;?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]);
          $email = test_input($_POST["email"]);
          $website = test_input($_POST["website"]);
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?&gt;

        &lt;h2&gt;PHP Form Validation Example&lt;/h2&gt;
        &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;  
          Name: &lt;input type="text" name="name"&gt;
          &lt;br&gt;&lt;br&gt;
          E-mail: &lt;input type="text" name="email"&gt;
          &lt;br&gt;&lt;br&gt;
          Website: &lt;input type="text" name="website"&gt;
          &lt;br&gt;&lt;br&gt;
          Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
          &lt;br&gt;&lt;br&gt;
          Gender:
          &lt;input type="radio" name="gender" value="female"&gt;Female
          &lt;input type="radio" name="gender" value="male"&gt;Male
          &lt;input type="radio" name="gender" value="other"&gt;Other
          &lt;br&gt;&lt;br&gt;
          &lt;input type="submit" name="submit" value="Submit"&gt;  
        &lt;/form&gt;

        &lt;?php
        echo "&lt;h2&gt;Your Input:&lt;/h2&gt;";
        echo $name;
        echo "&lt;br&gt;";
        echo $email;
        echo "&lt;br&gt;";
        echo $website;
        echo "&lt;br&gt;";
        echo $comment;
        echo "&lt;br&gt;";
        echo $gender;
        ?&gt;

        &lt;/body&gt;
        &lt;/html&gt;
        </code>
    </pre>
</div>
<!--</section>-->
<!--<script src="show/plantillas-de-codigo/front-end.js" async=""></script>-->
<script src="show/plantillas-de-codigo/full-stack.js"></script>
</body>
</html>