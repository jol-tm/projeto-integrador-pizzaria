<?php 
    session_start();
    include_once "admin.php";
    
    if ($_SESSION['userem'] != $admin) {
      header("Location: index.php");
    } 
    if (isset($_SESSION['status'])) {
      echo "<div class='notification'>{$_SESSION['status']}</div>";
      unset($_SESSION['status']);
    }
    include_once "assets/header.php";
?>
<div class="box">
    <form action="dataAcess/addProduct.php" method="post" enctype="multipart/form-data">
        <h1>Adicionar Produto</h1>
        <input type="text" placeholder="Nome" name="nome" value='' required>
        <select name='categ' required>
            <option value="" disabled selected>Categoria</option>
            <option value='Salgada'>Salgada</option>
            <option value='Doce'>Doce</option>
            <option value='Bebida'>Bebida</option>
        </select>   
        <input type="text" placeholder="Descrição" name="desc" value='' required>    
        <input type="text" placeholder="Preço Ex: 20.00" name="preco" value='' required>
        <input type='file' name='img' required>
        <button type="submit"><h4>Adicionar</h4></button>
    </form>
</div>
<?php include_once "assets/footer.php"; ?>
