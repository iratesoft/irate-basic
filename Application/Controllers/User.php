<?php

namespace Application\Controllers;

use Application\Models\UserModel;

/**
 * User controller
 */
class User extends \Irate\Core\Controller {

  /**
   * Responsible for showing the login UI.
   */
  protected function login() {
    $this->view->renderTemplate('user/login');
  }

  /**
   * Activated after login form has been submitted.
   * Below is full of great examples for CSRF tokens,
   * how to fetch $_POST variables, setting flashdata,
   * and more.
   */
  protected function auth() {
    // Requires CSRF for this route.
    $this->security->requireCsrf();

    // Instantiate the User Model.
    $User = new UserModel();

    // If not a guest (Meaning logged in), redirect.
    if (!$User->isGuest) $this->redirect('/');

    // Get the form input data.
    $username = $this->request->post('username');
    $password = $this->request->post('password');

    // Attempt the login.
    $login = $User->login($username, $password);

    // If returned false, then login failed.
    if (!$login) {
      // Set the login_error in the flashData
      $this->session->setFlashData('login_error', $User->error);

      // Redirect to the login page again.
      return $this->redirect('/user/login');
    }

    // If login is success, return to the homepage.
    return $this->redirect('/');
  }

  /**
   * Placeholder for registration process.
   */
  protected function register() { }

  /**
   * Responsible for handling the user logout
   * logic.
   */
  protected function logout() {
    // Instantiate the model
    $User = new UserModel();

    // If is a guest, no need to do anything.
    if ($User->isGuest) return $this->redirect('/');

    // Log the user out
    $User->logout();

    // Redirect to the homepage.
    return $this->redirect('/');
  }
}
