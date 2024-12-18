<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- title -->
    <title>HelpaHelper</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="" />
    <!-- google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap"
      rel="stylesheet"
    />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Bootstrap Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-right: 20px;
        max-width: 1200px;
      }
    </style>
  </head>
  <body>
    <!-- Navigation Menu -->
    <nav class="navbar">
      <a href="">
        <img
          id="logo-in-green-circle"
          src="assets\img\logo.png"
          alt="Organization Logo"
        />
      </a>
      <div class="nav-items">
        <ul style="list-style: none; padding: 0; margin: 0">
          <li><a href="index.html">Home</a></li>
          <li><a href="">Fundraiser</a></li>
          <li>
            <a href="" id="help-a-helper"
              ><img
                id="logo-in-nav-helper"
                src="assets\img\giveahandLogo.png"
                alt="logo"
              />HelpaHelper</a
            >
          </li>
          <li><i class="bi bi-search" id="search-icon"></i></li>

          <li><a href="">Donate</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </div>
      <a href="">
        <img
          id="logo-in-green-circle"
          src="assets\img\profile.png"
          alt="Organization Logo"
        />
      </a>
    </nav>

    <div>
      <input
        type="text"
        id="search-bar"
        class="form-control search-bar-style"
        placeholder="Search..."
      />
    </div>
    <section id="empower">
      <div id="empower-head-and-i" class="empower-container">
        <div class="empower-text" id="text-and-button">
          <h1 id="empower-heading">Empower Change, One Donation at a Time.</h1>
          <button class="start-a-give-a-hand-btn" id="start-a-fundraiser-btn">
            <a href="your-fundraiser.html">Start a Fundraiser</a>
          </button>
        </div>
        <div class="empower-image">
          <img src="assets/img/empower.png" alt="empower" />
        </div>
      </div>

      <p class="ugandan-based-paragraph">
        We are a Uganda-based charity organization dedicated to helping
        individuals and communities achieve their dreams through free
        fundraising support. Powered by Kakebe Technologies, we provide a
        platform where anyone can create, manage, and promote their fundraising
        campaigns without any cost.
      </p>

      <section id="transactions-donars-easy-section">
        <div id="transactions-donars-easy">
          <div>
            <button class="number-btn">1</button>
          </div>
          <div class="picture-and-paragraph">
            <img src="assets\img\secure.png" alt="Secure Transactions" />
            <p class="paragrapghs">Secure Transactions</p>
          </div>
        </div>

        <div id="transactions-donars-easy">
          <div>
            <button class="number-btn">2</button>
          </div>
          <div>
            <img
              src="assets\img\shareLinkToDonars.png"
              alt="Share links to Donars"
            />
            <p class="paragrapghs">Share links to Donars</p>
          </div>
        </div>

        <div id="transactions-donars-easy">
          <div>
            <button class="number-btn">3</button>
          </div>
          <div>
            <div id="easy-to-you-img-div">
              <img
                src="assets\img\easy.png"
                alt="Easy To Share"
                id="easy-to-you-img"
              />
            </div>
            <p class="paragrapghs">Easy To You</p>
          </div>
        </div>
      </section>

      <div class="transaction-fee-container">
        <h1 class="fundraise-headings" id="why-we-paragraph">
          Why we have transaction fee
        </h1>

        <div
          class="transaction-content empower-container"
          id="transaction-fee-container"
        >
          <p class="ugandan-based-paragraph" id="transaction-fee-paragraph">
            Transaction fees help cover the costs of processing donations,
            including bank charges, payment systems, to ensure secure and
            efficient handling of your contributions.
          </p>
          <img src="assets/img/transactionFee.png" alt="transaction" />
        </div>
      </div>
    </section>
  </body>
</html>
