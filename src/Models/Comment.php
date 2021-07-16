<?php  
namespace App\Models;

class Comment
{
	private $db;

	private $author;
	private $text;
	
	private $message_id;
	public function __construct()
	{
		$this->db=new Database();
		$this->author=$_POST['author'];
		$this->text=$_POST['text'];
		$this->message_id=$_POST['id'];
		
	}

	public function save()
	{

		try {
			$stmt=$this->db->connect()->prepare("INSERT INTO comments (author,text,message_id) VALUES (:author,:text,:message_id)");

			
				$stmt->execute([
					'author'=>$this->author,
					
					'text'=>$this->text,
					'message_id'=>$this->message_id
				]);
		
		} catch (Exception $e) {
				die($e->getMessage());
			}
			
		
	}

	public function getAllByMsgId($id)
	{
		$stmt=$this->db->connect()->prepare("SELECT * FROM comments WHERE message_id=:message_id");
		$stmt->execute([
			'message_id'=>$id
		]);
		return $stmt->fetchAll();
	}
}
