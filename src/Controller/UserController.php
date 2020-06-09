<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserController extends AbstractController
{
    public function userSpace()
    {
        return $this->render('user/user_space.html.twig');
    }

    
    public function forgottenPw()
    {
        // The user enters his/her e-mail, it is verified and we send him an email with the reset password link

        // // Check the field and the e-mail
        // if(isset($_POST) && !empty($_POST)){

        //     $safe = array_map('strip_tags', $_POST);

        //     // ckeck if the email exists


        //     // Prepare the message
        //     $messageHTML = '<p>Bonjour'.$user['pseudo'].',';
        //     $messageHTML.= '<br>Vous avez oublié votre mot de passe et vous souhaitez le réinitialiser ? <br> Veuillez trouver ci-dessous le lien pour réinitialiser votre mot de passe</p>';
        //     $messageHTML.= '<ul>';
        //     $messageHTML.= '<li>Nom & prénom : '.mb_strtoupper($safe['lastname']).' '.$safe['firstname'].'</li>';
        //     $messageHTML.= '<li>Téléphone : '.$safe['phone'].' '.'</li>';
        //     $messageHTML.= '<li>Message : '.nl2br($safe['message']).' '.'</li>';
        //     $messageHTML.= '</ul>';


        // }



        return $this->render('user/user_forgottenPw.html.twig');
    }

    
    public function resetPw()
    {


        return $this->render('user/user_resetPw.html.twig');
    }
}


