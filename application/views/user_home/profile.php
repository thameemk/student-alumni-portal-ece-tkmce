
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img height="200px" src="<?php echo base_url()?>assets/userhome/img/<?=$img?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?php echo $title; ?> </h3>
                    <a href="<?php echo base_url();?>User/editprofile">Edit profile</a>
                    <i class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?php echo $num_rows;?></span> posts
                    </li>
                </ul>
                <p class="profile__bio">
                  <ul>
                    <li class="mt-3"><span style="-webkit-text-stroke: medium;">Company / Organaisation :</span> <?php echo $user_company;?></li>
                    <li class="mt-3"><span style="-webkit-text-stroke: medium;">Email :</span> <?php echo $user_email;?></li>
                    <li class="mt-3"><span style="-webkit-text-stroke: medium;">Email :</span> <?php echo $phone;?></li>
                    <li class="mt-3"><span style="-webkit-text-stroke: medium;">Password :</span> <?php echo "•••••••";?></li>

                </p>
            </div>
        </header>
      </main>
    <main id="feed">
        <?php foreach ($user as $row) { ?>
        <div class="photo">
            <h1 class="title mt-3 ml-3 mr-3 mb-3"><?=$row['title']?></h1>
            <ul class="pt-1">
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Company / Organisation :</span> <?=$row['place']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Location : </span><?=$row['location']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Web Link :</span> <a href="<?=$row['reg_link']?>"><?=$row['reg_link']?></a> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Last Date :</span> <?=$row['last_date']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Email : </span><?=$row['email']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">Contact Number : </span><?=$row['phone']?> </li>
              <li class="ml-3 mt-3 "><span style="-webkit-text-stroke: medium;">More Info :</span> <?=$row['details']?> </li>
            </ul>
            <div class="photo__info">
                <div class="photo__add-comment-container"></div>
            </div>
        </div>
      <?php } ?>
    </main>
