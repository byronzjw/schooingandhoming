<!DOCTYPE html>
<html class="ui-page-login">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Schooling and Homing</title>
    <link href="/public/css/mui/css/mui.min.css" rel="stylesheet" />
    <link href="/public/css/mui/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/public/css/mui/css/feedback-page.css" />
    <link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="/public/css/mobile/usercenter.css">
    <script type="text/javascript" src="/public/bootstrap/js/jquery.min.js"></script>
    <script src="/public/layer/layer.js"></script>


</head>
<style>
    .mui-content{background: #fbfbfb}
</style>
<body>
<div class="mui-navbar-inner mui-bar mui-bar-nav">
    <button type="button" class="mui-left mui-action-back mui-btn  mui-btn-link mui-btn-nav mui-pull-left">
        <span class="mui-icon mui-icon-left-nav"></span>
    </button>
    <h1 class="mui-center mui-title">我的消息</h1>
</div>
<div class="mui-content">
    <?php if(!empty($list)):?>
    <ul class="mui-table-view">
        <?php foreach($list as $v):?>
        <li class="mui-table-view-cell mui-media">
            <a href="/mobile/Home/Msg_con/<?=$v['id']?>">
                <img class="mui-media-object mui-pull-left" src="/public/images/icon/Re_msg.jpg">
                <div class="mui-media-body">
                    <b style="font-weight: <?=$v['is_read']==1?'700':'500'?>">消息回复</b>
                    <p style="float: right"><?=$v['reply_time']?></p>
                    <p class='mui-ellipsis'><?=$v['content']?></p>
                </div>
            </a>
        </li>
        <?php endforeach;?>
    </ul>
    <?php else: ?>
    <div style="text-align: center;line-height: 100%;height: 100%;padding-top: 50%;">
        <p style="color: #ccc;font-size: 50px" class="mui-icon mui-icon-chat"></p>
        <p>没有任何消息</p>
    </div>
    <?php endif;?>
</div>

<script src="/public/js/mui/js/mui.min.js"></script>
</body>
<script>
    $('.mui-icon-left-nav').click(function(){
        location.href = '/mobile/home/';
    });

</script>
</html>