<?php

class blogDescriptionsModel extends waModel
{
	protected $table = 'blog_post';

	public function setDescription($id_post,$description){
		$this->exec("UPDATE {$this->table} SET text_before_cut = '$description' WHERE id = i:id", array('id' => $id_post));
		return true;
	}
}