<?php

namespace Application\Models;

use Irate\System;

/**
* UserModel model
*/
class UserModel extends \Irate\Core\Model {

  // Set public class variables
  public $isGuest  = true;
  public $identity = false;

  // Error is set during registration and login methods.
  public $error    = false;

  // Storing user information here for basic example.
  private $users = [
    0 => [
      'id'       => 1,
      'username' => 'admin',
      'email'    => 'admin@admin.com',
      'password' => 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3' // test
    ],
    1 => [
      'id'       => 1,
      'username' => 'user',
      'email'    => 'user@user.com',
      'password' => 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3' // test
    ],
  ];

  /**
   * Instantiate is ran after __construct in the parent class.
   * In this example, we will use this method to set
   * the session.
   */
  public function instantiate() {

    // Checking if a user session already exists.
    if ($this->session->userData('loggedIn') === true) {

      // Set the identity
      $this->setIdentity($this->session->userData('id'));

      // Set isGuest to false.
      $this->isGuest = false;
    }
  }

  /**
   * Handles login logic based on username
   * and password passed as arguments. If there is an
   * error, $this->error is set and can be accessed after
   * a return is made.
   * @param  string $username
   * @param  string $password
   * @return boolean
   */
  public function login($username, $password) {

    // Iterate through users array
    foreach ($this->users as $user) {

      // If a match is found
      if ($user['username'] === $username) {

        // Validate the password using sha1
        if (sha1($password) === $user['password']) {

          // Setup a new session array
          $session = ['loggedIn' => true, 'id' => $user['id'], 'username' => $user['username']];

          // Use userData to store data.
          $this->session->setUserData($session);

          // Set the class identity variable.
          $this->setIdentity($user);
          return true;
        }

        // Example of how to set error.
        $this->error = 'Incorrect password';
        return false;
      }
    }

    // Example of how to set error.
    $this->error = 'User does not exist';
    return false;
  }

  /**
   * Handles unsetting the userData
   * @return boolean
   */
  public function logout() {
    $this->session->unsetUserData();
    return true;
  }

  /**
   * Sets the class identity variable based on the
   * id passed. Will iterate through users until it
   * finds a match, then will set identity to said
   * data.
   * @param int $id
   */
  private function setIdentity($id) {
    $userData = false;
    foreach ($this->users as $user) {
      if ($user['id'] === $id) {
        $userData = $user;
      }
    }
    $this->identity = $userData;
    return true;
  }
}
