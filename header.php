 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   
    <?php wp_head(); ?>

</head>

<body  <?php body_class(); ?>>
    <header class="floating-header">
      <nav class="floating-nav">
        <?php
        wp_nav_menu([
          'theme_location' => 'top-menu',
          'menu_class'     => 'floating-menu',
          'container'      => false,
        ]);
        ?>
      </nav>
    </header>




      
       

