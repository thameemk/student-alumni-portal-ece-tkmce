<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success" role="alert">
  <center><?php echo $this->session->flashdata('msg'); ?></center>
</div>
<?php endif; ?>

<main id="feed">
      <?php foreach($feed as $row){ ?>
        <div class="photo">
            <header class="photo__header">
                <img src="<?=$row['author_img']?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?=$row['author_first_name']?>&nbsp;<?=$row['author_last_name']?></span>
                    <span class="photo__location"><?=$row['company']?></span>
                </div>
            </header>
            <h1 class="title mb-3"><?=$row['title']?></h1>
            <ul class="pt-1">
              <li class="ml-3 mt-3 ">Company / Organisation : <?=$row['place']?> </li>
              <li class="ml-3 mt-3 ">Location : <?=$row['location']?> </li>
              <li class="ml-3 mt-3 ">Web Link : <a href="<?=$row['reg_link']?>"><?=$row['reg_link']?></a> </li>
              <li class="ml-3 mt-3 ">Last Date : <?=$row['last_date']?> </li>
              <li class="ml-3 mt-3 ">Email : <?=$row['email']?> </li>
              <li class="ml-3 mt-3 ">Contact Number : <?=$row['phone']?> </li>
              <li class="ml-3 mt-3 ">More Info : <?=$row['details']?> </li>
            </ul>
            <div class="photo__info">
                <div class="photo__add-comment-container"></div>
            </div>
        </div>
      <?php } ?>
