<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Latest posts</h4>
                <?php

                    $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
                    $statement = $connection->prepare($sql);

                    $statement->execute();

                    $statement->setFetchMode(PDO::FETCH_ASSOC);

                    $posts = $statement->fetchAll();

                    foreach ($posts as $post) {
                ?>

                <p><a href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo $post['title'] ?></a></p>

                <?php
                    }
                ?>
            </div>
            <div class="sidebar-module">
                
            </div>
            <div class="sidebar-module">
                                
            </div>
        </aside>