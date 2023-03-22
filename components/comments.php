                            <div class="add-comment-box">
                                <div class="inner-title">
                                    <h2>Leave a Comment</h2>
                                </div>
                                <form id="add-comment-form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-box">
                                                        <textarea name="comment" placeholder="Write message"
                                                            required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="button-box">
                                                        <button class="btn-one" name="submit_comment" type="submit">
                                                            <span class="txt">Submit Comment</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="comment-box">
                                <div class="inner-title">
                                    <h2><?= $comment_count; ?> Comments</h2>
                                </div>
                                <div class="outer-box">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <?php 
                                                if ($all_comments) {
                                                    foreach ($all_comments as $comment) {
                                                        extract($comment); ?>

                                            <!--Start single comment-->
                                            <div class="single-comment">
                                                <div class="single-comment-box">
                                                    <div class="img-holder">
                                                    <div style="width: 140px; height: 140px; background-image: url(assets/images/news/<?= $post_img; ?>); background-position: center; background-size: cover;">
                                                    </div>
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="top">
                                                            <div class="name">
                                                                <h3><?= $member; ?></h3>
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <p><?= $comment; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End single comment-->

                                            <?php } } else { echo "No comments yet!";  } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>