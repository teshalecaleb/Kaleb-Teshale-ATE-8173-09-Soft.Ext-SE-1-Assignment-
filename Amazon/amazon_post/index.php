<?php
    require('db.php');
    require('config.php'); 
    
    class request{
      public $result;
      public $posts;
      public $output;
      public $comment;
    }
    $request = new Request(); 
    // create query
    $query =  'SELECT * FROM article';

    // get result
    $result = $request->title = mysqli_query($conn, $query);

    //fetch data
    $posts = $request->title = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);

    // free result
    mysqli_free_result($result);


    $data = 'SELECT * FROM comment';

    // get result
    $output = $request->title = mysqli_query($conn, $data);

    //fetch data
    $comment = $request->title = mysqli_fetch_all($output, MYSQLI_ASSOC);
    //var_dump($posts);

    // free result
    mysqli_free_result($output);


    //comment to database
    if(isset($_POST['submit'])){
      // Get dta
      $Commenter = mysqli_real_escape_string($conn, $_POST['Commenter']);
      $about = mysqli_real_escape_string($conn, $_POST['about']);

      $insert = "INSERT INTO comment(Commenter, about) VALUES('$Commenter','$about')";
    
      if(mysqli_query($conn, $insert)){
        header('Location: ' .ROOT_URL.'');
      }else{
        echo 'ERROR: '.mysqli_error($conn);
      }
    }
    //close connection
    mysqli_close($conn);
?>
<?php include('inc/header.html'); ?>
    <div class="container">
      <div class="row">  
        <div class="col-lg-8">
                <?php foreach($posts as $post) : ?>
                    <div class="post-preview">
                        
                    
                        <h2 class="post-title">
                            <?php echo $post['title']; ?>
                        </h2>
                        </a>
                        <p class="post-meta">Posted by 
                        
                        <a href="#"><?php echo $post ['autor']; ?></a>
                        Created on <?php echo $post['created_at']; ?>
                        Email : <?php echo $post['email']; ?><br>
                        Phone Number : <?php echo $post['phone']; ?>
                        <p class="lead"><?php echo $post['body']; ?></p>
                        
                        </p>
                                          
                    </div>
                <?php endforeach; ?>
                <hr> 
              </div>
            </div>
          </div>
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
              <div class ="form-group">
              <label>Name</label>
              <input type="text" name="Commenter" class="form-control" placeholder="Name" id="Commenter" required data-validation-required-message="">
              <p class="help-block text-danger"></p>
              </div>
              <div class ="form-group">
                  <label>Comment</label>
                  <textarea  name="about" class="form-control" placeholder="Please enter the TITIEL and AUTOR or the article youtwant to comment on" id="about" required data-validation-required-message=""></textarea>
                  <p class="help-block text-danger"></p>
              </div>
              <input type="submit" name="submit" value="submit" class="btn btn-primary">
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          
          <?php foreach($comment as $post) : ?>
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5>
                  <?php echo $post['Commenter']; ?>
                </h5>
                <?php echo $post['about']; ?>
              </div>
            </div>
          <?php endforeach; ?>
            </div>
          
          </div>

        </div>

      
      <!-- /.row -->

    </div>
    <?php include('inc/footer.html'); ?>