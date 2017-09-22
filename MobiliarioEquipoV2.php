<!-- *****  PAGINAS CREADAS PARA MASTERPAGE ************

    main-header.php";  
    body-page.php";  
    main-sidebar.php";
    Footer.php";

    ****************************************************
    content-header.php

  -->

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ekio | Sofware</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="views/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<!-- BODY -->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->    <!-- main-header.php -->
  <?php require_once 'views/Encabezado.php'; ?>

  <!-- Left side column. contains the logo and sidebar -->  <!-- main-sidebar.php -->
  <?php require_once 'views/MenuBarra.php'; ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mobiliario y Equipo
        <small>Disponibilidad de Activos</small>
      </h1>


      <!-- 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
      -->
    </section>  


    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

      <!-- *******************************
              AGREGAR CONTENIDO DE PAGINA
           *******************************
      -->


                <div class="btn-group pull-right">

<a class="btn btn-sm btn-default" href="<?php echo "index.php?view=products&limit=$limit&page=".($px); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Atras </a>




<br><table class="table table-bordered table-hover">
  <thead>
    <th>Codigo</th>
<!--  <th>Imagen</th>  -->
    <th>Nombre</th>
    <th>Categoria</th>
    <th>Estado</th>
    <th>Ingreso</th>
    <th>Minima</th>
    <th>Activo</th>
    <th>Modificaciones</th>
  </thead>

  
  
  
  <tr>
    <td><?php echo $product->id; ?></td>
    <!--
    <td>
      <?php if($product->image!=""):?>
        <img src="storage/products/<?php echo $product->image;?>" style="width:64px;">
      <?php endif;?>
    </td>
    -->
    <td><?php echo "Escritorios"; ?></td>
    
    <td><?php if($product->category_id!=null){echo $product->getCategory()->name;}
          else{ echo "<center>----</center>"; }  ?></td>
    <td><?php echo "nuevo"; ?></td>
    <td><?php echo "3"; ?>
    <td><?php echo "12"; ?></td>
   

    <!--Validar Usuario para Modificar-->
        
    <a href="index.php?view=editproduct&id=<?php echo $product->id; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>

<!--
    <a href="index.php?view=delproduct&id=<?php echo $product->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
-->
    <a href="#" id="prod-<?php echo $product->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
    <script>
      $("#prod-"+<?php echo $product->id; ?>).click(function(){
        x = confirm("Estas seguro que quieres eliminar esto ??");
        if(x==true){
          window.location = "index.php?view=delproduct&id=<?php echo $product->id;?>";
        }
      });
    </script>

    <!--Termina Validar Usuario para Modificar-->
         
    </td>
  </tr>
  
</table>

<div class="btn-group pull-right">
<?php

for($i=0;$i<$npaginas;$i++){
  echo "<a href='index.php?view=products&limit=$limit&page=".($i+1)."' class='btn btn-default btn-sm'>".($i+1)."</a> ";
}
?>
</div>
<form class="form-inline">
  <label for="limit">Limite</label>
  <input type="hidden" name="view" value="products">
  <input type="number" value=<?php echo $limit?> name="limit" style="width:60px;" class="form-control">
</form>





      <!-- *******************************
              AGREGAR CONTENIDO DE PAGINA
           *******************************
      -->

    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->   <!-- Footer.php --> 

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->



<!-- jQuery 2.2.3 -->
<script src="views/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="views/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/app.min.js"></script>




<!-- jQuery 2.2.3 -->
<script src="views/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="views/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="views/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->


</body>
</html>

