<?php
namespace App\Http;

Class Flash{
	/**
	 * Create a flash message
	 *
	 * @param string        $title
	 * @param string        $message
	 * @param string|null   $level
	 * @param string $key
	 */
	private function create($title, $message, $level, $key = 'flash_message')
	{
		session()->flash($key, [
			'message' => $message,
			'title' => $title,
			'level' => $level
		]);
	}

	/**
	 * Create a info message
	 *
	 * @param string        $title
	 * @param string        $message
	 */
	public function info($title, $message)
	{
		$this->create($title ,$message, 'info');
	}

	/**
	 * create a success message
	 *
	 * @param String        $title
	 * @param string        $message
	 */
	public function success($title, $message)
	{
		$this->create($title ,$message, 'success');
	}
	/**
	 * create a error message
	 *
	 * @param String        $title
	 * @param string        $message
	 */
	public function error($title, $message)
	{
		$this->create($title, $message, 'error');
	}
	/**
	 * create a success message
	 *
	 * @param String        $title
	 * @param string        $message
	 */
	public function overlay($title, $message, $level='success') {
		$this->create($title, $message, $level, 'flash_message_overlay');
	}

}