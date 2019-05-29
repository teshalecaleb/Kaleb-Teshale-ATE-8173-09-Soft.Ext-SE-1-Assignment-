<?php
    require('config.php');
    require('db.php');
    class home{
        public $result;
        public $posts;
    }
        $home = new Home();
        // create query
        $query = 'SELECT * FROM posts';

        // get result
        $result = $home->result = mysqli_query($conn, $query);

        //fetch data
        $posts = $home->posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // free result
        mysqli_free_result($result);

        //close connection
        mysqli_close($conn);
?>

    
<?php include('inc/header_home.html'); ?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php foreach($posts as $post) : ?>
                    <div class="post-preview">                      
                    
                        <h2 class="post-title">
                            <?php echo $post['title']; ?>
                        </h2>
                        
                        
                        <p class="post-meta">Posted by                         
                        <a href="#"><?php echo $post ['autor']; ?></a>
                        Created on <?php echo $post['created_at']; ?><br>                        
                        </p>
                        <a class = "btn btn-default" href="post.php?id=<?php echo $post['id']; ?>">Read article</a>                   
                    </div>
                <?php endforeach; ?>
                <hr>            

       
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="amazon_payment/index.html">Payment detail&rarr;</a>
                </div>
            </div>
        </div>
    </div>    
<?php include('inc/footer_home.html'); ?>