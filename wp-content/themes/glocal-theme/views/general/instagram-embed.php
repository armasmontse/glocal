<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="<?php echo $post['link']; ?>" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
    <div style="padding:8px;"> 
        <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> 
            <div style=" background:url(<?php echo $post['images']['standard_resolution']['url']; ?>); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
        </div> 
        <p style=" margin:8px 0 0 0; padding:0 4px;"> 
            <a href="<?php echo $post['link']; ?>" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">
                <?php echo $post['caption']['text']; ?>
            </a>
        </p> 
        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Una publicación compartida de 
            <a href="https://www.instagram.com/<?php echo $post['user']['username']; ?>/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank">
                <?php echo $post['user']['full_name']; ?>
            </a> (@<?php echo $post['user']['username']; ?>) el 
            <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="<?php echo date("Y-m-d\TH:i:s\Z", $post['created_time']); ?>"><?php echo date("d M\, Y", $post['created_time']); ?> a las <?php echo date("H:i e", $post['created_time']); ?></time>
        </p>
    </div>
</blockquote> 