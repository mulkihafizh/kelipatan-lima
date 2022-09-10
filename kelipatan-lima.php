<?php
$z=[];
$alert1=false;
$alert2=false;

if(isset($_POST['submit'])){
    $max=$_POST['max'];
    if(!empty($max)){
        for($y=1;$y <=$max;$y++){
            if($y%5==0){
                array_push($z,$y);
            } 
        }
    }
    
    if(empty($max)){
        $alert1=true;
    }elseif($max<5){
        $alert2=true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelipatan Lima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body{
        background: #6B5C7E;
    }

    .inputForm{
        background:#001440; 
        box-shadow:1px 1px 20px #5798A6;
    }

    .lima{
        background:#f3ff4c;
        color:#9A56B2;
        width:46.6px; 
        max-height:46.4px; 
        box-shadow:1px 1px 10px #D2C3E5; 
        bottom:-10px; 
        right:-10px;
    }

    .lima h2{
        transform:translateY(2px);
    }

    .check-max{
        width: 360px;
    }

    .wrap{
        overflow: auto; 
        border-radius:10px;
    }

    table{
        border-radius:10px; 
        border-collapse:separate; 
        border-spacing: 10px;
    }

    .output-data{
        cursor: pointer;
        transition: 0.3s;
    }

    .output-data:hover{
        transform: scale(110%);
    }
    </style>
</head>

<body>
    <div class="inputForm m-5 w-25 mx-auto card pt-0 text-white">
        <?php
        if ($alert1 == true) {
        ?>
        <h6 class="bg-danger text-white p-2"><i class="fa-solid fa-triangle-exclamation"></i> Nilai Max Tidak Boleh Kosong!</h6>
        <?php
        }
        ?>
        <?php
        if ($alert2 == true) {
        ?>
        <h6 class="bg-danger text-white p-2 ml-3"><i class="fa-solid fa-triangle-exclamation"></i> Nilai Max Harus Lebih Dari 5!</h6>
        <?php
        }
        ?>
        <div class="p-5 pt-3 mx-auto">
            <div class="coy pb-2 text-center">
                <h4>Cek Kelipatan - 5</h4>
            </div>
            <form action="" method="post">
                <div class="mb-3" mt-1>
                    <label for="">Nilai Max</label>
                    <input type="number" name="max" placeholder="Masukkan Nilai Max" value="<?= @$_POST['max']?>">
                </div>
                <input class="btn btn-warning text-white" type="submit" name="submit">
            </form>

        </div>
        <div class="lima rounded-circle position-absolute text-center h-50">
            <h2>5</h2>
        </div>
    </div>


    <?php
    if(!empty($_POST['max']) && $_POST['max'] > 5){
    ?>
    <div class="check-max mx-auto text-center bg-white rounded pt-2">
        <h2>Nilai Max : <?=$max?></h2>
        <h6 class="pb-3">Mencari Angka Kelipatan 5 Sampai Angka <?=$max?></h6>
    </div>
    <div class="wrap mt-2">
        <table class="output-table mx-auto rounded table w-25 table-borderless bg-white mt-3">
            <tr class="text-center">
                <th>No</th>
                <th>Kelipatan 5</th>
            </tr>
            <tr>

            </tr>
            <?php
            $no=0;
            foreach($z as $output){
            $no++;
            ?>
            <tr class="output-data">
                <td class="bg-warning rounded-circle text-center m-5" style="width:40px; margin:4px;"><?= $no?></td>
                <td class="bg-primary rounded text-white">Kelipatan 5 Ke-<?=$no." ". "= <b>$output</b>"?></td>
            </tr>
            <?php 
        }
    }
    ?>
        </table>
    </div>
</body>

</html>