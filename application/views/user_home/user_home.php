<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success" role="alert">
  <center><?php echo $this->session->flashdata('msg'); ?></center>
</div>
<?php endif; ?>

<main id="feed">
        <div class="photo">
            <header class="photo__header">
                <img src="<?php echo base_url()?>assets/userhome/front/images/avatar.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">author</span>
                    <span class="photo__location">company</span>
                </div>
            </header>
            <h1 class="title mb-3">title</h1>
            <p class="details ml-3 mr-3 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci</p>
            <img src="<?php echo base_url()?>assets/userhome/front/images/feedPhoto.jpg" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">comment_author</span> comment
                    </li>
                </ul>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
