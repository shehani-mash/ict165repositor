<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:
        <input type="text" name="name" id="stdName"><br><br>
        Reg No:
        <input type="text" name="regno" id="stdRegNum"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    Class StudentParent{
        public $stdName;
        public $stdRegNum;
        Public function __construct($Name, $regnum){
            $this->stdName = $Name;
            $this->stdRegNum = $regnum;
        }

    }
    Class StudentChild extends Student{
        Public function display(){
            Echo "{$this->stdName}  {$this->stdRegNum}";
        }

    }

?>
</body>
</html>