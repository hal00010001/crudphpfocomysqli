<?php include("includes/header.php"); ?>
<div class="content">
    <?php
        include("./ClassMSQLI/ClassConexao.php");
        include("./ClassMSQLI/ClassCrud.php");
        $crud = new ClassCrud();
    ?>
</div>
<?php include("includes/footer.php"); ?>

