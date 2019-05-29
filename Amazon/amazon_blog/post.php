<?php
    require('db.php');
    class post_data{    
      public $id ;
      public $result;
      public $post_fetch;
    }
    $post_data= new Post_data();
    //get id
    $id = $post_data->id = mysqli_real_escape_string($conn, $_GET["id"]);      
    // create query
    $query = 'SELECT * FROM posts WHERE id = '.$id;
    // get result
    $result = $post_data->result = mysqli_query($conn, $query);
    //fetch data
    $post_fetch = $post_data->post_fetch = mysqli_fetch_assoc($result);
    //count view
    $update_view = 'UPDATE posts SET no_view = no_view + 1 WHERE id = '.$id;
    $results = mysqli_query($conn, $update_view);

    // free result
    mysqli_free_result($result);

    mysqli_close($conn);
?>
<?php include('inc/header_post.html'); ?>
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo $post_fetch['body']; ?></p>
            
            <h2 class="section-heading">Reaching for the Stars</h2>

            <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

            <a href="#">
              <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
            </a>
            <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

            <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>

            <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

            <p>Placeholder text by
              <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
              <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
            
          </div>
        </div>
      </div>
    </article>

<?php include('inc/footer_post.html'); ?>