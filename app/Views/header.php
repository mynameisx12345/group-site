<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aces</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jph" href="/icons/group-logo.jpg"/>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css')?>" type="text/css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js')?>"><</script>

    <style>
      body{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: whitesmoke;
      }

     .content{
       width: 60%;
     }

     .main-body{
       height: 100%;
     }

     .main-body-caption{
       color: black;
       background-image: url("/images/brush-background.png");
       width: 400px;
     }

     .member{
       display: flex;
       flex-direction: column;
       align-items: center;
     }

     .padding-top-15px{
       padding-top: 15px;
     }
     .padding-right-15px{
       padding-right: 15px
     }
     .padding-left-15px{
       padding-left: 15px
     }

     
    .close {
      font-size: 1.5rem;
    }

    .col-12 img {
      opacity: 0.7;
      cursor: pointer;
      margin: 2rem;
      width: 100%;
    }

    .col-12 img:hover {
      opacity: 1;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>
</head>
<body>
<nav class="content navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">
    <img src="/icons/group-logo.jpg" height="30px" width="auto"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gallery">Gallery <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown"> 
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
         Yow! Check This Out! <img src="/icons/smiley-heart.png" width="30px" height="auto">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/kenneth">
            <img src="/icons/tough.jpg" width="30px" height="auto"> Kenneth - The Tough One
          </a>
          <a class="dropdown-item" href="/jorelyn">
            <img src="/icons/classy.png" width="30px" height="auto"> Jorelyn - The Classy One
          </a>
          <a class="dropdown-item" href="/nikka">
            <img src="/icons/typical.png" width="30px" height="auto"> Nikka - The Typical One
          </a>
          <a class="dropdown-item" href="/lesly">
            <img src="/icons/rebel.jpg" width="30px" height="auto"> Lesly - The Rebellious One
          </a>
          <a class="dropdown-item" href="/jessa">
            <img src="/icons/childish.png" width="30px" height="auto"> Jessa - The Cheerful One
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
