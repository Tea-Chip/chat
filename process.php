*                               { margin: 0; padding: 0; }
body                            { font: 12px "Lucida Grande", Sans-Serif; background: url(images/bg.png); }
h2                              { color: #fa9f00; font: 30px Helvetica, Sans-Serif; margin: 0 0 10px 0; }
#page-wrap                      { width: 500px; margin: 30px auto; position: relative; }

#chat-wrap                      { border: 1px solid #eee; margin: 0 0 15px 0; }
#chat-area                      { height: 300px; overflow: auto; border: 1px solid #666; padding: 20px; background: white; }
#chat-area span                 { color: white; background: #333; padding: 4px 8px; -moz-border-radius: 5px; -webkit-border-radius: 8px; margin: 0 5px 0 0; }
#chat-area p                    { padding: 8px 0; border-bottom: 1px solid #ccc; }

#name-area                      { position: absolute; top: 12px; right: 0; color: white; font: bold 12px "Lucida Grande", Sans-Serif; text-align: right; }   
#name-area span                 { color: #fa9f00; }

#send-message-area p            { float: left; color: white; padding-top: 27px; font-size: 14px; }
#sendie                         { border: 3px solid #999; width: 360px; padding: 10px; font: 12px "Lucida Grande", Sans-Serif; float: right; }<?php

    $function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
    
    	 case('getState'):
        	 if(file_exists('chat.txt')){
               $lines = file('chat.txt');
        	 }
             $log['state'] = count($lines); 
        	 break;	
    	
    	 case('update'):
        	$state = $_POST['state'];
        	if(file_exists('chat.txt')){
        	   $lines = file('chat.txt');