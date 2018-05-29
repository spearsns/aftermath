<?php
session_start();

$onlineUsers = array();

// Check if the user is logged in.
if (isset($_SESSION['username']) && isset($_COOKIE['username']) &&
    $_SESSION['username'] === $_COOKIE['username'] && 
    isset($_SESSION['username']) && $_SESSION['user_status'] === true) {
  
  include_once __DIR__ . '/../includes/OnlineFriends.php';

  $app = new Online();
  // Get the list of online friends for the current user.
  $online_friends = $app->getOnlineFriends($_SESSION['user_id']);
  $html = '';
  if (!empty($online_friends)) {
    foreach ($online_friends as $friend) {
      $html .= '<li class="list-group-item">' .
              '<span class="badge">•</span>' .
              $friend['name'] .
              '</li>';
    }
  }
  // Update the user's last active time.
  $app->updateOnline($_SESSION['user_id']); 
}

// Send response to browser.
if ($html !== '') echo $html;