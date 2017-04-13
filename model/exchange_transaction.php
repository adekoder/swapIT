<?php
require('db.php');
class exchangeTransaction extends DB
{
	protected exchange_requester_id ;
	protected exchange_reciever_id;
	protected transaction_id;
	protected exchange_requester_item_id;
	protected exchange_reciever_item_id;
	protected exchange_status;

	public function send_exchange_request($requester_id,$reciever_id,$request_item_id , $reciever_item_id, )
	{
		$this->exchange_requester_id = $requester_id;
		$this->exchange_reciever_id = $reciever_id;
		$this->transaction_id = $this->transaction_id();
		$this->exchange_requester_item_id = $request_item_id;
		$this->exchange_reciever_item_id = $reciever_item_id;
		


	}

	protected function transaction_id()
	{
		$id =  sh1('swap'.rand(1,9999));
		$id = substr($id,10);
		return $id;
	}
}

 ?>