<?php
foreach($data['users'] as $user){
    echo $user->user_name;
    echo $user->user_email;
}