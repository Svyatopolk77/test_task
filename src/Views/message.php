<?php include 'parts/header.php' ?>
<?php include 'parts/navbar.php' ?>


<div class="postContent" >
        <h3 class="postTitle"><?php echo $data['content']['title']; ?></h3>
       
        <div class="postText"><?php echo $data['content']['full_content']; ?>
        </div>

        <div class="postAuthor">
             <strong>Автор: <?php echo $data['content']['author'] ?></strong>
        </div>
        <a class='viewSource' href="/edit?id=<?php echo $_GET['id'] ?>">Редактировать</a>.
        <div class="postComments">
        	<h3>Комментарии </h3>
        	
<?php for ($i = 0; $i < count($data['comments']) ; $i++) {

    echo "<div class='card-comment'>".
    "<div class='card-comment-content'>".
    $data['comments'][$i]['text'].
    "</div>".
    "<div class='card-footer'>".
      "<div class='card-author'>Автор: ".
      $data['comments'][$i]['author'].
      "</div>".
    "</div>".

  "</div>";
    
  }


?>
        



</div>
<div class="form-add-comm">


<form action="/new/comment-post" id="frmAddComm" method="POST" style="display:inline;">
        	 	<div class="col-md-6">
    
    <input type="name" name="author" id="username" placeholder="username" value="anonymous" class="form-control">
  </div>
  <div class="col-12">
    <textarea type="text" style="margin-top: 10px" name="text" id="usertext" class="form-control"></textarea>
  </div>
            <input type="submit" value="Add comment"   class="btn btn-success" id="btn"/>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
        </form>  
    </div>
      
</div>

<?php include 'parts/footer.php' ?>