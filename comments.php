<?php

wp_list_comments( array(

	'callback'		=> 'bizni_comment_list',

));

function bizni_comment_list($one, $two, $three){ ?>
                        <ul class="comment-tree">
                                <li>
                                    <div class="comment-box">
                                        <?php echo get_avatar($one); ?>
                                        <div class="comment-content">
                                            <h4><?php comment_author(); ?></h4>
                                            <span><?php echo get_the_date('d M, Y'); ?> <?php echo get_the_date('g:i:a'); ?> </span>
                                            <p><?php comment_text(); ?></p>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="depth">
                                        <li>
                                            <div class="comment-box">

                                            	<?php 
                                            		comment_reply_link( array_merge($two,
                                            			array(
                                            				'depth'		=> $three,
                                            				'maxt_depth' => $two['maxt_depth'],
                                            			), 

                                            		));

                                            	?>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>


<?php

}



comment_form();
