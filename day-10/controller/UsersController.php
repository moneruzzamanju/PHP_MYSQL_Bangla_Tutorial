<?php
session_start();
include("../Dbconnection/dbconnection.php");
include("../model/users.php");
$user = new Users();

switch ($_REQUEST['action']) {
    // case 'login_process':
    //     $getUser = $user->getUserByEmail($_POST['email']);
    //     if(count($getUser) > 0 && $getUser['email']!='')
    //     {
    //         if($getUser['password']==md5($_POST['password']))
    //         {
    //             $_SESSION['user_id'] = $getUser['id'];
    //             $_SESSION['email'] = $getUser['email'];
    //             $_SESSION['name'] = $getUser['name'];
    //             $_SESSION['user_type'] = $getUser['user_type'];
    //             $_SESSION['status'] = $getUser['status'];
    //             header('Location:../index.php');
    //         }
    //         else{
    //             $_SESSION['message'] = "<div class='alert alert-danger>Invalide Password !!</div>";
    //         }
    //     }
    //     else
    //     {
    //         $_SESSION['message'] = "<div class='alert alert-danger>Invalide E-mail !!</div>";
    //         header('Location:../login.php');
            
    //     }
        
    // break;

    case "login_process":

        $getUser = $user->getUserByEmail($_POST['email']);
     
           if(count($getUser) > 0 && $getUser['email']!='')
                {
                    if($getUser['password']==md5($_POST['password']))
                            {
     
                         $_SESSION['user_id'] = $getUser['id'];
                         $_SESSION['email'] = $getUser['email'];
                         $_SESSION['name'] = $getUser['name'];
                         $_SESSION['user_type'] = $getUser['user_type'];
                         $_SESSION['status'] = $getUser['status'];
     
                            header("Location:../index.php");
     
                            }
                            else{
                                 $_SESSION['message'] = "<div class='alert alert-danger'>Invalid Password!!</div>";
                                 header("Location:../login.php");
                            }
                }
                else{
                  $_SESSION['message'] = "<div class='alert alert-danger'>Invalid E-Mail!!</div>";
                    header("Location:../login.php");
                }
     
          break;
    
    default:
        # code...
        break;
}

?>