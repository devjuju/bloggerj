<?php

namespace App\Core;

use App\Controllers\Account;
use App\Controllers\AccountSecurity;
use App\Controllers\AccountSettings;
use App\Controllers\Admin;

use App\Controllers\Blog;
use App\Controllers\Comments;
use App\Controllers\Contact;
use App\Controllers\CreatePost;
use App\Controllers\CreateUser;
use App\Controllers\Dashboard;
use App\Controllers\Home;
use App\Controllers\Login;

use App\Controllers\Logout;
use App\Controllers\Post;
use App\Controllers\Posts;

use App\Controllers\Register;
use App\Controllers\UpdatePost;
use App\Controllers\UpdateUser;
use App\Controllers\Users;
use App\Core\Request;



/* Utilisation de la condition switch pour optimiser le code */

class Router
{
    protected $routes;
    public function run()
    {

        $request = new Request();
        try {
            if ($request->get('action')) {

                $routes = $request->get('action');
                switch ($routes) {

                    case 'contact':
                        $contact = new Contact();
                        $contact->contact();
                        break;


                    case 'login':
                        $login = new Login();
                        $login->login();
                        break;



                    case 'register':
                        $register = new Register();
                        $register->register();
                        break;

                    case 'account':
                        $account = new Account();
                        $account->account();
                        break;

                    case 'accountsettings':
                        $accountSettings = new AccountSettings();
                        $accountSettings->accountSettings();
                        break;

                    case 'accountsecurity':
                        $accountSecurity = new AccountSecurity;
                        $accountSecurity->accountSecurity();
                        break;



                    case 'blog':
                        $blog = new Blog();
                        $blog->blog();
                        break;

                    case 'posts':
                        $posts = new Posts();
                        $posts->posts();
                        break;

                    case 'post':
                        $post = new Post();
                        $post->post();
                        break;

                    case 'create_post':
                        $createPost = new CreatePost();
                        $createPost->createPost();
                        break;

                    case 'updatepost':
                        $updatePost = new UpdatePost();
                        $updatePost->updatePost();
                        break;

                    case 'comments':
                        $comments = new Comments();
                        $comments->comments();
                        break;

                    case 'users':
                        $users = new Users();
                        $users->users();
                        break;

                    case 'create_user':
                        $createUser = new CreateUser();
                        $createUser->createUser();
                        break;


                    case 'update_user':
                        $updateUser = new UpdateUser();
                        $updateUser->updateUser();
                        break;

                    case 'logout':
                        $logout = new Logout();
                        $logout->logout();
                        break;




                    case 'dashboard':
                        $dashboard = new Dashboard();
                        $dashboard->dashboard();
                        break;




                    case 'admin':
                        $admin = new Admin;
                        $admin->admin();
                        break;

                    case 'home':
                        $home = new Home();
                        $home->home();
                        break;

                    default:
                        break;
                }
            } else {
                $home = new Home();
                $home->home();
            }
        } catch (\Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();

            require('../templates/error.php');
        } finally {

            echo 'Une fatale erreur est survenue !';
        }
    }
}
