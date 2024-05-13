<?php

class form
{

    public $name;
    public $surname;
    public $password;


    function __construct(
        $name,
        $surname,
        $password
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
    }


    function generate_form()
    {
        echo 'sono' . " " . $this->name;
    }


    function setName()
    {
    }

    function getName()
    {
    }
}





$myForm = new form("marco", "polo", "1234");

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
    <div class="container text-center"> <?php $myForm->generate_form() ?><a href="form.php"><button class="btn btn-success">Vail al form</button></a></div>
</body>

</html>