<?php

namespace App\Core;
use App\Controllers\Account;
use App\Controllers\AccountSecurity;
use App\Controllers\Admin;
use App\Controllers\Apps;
use App\Controllers\Websites;

require_once('src/core/request.php');

require_once('src/controllers/home.php');
require_once('src/controllers/blog.php');
require_once('src/controllers/contact.php');

require_once('src/controllers/apps.php');
require_once('src/controllers/websites.php');
require_once('src/controllers/posts.php');
require_once('src/controllers/post.php');

require_once('src/controllers/login.php');
require_once('src/controllers/register.php');

require_once('src/controllers/accountsecurity.php');
require_once('src/controllers/account.php');
require_once('src/controllers/admin.php');

use App\Controllers\Blog;
use App\Controllers\Contact;
use App\Controllers\Home;
use App\Controllers\Login;

use App\Controllers\Post;
use App\Controllers\Posts;

use App\Controllers\Register;
use App\Core\Request;
use App\Core\Exception;

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


                        case 'websites':
                            $websites = new Websites;
                            $websites->websites();
                            break;

                        case 'apps':
                            $apps = new Apps;
                            $apps->applications();
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
        } catch(\Exception $e) {
            $errorMsg = $e->getMessage();
            require('views/errors.php');
        }
    }
}