<?
 include 'libs/load.php';
//  print(basename($_SERVER['PHP_SELF'],".php"));


?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head> 
    <?load_templates('_head');
    ?>

    
    
  </head>
  <body>
    <?
     load_templates('_drop');
    ?>

    

  <?
     load_templates('_header');
  ?>
  


<main>


<?
    //  load_templates('_calltoaction');
  ?>
  
  <?//load_templates('_photogram')?>
  <?load_templates('_signup')?>

</main>

<?//load_templates('_footer')?>
<!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="../photogram/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
