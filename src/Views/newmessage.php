<?php include 'parts/header.php' ?>
<?php include 'parts/navbar.php' ?>

  
  


<form action="/new/message-post" method="post">
	<div class="frm-input">
  <label class="form-label">Имя</label>
  <input type="name" name="author" value="anonymous" >
</div>
<div class="frm-input">
  <label class="form-label">Заголовок</label>
  <input type="text" name="title">
</div>
<div class="frm-input">
  <label  class="form-label">Краткое описание</label>
  <input type="text" name="short_text" >
</div>
<div class="frm-input">
  <label  class="form-label">Полный текст</label>
  <textarea name="full_text"></textarea>   
</div>


<button type="submit" class="btn btn-success" >Отправить</button>
</form>



<?php include 'parts/footer.php' ?>