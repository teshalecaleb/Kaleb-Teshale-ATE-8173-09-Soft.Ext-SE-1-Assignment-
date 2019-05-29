<?php
    require('db.php');
    require('config.php');
    class contact{    
        public $title;
        public $body;
        public $autor;        
        public $email;
        public $phone;      
        
}

    if (isset($_POST['submit'])){
        $contact= new Contact(); // Instantiate the class
        $title = $contact->title = mysqli_real_escape_string($conn, $_POST['title']); 
        $body =  $contact->body = mysqli_real_escape_string ($conn, $_POST['body']);
        $autor = $contact->autor = mysqli_real_escape_string($conn, $_POST['autor']);
        $email = $contact->email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = $contact->phone = mysqli_real_escape_string($conn, $_POST['phone']);
       
        $query = "INSERT INTO article(title, body, autor, email, phone) VALUES('$title', '$body', '$autor', '$email', '$phone')";

        if(mysqli_query($conn, $query)){
            header('Location: ' .ROOT_URL.'');
        }else{
            echo 'ERROR: '.mysqli_error($conn);
        }
    }
      
?>
<?php include('inc/header_contact.html'); ?>
    <!-- Main Content -->
    <div class='container'>
      <h1>Add Post Request</h1>
      <p>Want to get in touch? Fill out the form below to send us a message and we will get back to you as soon as possible!</p>
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class ="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>        
      </div>
      <div class ="form-group">
          <label>Phone number</label>
          <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
          <p class="help-block text-danger"></p>
      </div>
      <div class ="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control" placeholder="Title" id="title" required data-validation-required-message="Please enter your title.">
          <p class="help-block text-danger"></p>
      </div>
      <div class ="form-group">
          <label>Autor</label>
          <input type="text" name="autor" class="form-control" placeholder="Autor" id="autor" required data-validation-required-message="Please enter autor name.">
          <p class="help-block text-danger"></p>
      </div>
      <div class ="form-group">
          <label>Body</label>
          <textarea  name="body" class="form-control" placeholder="Body" id="body" required data-validation-required-message="Please enter the article."></textarea>
          <p class="help-block text-danger"></p>
      </div>
      <input type="submit" name="submit" value="submit" class="btn btn-primary">
      </form>
    </div>
    <hr>
<?php include('inc/footer_contact.html'); ?>