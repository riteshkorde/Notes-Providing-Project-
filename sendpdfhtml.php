<?php include 'sendpdf.php' ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free online notes for University Engineering</title>
  

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-abs-1.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/hero-abs-2.png" media="min-width(768px)">
<link rel="stylesheet" href="sendpdf.css">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="index.html" class="logo">Engg Notes</a>
      </h1>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="index.html" class="logo">Engg Notes</a>

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.html" class="navbar-link" data-nav-toggler>Home</a>
          </li>

          <li class="navbar-item">
            <a href="coding.html" class="navbar-link" data-nav-toggler>Coding</a>
          </li>

          <li class="navbar-item">

            <a href="Engineering.html" class="navbar-link" data-nav-toggler>Placement</a>

          </li>

          <li class="navbar-item">
            <a href="sendpdfhtml.php" class="navbar-link" data-nav-toggler>Upload Nots</a>
          </li>

          <li class="navbar-item">
            <a href="Resume-Builder-master/Resumeindex.html" class="navbar-link" data-nav-toggler>Resume</a>
          </li>

          <li class="navbar-item">
            <a href="free course.html" class="navbar-link" data-nav-toggler>Free Cources</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <!-- <a href="#" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

          <span class="span">Login / Register</span>
        </a> -->

        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

 

 <div class="container1">

 
 <form method="POST" action="https://formsubmit.co/riteshkorde10@gmail.com" enctype="multipart/form-data">
  <input  type="email" name="email" placeholder="Your email">
  <textarea name="message" placeholder="Notes Name"></textarea>
  <input type="file" name="attachment" accept="image/png, image/jpeg ,application/pdf">
  <input type="hidden" name="_webhook" value="https://yourdomain.co/your-webhook">
  <button class="btn" type="submit">Send Notes</button>
</form>

 
<!--  
  <form method="post" class="form" enctype="multipart/form-data">
   <div class="heading">
    <h2>Upload PDF nots</h2>
   

 
</form>
   </div> -->
<!--  
   <div class="formGroup">
    <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" required="">
   </div>
 
   <div class="formGroup">
    <input type="email" name="email" id="email" placeholder="Email ID" autocomplete="off" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" required="">
   </div>
 
   <div class="formGroup">
    <input type="text" name="subject" placeholder="Subject" autocomplete="off" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>" required="">
   </div>
 
   <div class="formGroup">
    <input type="text" name="message" placeholder="Your Message" autocomplete="off" <?php echo !empty($postData['message']) ? $postData['message'] : ''; ?> required="">
   </div>
 
   <div class="formGroup">
    <input type="file" name="attachment" class="form-control" multiple>
   </div> -->
 
   <!-- Display submission status -->
   <!-- <div class="status">
    <?php if (!empty($statusMsg)) { ?>
     <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>">
      <?php echo $statusMsg; ?></p>
    <?php } ?>
   </div>
 
   <div class="formGroup">
    <button class="btn2" name="submit" value="SUBMIT" type="submit">SUBMIT </button>
   </div>
 
    </form >
 </div> -->
 




</body>
 
</html>