<?php 
class Message {
    const sendingMessage = "hi i am mahdi constant";
    public function getMessage (){
         echo self::sendingMessage;
    }
}
$message = new Message();
$message->getMessage();