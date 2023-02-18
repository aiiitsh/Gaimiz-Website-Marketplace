<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
 
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaimiz | Home </title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header>

    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.png" height="80" width="170" alt="NAFT logo">
      </a>

      <div class="header-right">

        <div class="header-nav-wrapper">

          <button class="navbar-toggle-btn" data-navbar-toggle-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

          <nav class="navbar" data-navbar>

            <ul class="navbar-list">

              <li>
                <a href="#" class="navbar-link">Home</a>
              </li>

              <li>
                <a href="#" class="navbar-link">About</a>
              </li>

              <li>
                <a href="#" class="navbar-link">laptop Skin</a>
              </li>

              <li>
                <a href="#" class="navbar-link">Console Skin</a>
              </li>

              

              

              <li>
                <a href="#" class="navbar-link">Contact</a>
              </li>
              <a href="https://www.jumia.com/">
                <img alt="Qries" src="cart-70-512.png"width="25px" height="25px" />
             </a>
             <!--************************************************************************-->
             <span  class="counter_circle"><center id="counter_circle"></center></span>

            </ul>

          </nav>

        </div>

        <div class="header-actions">
          <input type="search" placeholder="Search" class="search-field">
          <form action="login.php">
          <button class="btn btn-primary">Sign in</button>
          </form>
        </div>

      </div>

    </div>

  </header>





  <main>

    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">WE PREMIUMIZE GAMING <br> <span> GAIMIZ</span></h1>

            <p class="hero-text">
              We create accessories for gamers with premium quality 
            </p>

            <div class="btn-group">
              <button class="btn btn-primary">Laptop Skin</button>

              <button class="btn btn-secondary">Console Skin</button>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/KEa1.gif" alt="nft art">
          </figure>

        </div>
      </section>





      <!-- 
        - #NEW PRODUCT
      -->

      <section class="new-product">
        <div class="container">

          <div class="section-header-wrapper">

            <h2 class="h2 section-title">Newest Items</h2>

            <button class="btn btn-primary">View all</button>

          </div>

          <ul class="product-list">

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/new-item-1.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/new-item-2.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@Aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/new-item-3.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@Aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/new-item-4.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@Aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about">
        <div class="container">

          <h2 class="h2 about-title">Create and sell your skins</h2>

          <ol class="about-list">

            <li class="about-item">
              <div class="about-card">

                <div class="card-number">01</div>

                <div class="card-icon">
                  <img src="./assets/images/single-create-sell-item-1.png" alt="wallet icon">
                </div>

                <h3 class="h3 about-card-title">Set up Your Wallet</h3>

                <p class="about-card-text">
                  There are many variations of passagi Ipsum available but the majorty have eration in some form, by
                  injected
                </p>

              </div>
            </li>

            <li class="about-item">
              <div class="about-card">

                <div class="card-number">02</div>

                <div class="card-icon">
                  <img src="./assets/images/single-create-sell-item-2.png" alt="collection icon">
                </div>

                <h3 class="h3 about-card-title">Create Your Collection</h3>

                <p class="about-card-text">
                  There are many variations of passagi Ipsum available but the majorty have eration in some form, by
                  injected
                </p>

              </div>
            </li>

            <li class="about-item">
              <div class="about-card">

                <div class="card-number">03</div>

                <div class="card-icon">
                  <img src="./assets/images/single-create-sell-item-3.png" alt="folder icon">
                </div>

                <h3 class="h3 about-card-title">Add Your skins</h3>

                <p class="about-card-text">
                  There are many variations of passagi Ipsum available but the majorty have eration in some form, by
                  injected
                </p>

              </div>
            </li>

            <li class="about-item">
              <div class="about-card">

                <div class="card-number">04</div>

                <div class="card-icon">
                  <img src="./assets/images/single-create-sell-item-4.png" alt="diamond icon">
                </div>

                <h3 class="h3 about-card-title">Sell Your skins</h3>

                <p class="about-card-text">
                  There are many variations of passagi Ipsum available but the majorty have eration in some form, by
                  injected
                </p>

              </div>
            </li>

          </ol>

        </div>
      </section>





      <!-- 
        - #EXPLORE PRODUCT
      -->

      <section class="explore-product">
        <div class="container">

          <div class="section-header-wrapper">

            <h2 class="h2 section-title">Explore Product</h2>

            <button class="btn btn-primary">Explore</button>

          </div>

          <ul class="product-list">

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-1.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@Aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-2.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-3.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiitish</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-4.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiith</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-5.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-6.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-7.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

            <li class="product-item">

              <div class="product-card" tabindex="0">

                <figure class="product-banner">

                  <img src="./assets/images/explore-product-8.jpg" alt="Dimond riding a blue body art">

                  <div class="product-actions">
                    <button class="product-card-menu">
                      <ion-icon name="ellipsis-horizontal"></ion-icon>
                    </button>

                    <button class="add-to-whishlist" data-whishlist-btn>
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <button class="place-bid-btn">Place bid</button>

                </figure>

                <div class="product-content">

                  <a href="#" onclick="hamadacounter()" class="h4 product-title">Gaimiz Skin for Dell G3</a>

                  <div class="product-meta">

                    <div class="product-author">

                      <figure class="author-img">
                        <img src="./assets/images/bidding-user.png" alt="Jack Reacher">
                      </figure>

                      <div class="author-content">
                        <h4 class="h5 author-title">Ahmed Hesham</h4>

                        <a href="#" class="author-username">@aiiitsh</a>
                      </div>

                    </div>

                    <div class="product-price">
                      <data value="250">250 LE</data>

                      <p class="label">Current Bid</p>
                    </div>

                  </div>

                  <div class="product-footer">
                    <p class="total-bid">12+ skins.</p>

                    <button class="tag">New</button>
                  </div>

                </div>

              </div>

            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TOP SELLER
      -->

      <section class="top-seller">
        <div class="container">

          <h2 class="h2 top-seller-title">
            Top seller in <span>1</span> day
            <ion-icon name="chevron-down"></ion-icon>
          </h2>

          <ol class="top-seller-list">

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">01</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-01.png" alt="Brodband">

                  <div class="avatar-badge">
                    <ion-icon name="checkmark-outline"></ion-icon>
                  </div>
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Ahmed Hesham</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">02</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-02.png" alt="Alexander">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Ahmed Hassan</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">03</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-03.png" alt="William Jeck">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Ahmed Khaled</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">04</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-04.png" alt="Henry Jhon">

                  <div class="avatar-badge">
                    <ion-icon name="checkmark-outline"></ion-icon>
                  </div>
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Ahmed Emad</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">05</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-05.png" alt="James Thomas">

                  <div class="avatar-badge">
                    <ion-icon name="checkmark-outline"></ion-icon>
                  </div>
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Ahmed Kassem</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">06</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-06.png" alt="Anthony Roy">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Ahmed Tarek</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">07</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-07.png" alt="Chritopher">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Mohamed Sameh</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">08</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-08.png" alt="Elijabeth Ran">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Abdelmoez</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">09</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-01.png" alt="Brodband HR">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Omar Ashraf</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">10</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-02.png" alt="Michel Raw">

                  <div class="avatar-badge">
                    <ion-icon name="checkmark-outline"></ion-icon>
                  </div>
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Badawy</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">11</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-03.png" alt="Liam Dylan">

                  <div class="avatar-badge">
                    <ion-icon name="checkmark-outline"></ion-icon>
                  </div>
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">Bahar</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

            <li class="top-seller-item">
              <a href="#" class="top-seller-card">

                <div class="card-number">12</div>

                <figure class="card-avatar">
                  <img src="./assets/images/seller-04.png" alt="Thomas Jar">
                </figure>

                <div class="card-content">
                  <h3 class="h5 card-title">7oka Basha</h3>

                  <data value="2500000">$2500,000</data>
                </div>

              </a>
            </li>

          </ol>

        </div>
      </section>

    </article>

  </main>





  <!-- 
    - #FOOTER
  -->

  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" height="150" width="300" alt="NAFT logo">
          </a>

          <p class="footer-brand-text">
            We love you <3
          </p>

          <h3 class="h4 social-title">Join the community</h3>

          <ul class="social-list">

            <li>
              <a href="https://github.com/aiiitsh" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://facebook.com/gaimiz.eg" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/gaimiz.eg/" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/c/gaimiz" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <h3 class="h3 footer-item-title">Marketplace</h3>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Gaming</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Product</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">All skins</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Social Network</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Domain Names</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Collectibles</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <h3 class="h3 footer-item-title">Explore</h3>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Featured Drops</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Live Auctions</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">All skins</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Collections</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Top Seller</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Items Details</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <h3 class="h3 footer-item-title">Supports</h3>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Settings & Privacy</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Help & Support</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Live Auctions</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Item Details</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">24/7 Supports</a>
            </li>

            <li class="footer-item">
              <a href="#" class="footer-link">Blog</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="https://github.com/aiiitsh">@Aiiitsh</a> all rights reserved
        </p>

        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>

          <a href="#">Terms & Conditions</a>
        </div>

      </div>
    </div>

  </footer>





  <!--
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>