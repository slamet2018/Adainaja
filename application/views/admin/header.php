<!DOCTYPE html>
<html>
<head>
    <title>BeAwesome | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/semantic.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/main.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/animate.css'?>">
    <script type="text/javascript">$('.ui.accordion').accordion();</script>
</head>

<body>
    <div class="ui fixed top menu">
        <a href="javascript:void(0)" class="icon active item" id="hideToggle"><h3><i class="chevron left icon"></i></h3></a>
        <a href="javascript:void(0)" class="icon active item" id="showToggle"><h3><i class="chevron right icon"></i></h3></a>
        <a href="dashboard.html" data-toggle="slide" class="item"><h3>Be Awesome!</h3></a>
        <div class="menu right">
            <a class="icon item pointer" data-toggle="popup" data-content="#mail" data-position="bottom right"><i class="mail icon"></i></a>
            <div id="mail" class="ui fluid popup" style="min-width:400px;padding-top:30px;">
                <div class="ui divided items">
                    <div class="item">
                        <img src="http://semantic-ui.com/images/avatar/large/stevie.jpg" class="ui avatar image">
                        <div class="content">
                            <a class="header">Stevie Feliciano</a>
                            <div class="description">
                                Stevie Feliciano is a <a>library scientist</a>...
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://semantic-ui.com/images/avatar/large/veronika.jpg" class="ui avatar image">
                        <div class="content">
                            <a class="header">Veronika Ossi</a>
                            <div class="description">
                                Veronika Ossi is a set designer living...
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://semantic-ui.com/images/avatar/large/jenny.jpg" class="ui avatar image">
                        <div class="content">
                            <a class="header">Jenny Hess</a>
                            <div class="description">
                                Jenny is a student <a>the New School</a>...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <a href="" class="ui right floated tiny button">All Message</a>
            </div>
            <a class="icon item pointer" data-toggle="popup" data-content="#notif" data-position="bottom right"><i class="bell icon"></i></a>
            <div id="notif" class="ui fluid popup" style="min-width:400px;padding-top:30px;">
                <div class="ui divided items">
                    <div class="item">
                        <div class="content">
                            <i class="bell icon"></i> Illum ratione aliquam veniam voluptates porro,
                            <div class="extra content">
                                Sunday, 20-03-2016
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="bell icon"></i> Facere, quas maxime at consequuntur
                            <div class="extra content">
                                Sunday, 20-03-2016
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <i class="bell icon"></i> Officiis ex sint distinctio.
                            <div class="extra content">
                                Sunday, 20-03-2016
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
                <a href="" class="ui right floated tiny button">All Notification</a>
            </div>
            <a class="icon item pointer" data-toggle="popup" data-content="#user" data-position="bottom right"><img src="<?php echo base_url().'assets/img/people_4.jpg' ?>" class="ui avatar image" alt=""></a>
            <div id="user" class="ui popup">
                <div class="ui secondary vertical menu">
                    <div class="header item">USER MENU</div>
                    <a href="" class="item">Profile <i class="user icon"></i></a>
                    <a href="" class="item">Groups <i class="users icon"></i></a>
                    <a href="" class="item">Settings <i class="settings icon"></i></a>
                    <div class="ui divider"></div>
                    <a href="index.html" class="item">Logout <i class="sign out icon"></i></a>
                </div>
            </div>
        </div>
    </div>
