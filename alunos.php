    <?php
    $SERVER = "localhost";
    $USER ="aluno";
    $PASS="123456";
    $DB="dbalunos";

    $conn = mysqli_connect($SERVER,$USER,$PASS,$DB);
    if(mysqli_connect_error()){
        echo "Erro ao conectar o banco de dados" 
        . mysqli_connect_error();
    }else{
        echo "Banco de dados conectado";
    }
    ?>