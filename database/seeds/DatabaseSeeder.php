<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		$this->call('ProductTableSeeder');
	}

}
class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->insert([
				array('username' => 'user1' , 'password'=>'123456','email'=>'bduy1789@gmail.com','level'=>'1','remember_token'=>'svs'),
				array('username' => 'user2' , 'password'=>'123456','email'=>'bduy1289@gmail.com','level'=>'1','remember_token'=>'svdvsd'),
				array('username' => 'user3' , 'password'=>'123456','email'=>'bduy1389@gmail.com','level'=>'1','remember_token'=>'sdvsdv'),
				array('username' => 'user4' , 'password'=>'123456','email'=>'bduy1489@gmail.com','level'=>'1','remember_token'=>'svdvsv')
				
				
			]);
	}

}
class CateTableSeeder extends Seeder {
	public function run()
	{
		DB::table('categories')->insert([
				array('name' => 'áo sơ mi' , 'alias'=>'ao-so-mi','active'=>'1','description'=>'không có gì'),
				array('name' => 'áo đỏ' , 'alias'=>'ao-do','active'=>'1','description'=>'không có gì'),
				array('name' => 'áo vàng' , 'alias'=>'ao-vang','active'=>'1','description'=>'không có gì'),
				array('name' => 'áo trắng' , 'alias'=>'ao-trang','active'=>'1','description'=>'không có gì'),
				array('name' => 'áo xanh' , 'alias'=>'ao-xanh','active'=>'1','description'=>'không có gì'),
				array('name' => 'áo tím' , 'alias'=>'ao-tim','active'=>'1','description'=>'không có gì'),
				array('name' => 'áo đen' , 'alias'=>'ao-den','active'=>'1','description'=>'không có gì')
				
				
			]);
	}

}

class ProductTableSeeder extends Seeder {
	public function run()
	{
		DB::table('products')->insert([
				array('name' => 'áo đỏ đỏ' , 'alias'=>'ao-do-do','price'=>'100000','content'=>'không có gì','image'=>'abc.jpg','description'=>'không có gì','active' => '1','user_id'=>'1','cate_id'=>'2'),
				array('name' => 'áo đỏ au' , 'alias'=>'ao-do-au','price'=>'100000','content'=>'không có gì','image'=>'abc1.jpg','description'=>'không có gì','active' => '1','user_id'=>'2','cate_id'=>'2'),
				array('name' => 'áo đỏ tím' , 'alias'=>'ao-do-tim','price'=>'100000','content'=>'không có gì','image'=>'abc2.jpg','description'=>'không có gì','active' => '1','user_id'=>'1','cate_id'=>'2'),
				array('name' => 'áo đỏ vàng' , 'alias'=>'ao-do-vang','price'=>'100000','content'=>'không có gì','image'=>'abc3.jpg','description'=>'không có gì','active' => '1','user_id'=>'1','cate_id'=>'2'),
				array('name' => 'áo đỏ xanh' , 'alias'=>'ao-do-xanh','price'=>'100000','content'=>'không có gì','image'=>'abc4.jpg','description'=>'không có gì','active' => '1','user_id'=>'2','cate_id'=>'2'),
				array('name' => 'áo đỏ hồng' , 'alias'=>'ao-do-hong','price'=>'100000','content'=>'không có gì','image'=>'abc5.jpg','description'=>'không có gì','active' => '1','user_id'=>'1','cate_id'=>'2'),
				array('name' => 'áo đỏ tía' , 'alias'=>'ao-do-tia','price'=>'100000','content'=>'không có gì','image'=>'abc6.jpg','description'=>'không có gì','active' => '1','user_id'=>'1','cate_id'=>'2'),
				array('name' => 'áo đỏ đen' , 'alias'=>'ao-do-den','price'=>'100000','content'=>'không có gì','image'=>'abc7.jpg','description'=>'không có gì','active' => '1','user_id'=>'2','cate_id'=>'2'),
				array('name' => 'áo đỏ tắng' , 'alias'=>'ao-do-tang','price'=>'100000','content'=>'không có gì','image'=>'abc8.jpg','description'=>'không có gì','active' => '1','user_id'=>'1','cate_id'=>'2'),
				array('name' => 'áo đỏ nhạt' , 'alias'=>'ao-do-nhat','price'=>'100000','content'=>'không có gì','image'=>'abc9.jpg','description'=>'không có gì','active' => '1','user_id'=>'2','cate_id'=>'2')
				
				
				
			]);
	}

}
