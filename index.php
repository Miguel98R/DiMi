   <?php include ("components/head.php") ;?>



  <!-- Start your project here--> 
  
   
   <?php 

                                                session_start();

                                                if(!isset($_SESSION["mensaje"])){
                                                    $mensaje = "";
                                                  $colorMensaje = "";

                                                }else{

                                                  $mensaje =$_SESSION["mensaje"];
                                                  $colorMensaje =$_SESSION["colorMensaje"];
                                              
                                              
                                            ?>
                                            <div class="alert alert-<?php echo $colorMensaje ?> alert-dismissible fade show" role="alert">
                                              <strong><?php echo $mensaje ?></strong> 
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <?php  
                                            session_destroy();
                                            }
                                            ?>

  <?php include ("components/navBar.php") ;?>
  <?php include ("components/pluginREDES.php") ;?>
  <?php include ("components/header.php") ;?>
  <?php include ("components/nosotros.php") ;?>
  <?php include ("components/servicios.php") ;?>
  <?php include ("components/contacto.php") ;?>



  






  <!-- End your project here-->
 <?php include ("components/footer.php") ;?>

