<?php include 'parts/header.php' ?>
<?php include 'parts/navbar.php' ?>

<form action="/edit/message-post" method="post">
	<div class="frm-input">
  <label class="form-label">Имя</label>
  <input type="name" name="author" value="<?php echo $data['content']['author'] ?>" >
</div>
<div class="frm-input">
  <label class="form-label">Заголовок</label>
  <input type="text" name="title" value="<?php echo $data['content']['title'] ?>">
</div>
<div class="frm-input">
  <label  class="form-label">Краткое описание</label>
  <input type="text" name="short_text" value="<?php echo $data['content']['short_content'] ?>" >
</div>
<div class="frm-input">
  <label  class="form-label">Полный текст</label>
  <textarea name="full_text"><?php echo $data['content']['full_content'] ?></textarea>   
</div>

<input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">

<button type="submit" class="btn btn-success" >Отправить</button>
</form>

<?php include 'parts/footer.php' ?>
