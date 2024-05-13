<?php class Form
{


    private $method;
    private $action;
    private $html = '';

    function __construct($method, $action)
    {
        $this->method = $method;
        $this->action = $action;
    }


    function generateLabel($text, $for)
    {
        $this->html .= "<label for='$for'>$text</label>";
    }


    function generateInput($type, $name, $value,)
    {
        $this->html .= " <input type='$type' class='form-control'  value='$value' name='$name'  >";
    }

    function generateBtn($type)
    {
        $this->html .= "<button type='$type' class='btn btn-primary'>Submit</button>";
    }


    function generateForm()
    {

        echo "<form action='$this->action' method='$this->method'>";
        echo $this->html;

        echo "</form>";
    }
}


$myForm = new Form("POST", '');
$myForm->generateLabel("name", "name");
$myForm->generateInput("text", "name", "");

$myForm->generateLabel("email", "email");
$myForm->generateInput("email", "email", "");


$myForm->generateLabel("password", "password");
$myForm->generateInput("password", "password", "");



$myForm->generateBtn("submit")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container"> <?php $myForm->generateform(); ?></div>
</body>

</html>