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