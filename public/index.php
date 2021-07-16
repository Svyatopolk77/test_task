<?php  
session_start();

require __DIR__.'/../config/init.php';
require __DIR__.'/../vendor/autoload.php';
use App\Models\Message;
use App\Router;
use App\Models\Comment;

$router=new Router();
$message=new Message();
$comment=new Comment();

$router->get('/','home.php',array(
	'pagetitle'=>'Главная страница',
	'content'=>$message->getAll()
));
$router->get('/message','message.php',array(
	'pagetitle'=>$message->getById($_GET['id'])['title'],
	'content'=>$message->getById($_GET['id']),
	'comments'=>$comment->getAllByMsgId($_GET['id'])
));
$router->get('/new/message','newmessage.php');
$router->get('/edit','edit.php',array(
	'pagetitle'=>'Редактирование сообщения',
	'content'=>$message->getById($_GET['id']),
));


$router->post('/new/message-post','/',$message,'save');
$router->post('/new/comment-post','/message?id='.$_POST['id'],$comment,'save');
$router->post('/edit/message-post',"/message?id=".$_POST['id'],$message,'edit');