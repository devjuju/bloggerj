<?php

namespace App\Controllers;

use App\Core\Auth;
use App\Core\Request;
use App\Core\Session;
use App\Core\SessionFlash;
use App\Forms\FormLogin;
use App\Model\UsersModels;




class Login
{
    public function login1()
    {
        $request = new Request();
        $submit = $request->post('login');
        if (isset($submit)) {

            $login = new UsersModels($request->post('login'));
            $formLogin = new FormLogin($login);
            $controle = $formLogin->validate();

            if ($controle === true) {


                $user = $login->findOneByEmail();

                // Si l'utilisateur n'existe pas
                if ($user) {

                    // faire en sorte que l'adresse email reste dans le formulaire -> index.php de la vue
                    // par contre pas le mot de passe
                    if (password_verify($login->getPassword(), $user->password)) {
                        // Le mot de passe est bon
                        echo 'pass ok';
                        print_r($user);

                        if ($user->status == '1') {

                            $mySession = new Session;
                            $mySession->set('auth', 'role', $user->role);
                            $mySession->set('auth', 'avatar', $user->avatar);
                            $mySession->set('auth', 'lastname', $user->lastname);
                            $mySession->set('auth', 'firstname', $user->firstname);
                            $mySession->set('auth', 'email', $user->email);
                            $mySession->set('auth', 'username', $user->username);


                            $mySession->set('message', 'success', "<span class='fw-bold'>Succès:</span> Vous êtes connecté");

                            $mySession->set('message', 'class', "success");

                            $mySession->set('message', 'value', "bienvenue vous êtes connecté");



                            if ($mySession->get('auth', 'role') === 'administrateur') {
                                header('Location: index.php?action=dashboard');
                            } else {
                                header('Location: index.php');
                            }
                        } else { // statut = 0
                            $controle = [
                                'email' => 'Compte non validé'
                            ];
                        }
                    } else {
                        // Mauvais mot de passe

                        $controle = [
                            'email' => 'Identifiants incorrects'
                        ];
                    }
                } else {
                    // Utilisateur n'existe pas

                    $controle = [
                        'email' => 'Identifiants incorrects'
                    ];
                }
            }
        }






        require('../templates/frontend/login/index.php');
    }

    public function login()
    {
        $request = new Request();
        $submit = $request->post('login');
        if (isset($submit)) {

            $login = new UsersModels($request->post('login'));
            $formLogin = new FormLogin($login);
            $controle = $formLogin->validate();

            if ($controle === true) {


                $user = $login->findOneByEmail();

                // Si l'utilisateur n'existe pas
                if ($user) {

                    // faire en sorte que l'adresse email reste dans le formulaire -> index.php de la vue
                    // par contre pas le mot de passe
                    if (password_verify($login->getPassword(), $user->password)) {
                        // Le mot de passe est bon
                        echo 'pass ok';
                        print_r($user);

                        if ($user->status == '1') {


                            Auth::set('auth', 'role', $user->role);
                            Auth::set('auth', 'avatar', $user->avatar);
                            Auth::set('auth', 'lastname', $user->lastname);
                            Auth::set('auth', 'firstname', $user->firstname);
                            Auth::set('auth', 'email', $user->email);
                            Auth::set('auth', 'username', $user->username);


                            Auth::set('message', 'success', "<span class='fw-bold'>Succès:</span> Vous êtes connecté");

                            Auth::set('message', 'class', "success");

                            Auth::set('message', 'value', "bienvenue vous êtes connecté");
                            echo "<pre>";
                            var_dump(Auth::$auth);

                            header('Location: index.php');

                            if (Auth::get('auth', 'role') === 'administrateur') {
                                header('Location: index.php?action=admin');
                            } else {
                                header('Location: index.php');
                            }
                        } else { // statut = 0
                            $controle = [
                                'email' => 'Compte non validé'
                            ];
                        }
                    } else {
                        // Mauvais mot de passe

                        $controle = [
                            'email' => 'Identifiants incorrects'
                        ];
                    }
                } else {
                    // Utilisateur n'existe pas

                    $controle = [
                        'email' => 'Identifiants incorrects'
                    ];
                }
            }
        }






        require('../templates/frontend/login/index.php');
    }
}
