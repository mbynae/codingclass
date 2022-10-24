<?php
    $myBlogNewSql = "SELECT * FROM myblog WHERE blogDelete = 0 ORDER BY myBlogID DESC LIMIT 4";
    $myBlogNewResult = $connect -> query($myBlogNewSql);

    foreach($myBlogNewResult as $myBlogNew){?>
        <li>
            <a href="blogView.php?blogID=<?=$myBlogNew['myBlogID']?>">
                <span><img src="../assets/img/blog/<?=$myBlogNew['blogImgFile']?>" alt="<?=$myBlogNew['blogImgFile']?>"></span>
                <em><?=$myBlogNew['blogTitle']?></em>
            </a>
        </li>
 <?php } ?>




