<?php

class RegisterController extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->load_model('Users');
        $this->view->setLayout('default');
    }

    public function loginAction()
    {
        $validation = new Validate();
        if ($_POST) {
            //form validation
            $validation->check($_POST, [
                'username' => [
                    'display' => "Username",
                    'required' => true,
                    'min' => 5,
                    'max' => 15
                ],
                'password' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 6
                ]
            ],true);
            if ($validation->passed()) {
                $user = $this->UsersModel->findByUsername($_POST['username']);
                if ($user && password_verify(Input::get('password'), $user->password)) {
                    $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true : false;
                    $user->login($remember);
                    Router::redirect('');
                } else {
                    $validation->addError("Your email or password is incorrect");
                }
            }
        }
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('register/login');
    }

    public function registerAction()
    {
        $validation = new Validate();
        $posted_values= ['fname'=>'','lname'=>'','username'=>'','email'=>'','password'=>'','confirm'=>''];
        if ($_POST) {
            $posted_values = H::posted_values($_POST);
            //form validation
            $validation->check($_POST, [
                'fname' => [
                    'display' => "First Name",
                    'required' => true,
                    'min' => 4,
                    'max' => 12
                ],
                'lname' => [
                    'display' => 'Last Name',
                    'required' => true,
                    'min' => 4,
                    'max' => 12
                ],
                'username' => [
                    'display' => 'Username',
                    'required' => true,
                    'min' => 6,
                    'unique'=> 'users'
                ],
                'email' => [
                    'display' => 'Email',
                    'required' => true,
                    'valid_email'=>true,
                    'unique'=> 'users'
                ],
                'password' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 6,
                    'max'=>15
                ],
                'confirm' => [
                    'display' => 'Password confirm',
                    'required' => true,
                    'matches' => 'password'
                ],

            ],true);
            if ($validation->passed()) {
                $newUser = new Users();
                $newUser->registerNewUser($_POST);
                Router::redirect('');
            }
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();

        $this->view->render('register/register');
    }

    public function logoutAction()
    {
        if (Users::currentUser()) {
            Users::currentUser()->logout();
        }
        Router::redirect('register/login');
    }
}