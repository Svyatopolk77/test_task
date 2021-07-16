<?php  

namespace App\Models;

class Message
{
	private $db;

	private $author;
	private $title;
	private $id;
	private $short_text;
	private $full_text;
	private $page;
	public function __construct()
	{
		$this->db=new Database();
		$this->id=$_POST['id'];
		$this->author=$_POST['author'];
		$this->title=$_POST['title'];
		$this->short_text=$_POST['short_text'];
		$this->full_text=$_POST['full_text'];
		$this->page=isset($_GET['page'])?$_GET['page']:1;
	}
	public function getAll()
	{
		$stmt=$this->db->connect()->prepare("SELECT * FROM messages LIMIT ". ($this->page-1)*5 .", 5");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function getById($id)
	{
		$stmt=$this->db->connect()->prepare("SELECT * FROM messages WHERE id=:id");
		$stmt->execute([
			'id'=>$id
		]);
		return $stmt->fetch();
	}
	public function save()
	{

		
			$stmt=$this->db->connect()->prepare("INSERT INTO messages (author,title,short_content,full_content) VALUES (:author,:title,:short_text,:full_text)");

			try {
				$stmt->execute([
				'author'=>$this->author,
				'title'=>$this->title,
				'short_text'=>$this->short_text,
				'full_text'=>$this->full_text
			]);
		
			} catch (Exception $e) {
				die($e->getMessage());
			}
	}
	public function edit()
	{

		$stmt=$this->db->connect()->prepare("UPDATE messages SET author=:author,title=:title,short_content=:short_content,full_content=:full_content WHERE id=:id");
		try {
				$stmt->execute([
				'author'=>$this->author,
				'title'=>$this->title,
				'short_content'=>$this->short_text,
				'full_content'=>$this->full_text,
				'id'=>$this->id
			]);
		
			} catch (Exception $e) {
				die($e->getMessage());
			}
	}
}