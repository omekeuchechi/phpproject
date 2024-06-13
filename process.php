<body>
<!-- ================perfect way of writing embending html into php================== -->
<style>
    /* ===========this is internal styling we run them here like this but not recommended======== */
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        background-color: gold;
        justify-content: space-between;
    }
    .box{
        width: 200px;
        height: 200px;
        align-self: center;
        justify-self: center;
        text-align: center;
        background-color: blue;
    }
</style>
<!-- ============================this is also a title for the page==================================== -->
<title>butl</title>
<!-- ============================you can add <meta> tags here or below================================ -->

<!-- you can add your <link rel="stylesheet" href="style.css">here or below -->

<?php if(true){ ?>
    <p style="color: red;">some html <?php /*this is called adding php to html tag*/ echo "foolish"; ?> text</p>
    <p style="color: green;">this is code for applying <?php $word = "php varible"; echo $word; ?> into html tag</p>
    <div class="container">
        <div class="box">
            box1
        </div>
        <div class="box">
            box1
        </div>
        <div class="box">
            box1
        </div>
    </div>

    <!-- ===================linking of javascript <script src=""></script> is done here or below========================== -->
<?php } 
//=================================we write our pure php code in here===========================/\
$name = "james";
$workersName_01 = "omeke uchechi";
$int = 123456;
$float = 4.2344;
$boolean = true;
$array = ["danail", "james", "poul", "emma"];
echo $name;
echo $workersName_01;
echo $int;
echo $float;
echo $boolean;
echo $array[1];
?>

</body>