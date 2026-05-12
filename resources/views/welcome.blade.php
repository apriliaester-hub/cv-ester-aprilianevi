<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Creative CV</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      font-family:'Poppins', sans-serif;
      background:#e9e9e9;
      color:#1d1d1d;
    }

    header{
      background:#5c38ff;
      color:white;
      padding:20px 8%;
      display:flex;
      justify-content:space-between;
      align-items:center;
    }

    nav a{
      color:white;
      text-decoration:none;
      margin-left:20px;
    }

    .container{
      width:90%;
      max-width:1200px;
      margin:auto;
      padding:60px 0;
    }

    .hero{
      display:grid;
      grid-template-columns:350px 1fr;
      gap:60px;
      align-items:center;
    }

    .profile-img img{
      width:100%;
      border-radius:30px;
      border:10px solid #5c38ff;
    }

    .hero-text h2{
      font-size:90px;
      color:#5c38ff;
      text-shadow:6px 6px black;
    }

    .hero-text p{
      font-size:22px;
      margin:20px 0;
      color:#5c38ff;
    }

    .tags{
      display:flex;
      gap:15px;
      flex-wrap:wrap;
    }

    .tag{
      padding:10px 20px;
      border-radius:40px;
      font-weight:600;
    }

    .green{
      background:#8cff26;
    }

    .purple{
      background:#5c38ff;
      color:white;
    }

    footer{
      background:#5c38ff;
      color:white;
      text-align:center;
      padding:30px;
      margin-top:60px;
    }

    @media(max-width:900px){
      .hero{
        grid-template-columns:1fr;
      }

      .hero-text h2{
        font-size:60px;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>MY CV</h1>

  <nav>
    <a href="#">About</a>
    <a href="#">Experience</a>
    <a href="#">Contact</a>
  </nav>
</header>

<div class="container">

  <div class="hero">

    <div class="profile-img">
      <img src="https://picsum.photos/500/700" alt="">
    </div>

    <div class="hero-text">

      <h2>HELLO</h2>

      <p>
        I'm a designer who finds joy in crafting visual identities
      </p>

      <div class="tags">
        <div class="tag green">Branding</div>
        <div class="tag purple">Logo Design</div>
        <div class="tag green">Poster</div>
      </div>

    </div>

  </div>

</div>

<footer>
  <p>© 2026 Creative CV</p>
</footer>

</body>
</html>