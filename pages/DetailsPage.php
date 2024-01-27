<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="stylesheet" href="../CSS/detailsPage.css" />
    <title>Document</title>
  </head>
  <body>

  <?php 
    session_start();

    if (!isset($_SESSION['id'])) {
      header('Location: ../pages/Signin.php');
      exit();
    }
  ?>
    <div class="details-wrapper">
      
      <div class="side-bar">
        <div class="user-side-bar">
          <div class="user-info-side-bar">
            <p class="name"><?php echo $_SESSION['fullName']; ?></p>
            <button><a href="#" id="log-out">Log out</a></button>
          </div>
          <img src="<?php echo $_SESSION['imageData']; ?>" alt="profile image" />
        </div>
        
        <div class="content-wrap">
          <div class="content-side-bar">
            <i class="bx bx-briefcase-alt-2"></i>
            <div class="content-info-side-bar">
              <a href="#learning-page-wrapper"
              >Skill Development and learning</a
              >
            </div>
          </div>
          
          <div class="content-side-bar">
            <i class="bx bx-network-chart"></i>
            <div class="content-info-side-bar">
              <a href="#community-wrapper"> Community and Networking</a>
            </div>
          </div>

          <div class="content-side-bar">
            <i class="bx bx-support"></i>
            <div class="content-info-side-bar">
              <a href="#support-page-wrapper">Support Network</a>
            </div>
          </div>
          
          <div class="content-side-bar">
            <i class="bx bx-list-minus"></i>
            <div class="content-info-side-bar">
              <a href="#Event-page-wrapper">Event Listings</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="de-wrapper">
        <div class="logo"><i class='bx bx-handicap'></i> WebAbility</div>
        <div id="learning-page-wrapper">
          <div class="title">
            <h2>Learning</h2>
            <p>
              Use Kinnectric to connect with people you know.<br />
              Kinnectric can also connect you to people outside your usual
              circle.
            </p>
          </div>
          <div class="wrap">
            <div class="cont-wrapper">
              <i class="bx bxs-school"></i>
              <div class="wrap-info">
                <div>
                  <h2>Education</h2>
                  <p>
                    There is just enough space here for several lines of text.
                    Make sure you get your message across clearly yet concisely.
                  </p>
                </div>
                <i class="bx bx-right-arrow-alt" id="edu-arrow"></i>
              </div>
            </div>
            <div class="detail-wrap hide" >
              <p ><a href="./VideosPage.html?q=blind-community" >Blind Community</a></p>
              <p><a href="./VideosPage.html?q=deaf-community">Deaf Community</a></p>
              <p><a href="./VideosPage.html?q=disable-community-support">For Other Disabilities</a></p>
            </div>
          </div>
          <div class="wrap">
            <div class="cont-wrapper">
              <i class="bx bx-play-circle"></i>
              <div class="wrap-info">
                <div>
                  <h2>Watch Videos</h2>
                  <p>
                    There is just enough space here for several lines of text.
                    Make sure you get your message across clearly yet concisely.
                  </p>
                </div>
                <i class="bx  bx-right-arrow-alt" id="video-arrow"></i>
              </div>
            </div>
            <div class="detail-wraps hide">
              <p><a href="./VideosPage.html?q=emotional-support">Emotional Support</a></p>
              <p><a href="./VideosPage.html?q=documenteries">Documenteries</a></p>
              <p><a href="./VideosPage.html?q=additional-skills">Additional skills</a></p>
            </div>
          </div>
        </div>
        <div id="community-wrapper">
          <div class="title">
            <h2>Networking</h2>
            <p>
              Building Connections and Networks for Differently-Abled
              Individuals.
            </p>
          </div>

          <div class="search-bar">
            <input type="text" id="search" placeholder="Search..." />
            <i class="bx bx-search-alt-2"></i>
          </div>

          <div class="searched-users">
            <div class="users-info">
              <img src="../assets/hero.png" alt="profile" />
              <h6>Byline Bookstore</h6>
              <p>
                <i class="bx bx-location-plus"></i> Addis Abeba
                <br />
                <i class="bx bxs-phone-call"></i> 095645443
                <br />
                <i class="bx bxl-telegram"></i> @Byline Bookstore
              </p>
            </div>

            <div class="users-info">
              <img src="../assets/hero.png" alt="profile" />
              <h6>Byline Bookstore</h6>
              <p>
                <i class="bx bx-location-plus"></i> Addis Abeba
                <br />
                <i class="bx bxs-phone-call"></i> 095645443
                <br />
                <i class="bx bxl-telegram"></i> @Byline Bookstore
              </p>
            </div>

            <div class="users-info">
              <img src="../assets/hero.png" alt="profile" />
              <h6>Byline Bookstore</h6>
              <p>
                <i class="bx bx-location-plus"></i> Addis Abeba
                <br />
                <i class="bx bxs-phone-call"></i> 095645443
                <br />
                <i class="bx bxl-telegram"></i> @Byline Bookstore
              </p>
            </div>

            <div class="users-info">
              <img src="../assets/hero.png" alt="profile" />
              <h6>Byline Bookstore</h6>
              <p>
                <i class="bx bx-location-plus"></i> Addis Abeba
                <br />
                <i class="bx bxs-phone-call"></i> 095645443
                <br />
                <i class="bx bxl-telegram"></i> @Byline Bookstore
              </p>
            </div>
          </div>
        </div>

        <div id="support-page-wrapper">
          <div class="title">
            <h2>Get Help</h2>
            <p>
              Use Kinnectric to connect with people you know. Kinnectric can
              also connect you to people outside your usual circle.
            </p>
          </div>

          <div class="support-wrapper">
            <div id="first-card" class="card">
              <div class="info">
                <h4>Don't hesitate to contact us</h4>

                <div class="detail-info">
                  <h1>Mengistu Derage</h1>
                  <p>
                    <i class="bx bx-phone"></i> Phone:
                    <br />
                    0934532367
                  </p>

                  <p>
                    <i class="bx bxl-telegram"></i> Telegram:
                    <br />
                    @mengistuderage
                  </p>

                  <p>
                    <i class="bx bx-envelope"></i> Email:
                    <br />
                    mengistuderage@gmail.com
                  </p>

                  <p>
                    <i class="bx bx-current-location"></i> Location:
                    <br />
                    Jimma, JIT University
                  </p>
                </div>
              </div>

              <img src="../assets/customerservice.jpg" alt="Get Support" />

              <button><a href="#second-card"><i class="bx bx-right-arrow-alt"></i></a></button>

            </div>

            <div id="second-card" class="card">
              <div class="info">
                <h4>Don't hesitate to contact us</h4>

                <div class="detail-info">
                  <h1>Mengistu Derage</h1>
                  <p>
                    <i class="bx bx-phone"></i> Phone:
                    <br />
                    0934532367
                  </p>

                  <p>
                    <i class="bx bxl-telegram"></i> Telegram:
                    <br />
                    @mengistuderage
                  </p>

                  <p>
                    <i class="bx bx-envelope"></i> Email:
                    <br />
                    mengistuderage@gmail.com
                  </p>

                  <p>
                    <i class="bx bx-current-location"></i> Location:
                    <br />
                    Jimma, JIT University
                  </p>
                </div>
              </div>

              <img src="../assets/customerservice.jpg" alt="Get Support" />

              <button><a href="#first-card"><i class="bx bx-left-arrow-alt"></i></a></button>
            </div>
          </div>
        </div>

        <div id="Event-page-wrapper">
          <h1>Events</h1>
          <div class="Event-Listings">
            <div class="event">
              <img src="../assets/Events.png" alt="Event" />
              <div class="Event-discription">
                <h2>Our Biggest</h2>
                <p>
                  We're going global! This year's Mega Media Summit will be
                  streamed on a virtual platform across eight time zones, with
                  participants worldwide. <br />
                  Get the latest industry insights, mingle with fellow
                  practitioners, and get inspired by our keynote speakers during
                  this exciting 3-day virtual conference.
                </p>
                <button>
                  Reserve your seat <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
            <div class="event">
              <img src="../assets/Events.png" alt="Event" />
              <div class="Event-discription">
                <h2>Our Biggest</h2>
                <p>
                  We're going global! This year's Mega Media Summit will be
                  streamed on a virtual platform across eight time zones, with
                  participants worldwide. <br />
                  Get the latest industry insights, mingle with fellow
                  practitioners, and get inspired by our keynote speakers during
                  this exciting 3-day virtual conference.
                </p>
                <button>
                  Reserve your seat <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const logOutBtn = document.getElementById('log-out');
        logOutBtn.addEventListener('click', function () {
          window.location.href = '../php/logout.php';
        });
      });
    </script>
    <script src="../JS/detailsPage.js"></script>
  </body>
</html>
