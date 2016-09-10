<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Flyer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
	/***/
	public function index()
	{
		$handle = fopen ("http://www.mafengwo.cn/mdd/", "rb");
		$contents = "";
		do {
			$data = fread($handle, 1024);
			if (strlen($data) == 0) {
				break;
			}
			$contents .= $data;
		} while(true);
		fclose ($handle);
		//echo $contents;
		if(preg_match('/class=\"bd\">(.*)<\/div>/s', $contents, $match)) {
			$outside_list = explode('<dl class="item">', $match[0]);

			$outside_list = $this->cleararray($outside_list);

			foreach($outside_list as $k => $list) {

				if($k > 6) $father = 2;
				else $father = 1;
				if($father == 1){
					//一级id
					$title_start = strpos($list, '<dt class="sub-title">') + strlen('<dt class="sub-title">');
					$title_end = strpos($list, '</dt>') - $title_start;

					$title = substr($list, $title_start, $title_end);
				} else {
					$title_start = strpos($list, '.html">') + strlen('.html">');
					$title_end = strpos($list, '</a>') - $title_start;

					$title = substr($list, $title_start, $title_end);
				}


				$firstid = Destination::create(['name'=>$title,'parent_id'=>$father])->id;

				//二级id
				$sub_lists = explode('</li>', $list);


				$sub_lists = $this->cleararray($sub_lists);
				foreach($sub_lists as $sub_list) {
					if($father == 1) {
						//获取中文名称
						$sub_title_start = strpos($sub_list, 'target="_blank">') + strlen('target="_blank">');
						$sub_title_end = strpos($sub_list, '<span') - $sub_title_start;
						$sub_title = substr($sub_list, $sub_title_start, $sub_title_end);
						if(strlen($sub_title) <= 1 || strlen($sub_title)>=30) continue;

						//获取英文名称
						$sub_titleen_start = strpos($sub_list, 'class="en">') + strlen('class="en">');
						$sub_titleen_end = strpos($sub_list, '</span>') - $sub_titleen_start;
						$sub_titleen = substr($sub_list, $sub_titleen_start, $sub_titleen_end);


						Destination::create(['name'=>$sub_title, 'parent_id'=>$firstid,'en_name'=>$sub_titleen]);
					} else {
						$sub_title_start = strpos($sub_list, '.html">') + strlen('.html">');
						$sub_title_end = strpos($sub_list, '</a>') - $sub_title_start;
						$sub_title = substr($sub_list, $sub_title_start, $sub_title_end);
						if($sub_title) {
							Destination::create(['name'=>$sub_title, 'parent_id'=>$firstid]);
						}
					}
				}

				
			}

		}

		dd('error');
	}

	public function cleararray($array = [])
	{
		unset($array[0]);
		$count = count($array) - 1;
		unset($array[$count]);
		return $array;
	}
}
